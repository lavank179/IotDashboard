// toggle between dashboard pages
$("#bologna-listF a").on("click", function (e) {
  e.preventDefault();
  $(this).tab("show");
  let alinks = ["fn1", "fn2", "fn3"];
  for (var i = 0; i < alinks.length; i++) {
    if (alinks[i] == this.id) {
      document.querySelector("#bologna-listF #" + alinks[i]).children[0].style.color = "black";
      document.querySelector("#bologna-listF #" + alinks[i]).children[0].style.backgroundcolor = "white";
    } else {
      document.querySelector("#bologna-listF #" + alinks[i]).children[0].style.color = "white";
      document.querySelector("#bologna-listF #" + alinks[i]).children[0].style.backgroundcolor = "black";
    }
  }
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterFan1");

    changeAlert("filterFan1", v1, v2, v3);

    getDataAll(v1, v2, v3, 25, "Fan 1", "f1chart", "fans");
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterFan2");

    changeAlert("filterFan2", v1, v2, v3);

    getDataAll(v1, v2, v3, 26, "Fan 2", "f2chart", "fans");
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