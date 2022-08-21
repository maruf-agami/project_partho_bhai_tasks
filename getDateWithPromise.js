// var date;

$(`#modal_button`).on("click", function () {
  function getDate() {
    return new Promise((resolve, reject) => {
      $(`#date_modal`).on("submit", function (e) {
        e.preventDefault();
        let json = Object.fromEntries(new FormData(e.target).entries());
        if (json.date) {
          // date = json.date;
          resolve(json.date);
        } else {
          reject(new Error("Date Required"));
        }
        $(`#exampleModal`).modal("hide");
        $(`#date_modal`)[0].reset();
      });

      $("#exampleModal").on("hidden.bs.modal", function () {
        reject(new Error("Date Required"));
        $(`#date_modal`)[0].reset();
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
});
