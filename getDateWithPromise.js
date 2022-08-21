var date;
function getDate() {
  return new Promise((resolve, reject) => {
    $(`#date_modal`).on("submit", function (e) {
      e.preventDefault();
      let json = Object.fromEntries(new FormData(e.target).entries());
      if (json.date) {
        date = json.date;
        resolve(date);
      } else {
        reject(new Error("Date Required"));
      }
    });

    $("#exampleModal").on("hidden.bs.modal", function () {
      reject(new Error("Date Required"));
    });
  });
}

let datePromise = getDate();
datePromise
  .then((result) => {
    console.log(result);
  })
  .catch((err) => {
    alert(err);
  });
