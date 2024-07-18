class CorrectScroll
{
    milliseconds = 300;
    timeout = null;
    blocks = [];

    constructor() {}

    init() {

    }

    onScroll() {
        if (this.timeout !== null) {
            clearTimeout(this.timeout);
        }

        this.timeout = setTimeout(() => {
            this.correct();
        }, this.milliseconds);
    }

    correct()
    {
        const windowHeight = window.innerHeight;
        
        // If the footer is in screen, skip
        const footer = document.querySelector('.page-footer');
        if (footer) {
            const footerRect = footer.getBoundingClientRect();
            if (footerRect.top <= windowHeight) {
                return;
            }
        }

        this.getBlocks().forEach((block) => {
            const rect = block.getBoundingClientRect();

            // If the block is not visible, skip
            if ((rect.top > windowHeight || rect.top < 0) && (rect.bottom > windowHeight || rect.bottom < 0)) {
                return;
            }

            // If the block is higher than the window and fully visible, skip
            if (rect.top <= 0 && rect.bottom >= windowHeight) {
                return;
            }

            // Get visible height
            const visibleHeight = Math.min(windowHeight, rect.bottom) - Math.max(0, rect.top);

            // If the block is more visible than the threshold - scroll
            if ((visibleHeight / windowHeight) > 0.8) {
                const container = this.getScrollContainer();
                const currentY = container.scrollTop;
                smoothScroll({
                    scrollingElement: container,
                    yPos: currentY + rect.top,
                    duration: 200
                });
            }
        });
    }

    getBlocks()
    {
        if (this.blocks.length > 0) {
            return this.blocks;
        }

        this.blocks = document.querySelectorAll('.full-height');
        return this.blocks;
    }

    getScrollContainer()
    {
        return document.querySelector('.root');
    }

}

module.exports = CorrectScroll;