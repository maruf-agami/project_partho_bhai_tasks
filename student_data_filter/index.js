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
function getCourseLabels() {
    return new Promise((resolve, reject) => {
        let data = pageSettingsFunc("courseLabel");
        if (data && data.length) {
            resolve(data);
        } else {
            $.ajax({
                type: "POST",
                url: "courseLabels.json",
                success: function (response) {
                    pageSettingsFunc("courseLabel", response);
                    // courseLabels = response;
                    resolve(response);
                },
                error: () => reject(),
            });
        }
    });
}

let courseLabelsPromise = getCourseLabels();
courseLabelsPromise
    .then((result) => {
        // console.log(result);
        displayCourseLabel(result);
        // displayTable(result);
    })
    .catch((error) => {
        console.log(error);
    });

function displayCourseLabel(courseLabel) {
    let courseLabelsSelect = $(`#courseLevelSelect`);
    $.each(courseLabel, (index, value) => {
        courseLabelsSelect.append(`
      <option value="${value.course_label_no}">${value.course_label_title}</option>
    `);
    });
}

// var groups;
function getGroups() {
    return new Promise((resolve, reject) => {
        let data = pageSettingsFunc("group");
        if (data && data.length) {
            resolve(data);
        } else {
            $.ajax({
                type: "POST",
                url: "groups.json",
                success: function (response) {
                    pageSettingsFunc("group", response);
                    // groups = response;
                    resolve(response);
                },
                error: () => reject(),
            });
        }
    });
}
let groupsPromise = getGroups();
groupsPromise
    .then((result) => {
        displayGroups(result);
        displayPromotedGroup(result);
    })
    .catch((error) => {
        console.log(error);
    });

function displayGroups(groups) {
    let groupSelect = $(`#groupSelect`);
    $.each(groups, (index, value) => {
        groupSelect.append(`
    <option value="${value.group_no}">${value.group_title}</option>
  `);
    });
}

function getSections() {
    return new Promise((resolve, reject) => {
        let data = pageSettingsFunc("section");
        if (data && data.length) {
            resolve(data);
        } else {
            $.ajax({
                type: "POST",
                url: "sections.json",
                success: function (response) {
                    pageSettingsFunc("section", response);
                    resolve(response);
                },
                error: () => reject(),
            });
        }
    });
}
let sectionPromise = getSections();
sectionPromise
    .then((result) => {
        // displaySection(result);
    })
    .catch((error) => {
        console.log(error);
    });

// function displaySection(section) {
//     console.log(section);
//     let sectionSelect = $(`#sectionSelect`);
//     $.each(section, (index, value) => {
//         sectionSelect.append(`
//       <option value="${value.section_no}">${value.section_title}</option>
//     `);
//     });
// }

$(`#filter_form_1`).on("submit", function (e) {
    e.preventDefault();
    filterForm1();
});

function filterForm1() {
    $(`#table-body`).empty();
    let json = Object.fromEntries(
        new FormData($(`#filter_form_1`)[0]).entries()
    );
    console.log(json);
    $.ajax({
        type: "POST",
        url: "students.json",
        data: json,
        success: function (response) {
            let filterData = response.filter(
                (student) =>
                    student.course_label_no == json.course_label &&
                    student.academic_year == json.academic_year &&
                    student.group_no == json.group
            );
            console.log(filterData);
            displayTable(filterData);
        },
    });
}

function displayPromotedGroup(groups) {
    let promotedGroupSelect = $(`#promotedGroupSelect`);
    $.each(groups, (index, value) => {
        promotedGroupSelect.append(`
  <option value="${value.group_no}">${value.group_title}</option>
`);
    });
}

var students;
function getStudents() {
    return new Promise((resolve, reject) => {
        if (students) {
            resolve(students);
        } else {
            $.ajax({
                type: "POST",
                url: "students.json",
                success: function (response) {
                    students = response;
                    resolve(students);
                },
                error: () => reject(),
            });
        }
    });
}
let studentPromise = getStudents();
studentPromise
    .then((result) => {
        // displayTable(result);
    })
    .catch((error) => {
        console.log(error);
    });

function displayTable(students) {
    let courseLebels = pageSettingsFunc("courseLabel");
    let groups = pageSettingsFunc("group");
    let section = pageSettingsFunc("section");
    console.log(section);
    let tBody = $(`#table-body`);
    $.each(students, (index, value) => {
        let row = $(`
          <tr>
            <td>${value.id}</td>
            <td>${value.name}</td>
            <td>
              <select class="custom-select courseSelect" id="">
              </select>
            </td>
            <td>
              <select class="custom-select groupSelect">
              </select>
            </td>
            <td>
              <input name="academic_year" value="${value.academic_year}" type="text" class="form-control academicYearSelect" aria-describedby="basic-addon3">
            </td>
            <td>
              <input name="academic_year" value="${value.roll}" type="text" class="form-control" aria-describedby="basic-addon3">
            </td>
            <td>
              <select class="custom-select sectionSelect" id="">
              </select>
            </td>
            <td>
              <button class="btn btn-primary btn-sm single-save" onclick="studentUpdate(${value.id})">Save</button>
            </td>
          </tr>
    
    `).appendTo(tBody);

        let courseSelect = $(`.courseSelect`, row);
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
$(`#promotedGroupSelect`).on("change", function (e) {
    // console.log(promotedGroup);
    if (this.value > 0) {
        $(`#table-body .groupSelect`).val(this.value);
    }
});

$(`#promotedAcademicYear`).on("keypress", function (e) {
    // console.log(promotedGroup);
    if (e.key == "Enter") {
        $(`#table-body .academicYearSelect`).val(this.value);
    }
});

function studentUpdate(id) {
    console.log(id);
    let student;
    student = students.filter((std) => std.id == id);
    $.ajax({
        type: "POST",
        url: "",
        data: student,
        success: function (response) {
            console.log(student[0]);
        },
    });
}
