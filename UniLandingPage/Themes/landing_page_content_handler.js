/*
    LandingPageContentHandler ==> READ SHOW
*/

class LandingPageContentHandler {
    #isLoaded = false;
    pattern = /{{(.*?)}}/ig;
    readJson = {};
    templateStrings = [];
    data = [];

    constructor(urls, parentTarget, topic) {
        this.readURL = urls.readURL;
        this.readJson = urls.readJson || this.readJson;

        if (urls.templateURL) {
            this.templateURL = urls.templateURL;
        } else {
            let templateURL = $(parentTarget).find(`.target_container`).data(`templateurl`) || "";

            if (templateURL.length) {
                this.templateURL = templateURL;
            }
        }

        this.parentTarget = $(parentTarget);
        this.target = $(parentTarget).find(`.target_container`);

        this.topic = topic;

        this.#eventTrigger();
        this.#checkTargetInViewport();
    }

    #eventTrigger() {
        $(window).scroll(() => this.#checkTargetInViewport());
    }

    #checkTargetInViewport() {
        let elementTop = this.parentTarget.offset().top || 0;
        let elementBottom = elementTop + this.parentTarget.outerHeight();
        let viewportTop = $(window).scrollTop();
        let viewportBottom = viewportTop + $(window).height();
        let isInViewport = elementBottom > viewportTop && elementTop < viewportBottom;

        if (isInViewport && !this.#isLoaded) {
            this.#isLoaded = true;
            this.#show();
        }
    }

    #getData() {
        return new Promise((resolve, reject) => {
            if (this.data.length) {
                resolve(this.data);
            } else {
                $.post(this.readURL, this.readJson, (resp) => {
                    this.data = resp.data;
                    resolve(resp.data);
                }, "json");
            }
        });
    }

    #getTemplate() {
        return new Promise((resolve, reject) => {
            if (this.templateStrings.length) {
                resolve(this.templateStrings);
            } else {
                let urls = this.templateURL.split(",");
                this.templateStrings = [];

                $.each(urls, (index, url) => {
                    $.get(url, htmlString => {
                        this.templateStrings = [...this.templateStrings, htmlString];
                        if (urls.length == this.templateStrings.length) {
                            resolve(this.templateStrings);
                        }
                    }, "html");
                });
            }
        });
    }

    #show() {
        Promise.all([this.#getData(), this.#getTemplate()])
            .then(([data, htmlStrings]) => {
                this.target.empty();

                $.each(data, (index, value) => this.appendOne(value, htmlStrings[index % htmlStrings.length]));
            })
            .catch(error => {
                this.target.empty();

                console.log(error);
                $(`<div class="col-md-12">
                        <div class="text-center text-secondary w-100 rounded border shadow-sm">
                            <div class="py-5">
                                <i class="fas fa-calendar-alt fa-3x"></i>
                                <h5 class="text-500 font-weight-normal mb-0">No ${this.topic} found</h5>
                            </div>
                        </div>
                    </div>`)
                    .appendTo(this.target);
            });
    }

    appendOne(value, templateString) {
        var match;

        while ((match = this.pattern.exec(templateString)) != null) {
            templateString = templateString.replace(match[0], value[match[1]]);
        }

        $(templateString).appendTo(this.target);
    }
}