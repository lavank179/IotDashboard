$("#bologna-listS a").on("click", function (e) {
  e.preventDefault();
  $(this).tab("show");
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterSen1");

    changeAlert("filterSen1", v1, v2, v3);

    getDataAll(v1, v2, v3, 30, "Temperature", "s1chart", "sensors");
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterSen2");

    changeAlert("filterSen2", v1, v2, v3);

    getDataAll(v1, v2, v3, 31, "Humidity", "s2chart", "sensors");
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterSen3");

    changeAlert("filterSen3", v1, v2, v3);

    getDataAll(v1, v2, v3, 32, "Soil Moisture", "s3chart", "sensors");
  }, 500);
});
function temChart(v1, v2, v3) {
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {
    var data = new google.visualization.DataTable(v1);

    var options = {
      title: v2,
      hAxis: {
        title: "Time",
      },
      vAxis: {
        title: "Temperature oC",
      },
    };

    var chart = new google.visualization.AreaChart(document.getElementById(v3));

    chart.draw(data, options);
  }
}
