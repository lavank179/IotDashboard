$("#bologna-listF a").on("click", function (e) {
  e.preventDefault();
  $(this).tab("show");
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterFan1");

    changeAlert("filterFan1", v1, v2, v3);

    getDataAll(v1, v2, v3, 16, "Fan 1", "f1chart", "fans");
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterFan2");

    changeAlert("filterFan2", v1, v2, v3);

    getDataAll(v1, v2, v3, 17, "Fan 2", "f2chart", "fans");
  }, 500);
});

// All Light func to get all data and print values
$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterFanAll");

    changeAlert("filterFanAll", v1, v2, v3);

    getDataAll(v1, v2, v3, 50, "All Fans Total", "f3chart", "fans");
  }, 500);
});