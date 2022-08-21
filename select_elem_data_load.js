/**
*  @SelectElemDataLoad Get data from url and then append option in select element
*
* example => studentoffice/student_scholarship.php
*/
class SelectElemDataLoad {
    constructor(settings) {
        this.readURL = settings.readURL;
        this.targets = settings.targets;
        this.optionText = settings.optionText || `text`;
        this.optionValue = settings.optionValue || `id`;

        this.get();
    }

    get() {
        let json = {};

        $.post(this.readURL, json, (resp) => {
            if (resp.error) {
                toastr.error(resp.message);
            } else {
                this.data = resp.data;
                this.show(resp.data);
            }
        }, "json");
    }

    show(data) {
        $.each(this.targets, (_index, target) => {
            $(target.selectElem).empty();

            if (target.hasOwnProperty(`defaultOptionText`)) {
                $(target.selectElem).append(new Option(target.defaultOptionText, target.defaultOptionValue));
            }

            $.each(data, (_indexInData, value) => {
                $(target.selectElem).append(new Option(value[this.optionText], value[this.optionValue]));
            });
        });
    }
}