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
        showParentMenu(result);
    })
    .catch((error) => {
        console.log(error);
    });

$(`#menu_map_setup_form`).on("submit", function (e) {
    e.preventDefault();
    makeMenu();
});

function makeMenu() {
    // $(`#table-body`).empty();
    let json = Object.fromEntries(new FormData($(`#menu_map_setup_form`)[0]).entries());
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
          <tr class="table-${value.isActive == 0 ? "danger" : "success"}">
            <td class="text-left">${value.menuName}<span class="badge badge-${
            value.isActive == 0 ? "danger" : "success"
        } ml-3">${value.isActive == 0 ? "Inactive" : "Active"}</span></td>
            <td class="text-left">${value.pageURL}</td>
            <td>${value.parentMenuTitle ? value.parentMenuTitle : "-"}</td>
            <td>${value.makePageTitle}</td>
            <td>${value.forLowerNavTitle}</td>
            <td>${value.isExternalLinkTitle}</td>
            <td>
              <button class="btn statusButton ${
                  value.isActive == 0 ? "btn-success" : "btn-danger"
              } btn-primary btn-sm">${
            value.isActive == 0 ? "Activate" : "Deactivate"
        }</button>
            </td>
            <td>
              <button class="btn btn-secondary btn-sm editButton"><i class="fa-solid fa-pen"></i></button>
              <button class="btn btn-danger btn-sm deleteButton" type="button"  ><i class="fa-solid fa-trash"></i></button>
            </td>
          </tr>
    
    `).appendTo(tBody);

        let statusButton = $(`.statusButton`, row);
        statusButton.on("click", function () {
            console.log(value.isActive);
            $.ajax({
                type: "DELETE",
                url: "",
                data: value.isActive == "0" ? "1" : "0",
                success: function (response) {
                    console.log(value.isActive);
                },
            });
        });

        let editButton = $(`.editButton`, row);
        editButton.on("click", function () {
            // $(`#menu_map_setup_form`).empty();
            $("#menu_map_setup_form")[0].reset();
            $(`#exampleModalCenter`).modal("show");
            $(`.modal-title`).text("Update Menu");
            $(`#menuname`).val(value.menuName);
            $(`#menuid`).val(value.menuId);
            $(`#pageurl`).val(value.pageURL);

            // $(`#parentmenu`).empty();
            $(`#selectedParent`).text(value.parentMenuTitle);
        });

        let deleteButton = $(`.deleteButton`, row);
        deleteButton.on("click", function () {
            $.ajax({
                type: "DELETE",
                url: "",
                data: value.menuNo,
                success: function (response) {
                    console.log(value.menuNo);
                },
            });
        });

        // $.each(courseLebels, (index, singleCourseLebel) => {
        //     if (singleCourseLebel.course_label_no == value.course_label_no) {
        //         courseSelect.append(`
        //     <option selected value="${singleCourseLebel.course_label_no}">${singleCourseLebel.course_label_title}</option>
        //     `);
        //     } else {
        //         courseSelect.append(`
        // <option value="${singleCourseLebel.course_label_no}">${singleCourseLebel.course_label_title}</option>
        // `);
        //     }
        // });
    });

    $(`#addMenu`).on("click", function () {
        selectParentMenuDisplayInModal();
    });

    function selectParentMenuDisplayInModal() {
        let menus = pageSettingsFunc("menuData");
        console.log(menus);
        let select = $(`#parentmenu`);
        let nullParent = menus.filter((menu) => menu.parentMenuTitle == null);
        console.log(nullParent);
        $.each(nullParent, (index, value) => {
            select.append(`
            <option value="${value.menuNo}">${value.menuName}</option>
            `);
        });
    }

    // singleSave();
}

function showParentMenu(data) {
    // let menus = pageSettingsFunc("menuData");
    console.log(data, "here");

    let elseParentOptions = data.filter(
        (menu) =>
            // menu.parentMenuTitle != data.parentMenuTitle &&
            menu.parentMenuTitle == null
    );
    console.log(elseParentOptions);
    $.each(elseParentOptions, (index, value) => {
        $(`#parentmenu`).append(`
        <option value="${value.parentMenuNo}">${value.menuName}</option>
        `);
    });
    console.log(elseParentOptions);
    $(`#makepage`).append(`<option selected>${data.makePageTitle}</option>`);
    $(`#forlowernav`).append(
        `<option selected>${data.forLowerNavTitle}</option>`
    );
    $(`#isexternallink`).append(
        `<option selected>${data.isExternalLinkTitle}</option>`
    );
    $(`#menuname`).val(data.menuName);
    $(`#menuSubmit`).text("Update Menu");
}
