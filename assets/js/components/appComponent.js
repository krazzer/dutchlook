export class AppComponent {
    /**
     * @param {App} app
     */
    constructor(app) {
        this.app = app;
    }

    /**
     * Init component
     */
    init() {
        return this;
    }

    initGlightbox() {
        GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: false,
        });
    }

    dataHandler() {
        let self = this;

        return {
            images: [],
            init() {
                fetch('/images.json')
                    .then(response => response.json())
                    .then(data => this.images = data)
                    .then(() => this.onRenderComplete())
                    .catch(error => console.error(error));
            },
            onRenderComplete() {
                this.$nextTick(() => {
                    self.initGlightbox();
                });
            },
        };
    }
}