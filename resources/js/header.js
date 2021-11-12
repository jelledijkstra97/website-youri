class Header {

    container = null;
    flipConstraint = 40;
    flippingBlocks = [];

    constructor()
    {

    }

    onScroll() 
    {
        this.decideIfHeaderShouldFlip();
    }

    decideIfHeaderShouldFlip()
    {
        const windowY = window.scrollY;
        const windowX = window.scrollX;
        this.toggleFlippedState(false);

        this.getFlippingBlocks().forEach(function (block) {
            const rect = block.getBoundingClientRect();
            if (rect.top <= this.flipConstraint && (rect.top + rect.height) >= this.flipConstraint) {
                this.toggleFlippedState(true);
            }
        }.bind(this));
    }

    /**
     * Set the flipped state of the header
     * 
     * @param boolean state 
     */
    toggleFlippedState(state)
    {
        const className = "flipped";
        const container = this.getContainer();

        if (container.classList.contains(className) && state === false) {
            container.classList.remove(className);
        } else if (!container.classList.contains(className) && state === true) {
            container.classList.add(className);
        }
    }

    /**
     * Query the header container
     * 
     * @returns HTMLElement
     */
    getContainer()
    {
        if (this.container !== null) {
            return this.container;
        }

        this.container = document.getElementById('headerContainer');
        this.flipConstraint = this.container.getBoundingClientRect().height / 2;
        return this.container;
    }

    /**
     * Query all blocks that should flip the header
     * 
     * @returns array
     */
    getFlippingBlocks()
    {
        if (this.flippingBlocks.length > 0) {
            return this.flippingBlocks;
        }

        this.flippingBlocks = document.querySelectorAll('[flipsheader]');
        return this.flippingBlocks;
    }

}

module.exports = Header;