var buildingList;
function getBuildings() {
  return new Promise((resolve, reject) => {
    $.ajax({
      type: "POST",
      url: "promise.json",
      success: function (response) {
        buildingList = response.Building;
        resolve();
      },
      error: () => reject(),
    });
  });
}

let buildingPromise = getBuildings();
buildingPromise
  .then((retult) => {
    displayModal(buildingList);
  })
  .catch((err) => {});

function displayModal(buildingList) {
  let select = $(`#building-select`);
  $.each(buildingList, function (key, value) {
    select.append(`
            <option value='3'>${value}</option>
            `);
  });
}
