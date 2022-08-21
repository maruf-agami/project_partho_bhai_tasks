/**
*  BasicCRUD => Perform basic operation such as create, read, update & delete
*
* example => studentoffice/student_scholarship.php
*/
class BasicCRUD {
    constructor(settings) {
        this.readURL = settings.readURL;
        this.createURL = settings.createURL;
        this.updateURL = settings.updateURL;
        this.deleteURL = settings.deleteURL;

        this.targetCard = $(settings.targetCard);
        this.addButton = this.targetCard.find(`.add_button`);
        this.filterForm = this.targetCard.find(`.filter_form`);

        this.targetContainer = $(settings.targetContainer);

        this.setupModal = $(settings.setupModal);
        this.setupForm = this.setupModal.find(`.setup_form`);

        this.topic = settings.topic;
        this.tablePK = settings.tablePK;

        this.eventTrigger();

        this.pagination = settings.hasOwnProperty(`pagination`) ? settings.pagination : false;

        if (this.pagination) {
            this.pageno = 1;
            this.previousPage = this.targetCard.find(`.previous_page`);
            this.nextPage = this.targetCard.find(`.next_page`);
            this.pagenoDiv = this.targetCard.find(`.pageno_div`);
            this.pagenoInput = this.targetCard.find(`.pageno_input`);
            this.paginationEventTrigger();
        }
    }

    get() {
        this.targetContainer.empty();
        let json = {};

        if (this.filterForm.length) {
            json = Object.fromEntries((new FormData(this.filterForm[0])).entries());
        }

        if (this.pagination) {
            json.pageno = this.pageno;
        }

        $.post(this.readURL, json, (resp) => {
            if (resp.error) {
                toastr.error(resp.message);

                $(this.targetContainer.is(`tbody`)
                    ? `<th colspan="${this.targetContainer.closest(`table`).find(`thead th`).length}"></th>`
                    : `<div class="w-100"></div>`)
                    .append(`<p class="font-size-lg text-center text-info py-4 mb-0">
                            ${resp.message || `You haven't added any ${this.topic} yet.`}
                        </p>`)
                    .appendTo(this.targetContainer);
            } else {
                this.data = resp.data;
                this.show(resp.data);
            }
        }, "json");
    }

    successCallback(resp) {
        if (resp.error) {
            toastr.error(resp.message);
        } else {
            toastr.success(resp.message);
            this.get();
            if (this.setupModal.is(`:visible`)) {
                this.setupModal.modal(`hide`);
            }
        }
    }

    eventTrigger() {
        this.addButton.click(() => {
            this.setupForm.trigger("reset").data(this.tablePK, -1);
            this.setupModal.modal(`show`).find(`.modal-title`).html(`Create ${this.topic}`);
            let select2Elements = $(`.select2-hidden-accessible`, this.setupForm);
            if (select2Elements.length) {
                select2Elements.val(null).trigger("change");
            }
        });

        this.filterForm.submit((e) => {
            e.preventDefault();

            if (this.pagination) {
                this.pageno = 1;
                this.pagenoDiv.text(`Page: ${this.pageno}`);
                this.pagenoInput.val(this.pageno);
            }

            this.get();
        });

        this.setupForm.submit((e) => {
            e.preventDefault();
            let json = Object.fromEntries((new FormData(this.setupForm[0])).entries());

            let tablePK = Number(this.setupForm.data(this.tablePK)) || 0;
            let url = this.createURL;

            if (tablePK > 0) {
                json[this.tablePK] = tablePK;
                url = this.updateURL;
            }

            $.post(url, json, resp => this.successCallback(resp), "json");
        });
    }

    editButtonTrigger(template, value) {
        $(`.edit_button`, template).click((e) => {
            this.setupModal.modal(`show`).find(`.modal-title`).html(`Update ${this.topic}`);
            this.setupForm.data(this.tablePK, value[this.tablePK]);

            $(`[name]`, this.setupForm).each((i, elem) => {
                let elementName = $(elem).attr("name");
                if (value[elementName] != null) {
                    $(elem).val(value[elementName]);
                    if ($(elem).hasClass(`select2-hidden-accessible`)) {
                        $(elem).trigger(`change`);
                    }
                }
            });
        });
    }

    deleteButtonTrigger(template, value) {
        $(`.delete_button`, template).click((e) => {
            if (!confirm(`Your are going to delete this record. Are you sure to proceed?`)) return;

            $.post(this.deleteURL, {
                [this.tablePK]: value[this.tablePK]
            }, resp => this.successCallback(resp), "json");
        });
    }

    paginationEventTrigger() {
        this.pagenoInput.on("keyup", (e) => {
            if (e.keyCode == 13) {
                this.pageno = Number(this.pagenoInput.val()) || 1;
                this.pagenoInput.hide();
                this.pagenoDiv.text(`Page: ${this.pageno}`).show();
                this.get();
            }
        });

        this.pagenoDiv.click((e) => {
            this.pagenoDiv.hide();
            this.pagenoInput.show().select();
        });

        this.previousPage.click((e) => {
            if (this.pageno == 1) {
                toastr.warning("Current page is the first page");
            } else {
                --this.pageno;
                this.pagenoDiv.text(`Page: ${this.pageno}`);
                this.pagenoInput.val(this.pageno);
                this.get();
            }
        });

        this.nextPage.click((e) => {
            ++this.pageno;
            this.pagenoDiv.text(`Page: ${this.pageno}`);
            this.pagenoInput.val(this.pageno);
            this.get();
        });
    }
}