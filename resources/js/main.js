class Main {
    root = null;
    header = null;
    film = null;

    init()
    {
        const root = this.getRoot();
        if (root === null || root === undefined) {
            setTimeout(() => {
                this.init();
            }, 100);
        } else {
            this.setScrollListener();
            this.getFilm().init();
        }
    }

    /**
     * Handle scroll of the root div
     */
    setScrollListener()
    {
        var callback = function () {
            this.getHeader().onScroll();
        };

        this.getRoot().addEventListener('scroll', callback.bind(this));
    }

    /**
     * Get the root div
     * 
     * @returns HTMLDivElement
     */
    getRoot()
    {
        if (this.root !== null) {
            return this.root;
        }

        return document.getElementById('root');
    }

    /**
     * Get a reference to the Header class
     * 
     * @returns Header
     */
    getHeader()
    {
        if (this.header !== null) {
            return this.header;
        }

        var Header = require('./header');
        this.header = new Header();
        return this.header;
    }

    /**
     * Get a reference to the Film class
     */
    getFilm()
    {
        if (this.film !== null) {
            return this.film;
        }

        var Film = require('./film');
        this.film = new Film();
        return this.film;
    }

}

module.exports = Main;