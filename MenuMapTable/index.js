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
    displayTable(result);
    // console.log(result);
    showParentMenu(result);
  })
  .catch((error) => {
    console.log(error);
  });

$(`#addMenu`).on("click", function () {
  $("#menu_map_setup_form")[0].reset();
  $(`#exampleModalCenter`).modal("show");
  $(`.modal-title`).text("Add Menu");

  $(`#menu_map_setup_form_menu_submit_button`).text("Make Menu");
});

$(`#modal_close_button`).on("click", function () {
  $(`.t`).remove();
});

$(`#menu_map_setup_form`).on("submit", function (e) {
  e.preventDefault();
  makeMenu();
});

function makeMenu() {
  let json = Object.fromEntries(
    new FormData($(`#menu_map_setup_form`)[0]).entries()
  );
  $.ajax({
    type: "POST",
    url: "",
    data: json,
    success: function (response) {
      console.log(json);
    },
  });
}

$(`#menu_map_setup_form_menu_name_input`).on("blur", function (e) {
  let str = e.target.value;
  let nameid = str.replaceAll(" ", "_");
  $(`#menu_map_setup_form_menu_id_input`).val(nameid);
});

function displayTable(menus) {
  // let menus = pageSettingsFunc("menuData");

  // console.log(menus);
  let tBody = $(`#table-body`);
  $.each(menus, (index, value) => {
    let row = $(`
                  <tr class="table-${
                    value.isActive == 0 ? "danger" : "success"
                  }">

                    <td class="text-left">
                      ${value.menuName}
                      <span class="badge badge-${
                        value.isActive == 0 ? "danger" : "success"
                      } ml-3">
                        ${value.isActive == 0 ? "Inactive" : "Active"}
                      </span>
                    </td>

                    <td class="text-left">${value.pageURL}</td>

                    <td>${
                      value.parentMenuTitle ? value.parentMenuTitle : "-"
                    }</td>

                    <td>${value.makePageTitle}</td>

                    <td>${value.forLowerNavTitle}</td>

                    <td>${value.isExternalLinkTitle}</td>

                    <td>
                      <button class="btn statusButton ${
                        value.isActive == 0 ? "btn-success" : "btn-danger"
                      } btn-primary btn-sm">
                        ${value.isActive == 0 ? "Activate" : "Deactivate"}
                      </button>
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
        type: "POST",
        url: "",
        data: { isActive: value.isActive == "0" ? "1" : "0" },
        success: function (response) {
          console.log(value.isActive);
        },
      });
    });

    let editButton = $(`.editButton`, row);
    editButton.on("click", function () {
      // $(`#menu_map_setup_form`).empty();
      console.log(value);
      // $("#menu_map_setup_form")[0].reset();

      $(`#exampleModalCenter`).modal("show");

      $(`.modal-title`).text("Update Menu");

      $(`#menu_map_setup_form_menu_name_input`).val(value.menuName);

      $(`#menu_map_setup_form_menu_id_input`).val("");
      $(`#menu_map_setup_form_page_url_input`).val(value.pageURL);

      $(`#menu_map_setup_form_make_page_select`).val(value.makePageNo);

      $(`#menu_map_setup_form_for_lower_nav_select`).val(value.forLowerNavNo);

      $(`#menu_map_setup_form_is_external_link_select`).val(
        value.isExternalLinkNo
      );
      // $(`#menu_map_setup_form_parent_menu_select`).empty();
      console.log(value);
      // $(`#menu_map_setup_form_parent_menu_select`).val(value.parentMenuTitle);
      $(`.t`).remove();
      $(`#menu_map_setup_form_parent_menu_select`).append(
        `<option class="t" selected>${
          value.parentMenuTitle == null ? "-" : value.parentMenuTitle
        }</option>`
      );
      $(`#menu_map_setup_form_menu_submit_button`).text("Update Menu");
    });

    let deleteButton = $(`.deleteButton`, row);
    deleteButton.on("click", function () {
      $.ajax({
        type: "DELETE",
        url: "",
        data: { menuNo: value.menuNo },
        success: function (response) {
          console.log("menuNo:", value.menuNo);
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

  // $(`#addMenu`).on("click", function () {
  //   selectParentMenuDisplayInModal();
  // });

  // function selectParentMenuDisplayInModal() {
  //   let menus = pageSettingsFunc("menuData");
  //   console.log(menus);
  //   let select = $(`#menu_map_setup_form_parent_menu_select`);
  //   let nullParent = menus.filter((menu) => menu.parentMenuTitle == null);
  //   console.log(nullParent);
  //   $.each(nullParent, (index, value) => {
  //     select.append(`
  //           <option value="${value.menuNo}">${value.menu_map_setup_form_menu_name_input}</option>
  //           `);
  //   });
  // }

  // singleSave();
}

function showParentMenu(data) {
  // let menus = pageSettingsFunc("menuData");

  let elseParentOptions = data.filter(
    (menu) =>
      // menu.parentMenuTitle != data.parentMenuTitle &&
      menu.parentMenuTitle == null
  );
  // console.log(elseParentOptions);
  $.each(elseParentOptions, (index, value) => {
    $(`#menu_map_setup_form_parent_menu_select`).append(`
        <option value="${value.menuNo}">${value.menuName}</option>
        `);
  });

  $(`#menu_map_setup_form_make_page_select `).val(data.makePageNo);

  $(`#menu_map_setup_form_for_lower_nav_select`).val(data.forLowerNavNo);

  $(`#menu_map_setup_form_is_external_link_select`).val(
    data.isExternalLinkTitle
  );
  //   $(`#menu_map_setup_form_menu_name_input`).val(
  //     data.menu_map_setup_form_menu_name_input
  //   );
}
