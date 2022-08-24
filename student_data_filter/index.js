var students;
function getStudents() {
  return new Promise((resolve, reject) => {
    $.ajax({
      type: "POST",
      url: "students.json",
      success: function (response) {
        students = response;
        resolve(students);
      },
      error: () => reject(),
    });
  });
}
let studentPromise = getStudents();
studentPromise
  .then((result) => {
    displayTable(result);
  })
  .catch((error) => {
    console.log(error);
  });

var courseLabels;
function getCourseLabels() {
  return new Promise((resolve, reject) => {
    $.ajax({
      type: "POST",
      url: "courseLabels.json",
      success: function (response) {
        courseLabels = response;
        resolve(courseLabels);
      },
      error: () => reject(),
    });
  });
}
let courseLabelsPromise = getCourseLabels();
courseLabelsPromise
  .then((result) => {
    displayCourseLabel(result);
  })
  .catch((error) => {
    console.log(error);
  });

var groups;
function getGroups() {
  return new Promise((resolve, reject) => {
    $.ajax({
      type: "POST",
      url: "groups.json",
      success: function (response) {
        groups = response;
        resolve(groups);
      },
      error: () => reject(),
    });
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

function displayTable(students) {
  let tBody = $(`#table-body`);
  $.each(students, (index, value) => {
    // console.log(value);
    tBody.append(`
    
      <tr>
        <td>${value.id}</td>
        <td>${value.name}</td>
        <td>
          <select class="custom-select">
            <option selected>${value.course_label}</option>
          </select>
        </td>
        <td>
          <select class="custom-select">
            <option selected>${value.group}</option>
          </select>
        </td>
        <td>${value.academic_year}</td>
        <td>${value.roll}</td>
        <td>${value.name}</td>
        <td>
          <button class="btn btn-primary btn-sm" type="submit">Save</button>
        </td>
      </tr>
    
    `);
  });
}

function displayCourseLabel(courseLabel) {
  let courseLabelsSelect = $(`#courseLevelSelect`);
  $.each(courseLabel, (index, value) => {
    courseLabelsSelect.append(`
    <option value="${value}">${value}</option>
  `);
  });
}

function displayGroups(groups) {
  let groupSelect = $(`#groupSelect`);
  $.each(groups, (index, value) => {
    groupSelect.append(`
    <option value="${value}">${value}</option>
  `);
  });
}

function displayPromotedGroup(groups) {
  let promotedGroupSelect = $(`#promotedGroupSelect`);
  $.each(groups, (index, value) => {
    promotedGroupSelect.append(`
    <option value="${value}">${value}</option>
  `);
  });
}

function filterForm1() {
  let form = $(`#filter_form_1`);
  form.on("submit", function (e) {
    e.preventDefault();
    let json = Object.fromEntries(new FormData(e.target).entries());
    console.log(json);
    $.ajax({
      type: "POST",
      url: "",
      data: json,
      success: function (response) {
        console.log(response);
        // console.log(json);
        let filterData = students.filter(
          (student) =>
            student.course_label == json.course_label &&
            student.academic_year == json.academic_year &&
            student.group == json.group
        );
        console.log(filterData);
        let tBody = $(`#table-body`);
        tBody.empty();
        displayTable(filterData);
      },
    });
  });
}
filterForm1();

// function singleSave() {
//   let studentRow = $(`#single_form`);
//   studentRow.on("submit", (e) => {
//     e.preventDefault();
//     let json = Object.fromEntries(new FormData(e.target).entries());
//     console.log(json);
//   });
// }
// singleSave();
