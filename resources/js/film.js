class Film {

    sizeUpdated = false;

    init()
    {
        let thumbnails = document.querySelectorAll('.film-thumbnail');
        thumbnails.forEach(function (thumb) {
            thumb.onclick = function (event) {
                this.openModal(event.target);
            }.bind(this);
        }.bind(this));
    }

    openModal(thumb)
    {
        // Query the elements
        let button = document.getElementById('film-modal-toggle');
        let modal = document.getElementById('film-modal');
        let iframe = modal.querySelector('iframe');

        // Set the src on the iframe
        iframe.setAttribute('src', thumb.getAttribute('url'));

        // Update the iframe size
        if (!this.sizeUpdated) {
            const modalSize = modal.getBoundingClientRect();
            if (modalSize.width < 620) {
                //alert("Hoi");
            }
        }

        // Set the modal title
        let header = modal.querySelector('.uk-modal-title');
        if (header) {
            header.innerHTML = thumb.getAttribute('title');
        }

        // Finally, open the modal!
        button.click();
    }

}

module.exports = Film;