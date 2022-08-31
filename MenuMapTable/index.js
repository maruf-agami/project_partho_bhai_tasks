var pageSettings = {};

function pageSettingsFunc(key = "", value) {
    if (!pageSettings) {
        pageSettings = {};
    }

    if (value) {
        pageSettings[key] = value;
    }

    return pageSettings.hasOwnProperty(key) ? pageSettings[key] : undefined;
}

// var courseLabels;
function getMenuData() {
    return new Promise((resolve, reject) => {
        let data = pageSettingsFunc("menuData");
        if (data && data.length) {
            resolve(data);
        } else {
            $.ajax({
                type: "POST",
                url: "menu.json",
                success: function (response) {
                    pageSettingsFunc("menuData", response);
                    resolve(response);
                },
                error: () => reject(),
            });
        }
    });
}
let menuDataPromise = getMenuData();
menuDataPromise
    .then((result) => {
        // console.log(result);
        // displayCourseLabel(result);
        displayTable(result);
        console.log(result);
    })
    .catch((error) => {
        console.log(error);
    });

$(`#menuForm`).on("submit", function (e) {
    e.preventDefault();
    makeMenu();
});

function makeMenu() {
    // $(`#table-body`).empty();
    let json = Object.fromEntries(new FormData($(`#menuForm`)[0]).entries());
    $.ajax({
        type: "POST",
        url: "",
        data: json,
        success: function (response) {
            console.log(json);
        },
    });
}

$(`#menuname`).on("blur", function (e) {
    let str = e.target.value;
    let nameid = str.replaceAll(" ", "_");
    $(`#menuid`).val(nameid);
});

function displayTable(menus) {
    let courseLebels = pageSettingsFunc("courseLabel");
    let groups = pageSettingsFunc("group");
    let section = pageSettingsFunc("section");
    // let menus = pageSettingsFunc("menuData");

    console.log(menus);
    let tBody = $(`#table-body`);
    $.each(menus, (index, value) => {
        let row = $(`
          <tr>
            <td>${value.menuName}</td>
            <td>${value.pageURL}</td>
            <td>${value.parentMenuTitle ? value.parentMenuTitle : "-"}</td>
            <td>${value.makePageTitle}</td>
            <td>${value.forLowerNavTitle}</td>
            <td>${value.isExternalLinkTitle}</td>
            <td>
              <button class="btn btn-primary btn-sm">Toggle</button>
            </td>
            <td>
              <button class="btn btn-primary btn-sm">Edit</button>
              <button class="btn btn-primary btn-sm">Delete</button>
            </td>
          </tr>
    
    `).appendTo(tBody);

        let courseSelect = $(`.parentMenuSelect`, row);
        $.each(courseLebels, (index, singleCourseLebel) => {
            if (singleCourseLebel.course_label_no == value.course_label_no) {
                courseSelect.append(`
            <option selected value="${singleCourseLebel.course_label_no}">${singleCourseLebel.course_label_title}</option>
            `);
            } else {
                courseSelect.append(`
        <option value="${singleCourseLebel.course_label_no}">${singleCourseLebel.course_label_title}</option>
        `);
            }
        });

        let groupSelect = $(`.groupSelect`, row);
        $.each(groups, (index, singleGroupSelect) => {
            singleGroupSelect.group_no == value.group_no
                ? groupSelect.append(`
        <option selected value="${singleGroupSelect.group_no}">${singleGroupSelect.group_title}</option>
        `)
                : groupSelect.append(`
        <option value="${singleGroupSelect.group_no}">${singleGroupSelect.group_title}</option>
        `);
        });

        let sectionSelect = $(`.sectionSelect`, row);
        $.each(section, (index, singleSectionSelect) => {
            singleSectionSelect.section_no == value.section
                ? sectionSelect.append(`
              <option selected value="${singleSectionSelect.section_no}">${singleSectionSelect.section_title}</option>
                `)
                : sectionSelect.append(`
                <option value="${singleSectionSelect.section_no}">${singleSectionSelect.section_title}</option>
               `);
        });
    });

    // singleSave();
}
