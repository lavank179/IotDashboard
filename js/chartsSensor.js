// toggle between dashboard pages
$("#bologna-listS a").on("click", function (e) {
  e.preventDefault();
  $(this).tab("show");
  let alinks = ["tn1", "tn2", "tn3"];
  for (var i = 0; i < alinks.length; i++) {
    if (alinks[i] == this.id) {
      document.querySelector("#bologna-listS #" + alinks[i]).children[0].style.color = "black";
      document.querySelector("#bologna-listS #" + alinks[i]).children[0].style.backgroundcolor = "white";
    } else {
      document.querySelector("#bologna-listS #" + alinks[i]).children[0].style.color = "white";
      document.querySelector("#bologna-listS #" + alinks[i]).children[0].style.backgroundcolor = "black";
    }
  }
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
function temChart(v1, v2, v3, v4) {
  let titl = "";
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {
    if (v4 == 30) titl = "Temperature  o C";
    else if (v4 == 31) titl = "Humidity  % ";
    else if (v4 == 32) titl = "Moisture  % ";
    var data = new google.visualization.DataTable(v1);

    var options = {
      title: v2,
      titleTextStyle: {
        color: "#00b377",
        bold: true,
      },
      legend: { position: "right" },
      colors: ["#00E396"],
      curveType: "function",
      hAxis: {
        title: "Time",
        titleTextStyle: {
          color: "#00cc88",
          bold: true,
        },
        format: "MMM d, y",
        textStyle: {
          color: "#1a5eff",
        },
        gridlines: {
          color: "#6795FF",
        },
        baselineColor: "#6795FF",
      },
      vAxis: {
        title: titl,
        titleTextStyle: {
          color: "#00cc88",
          bold: true,
        },
        textStyle: {
          color: "#1a5eff",
        },
        gridlines: {
          color: "#6795FF",
        },
        baselineColor: "#6795FF",
      },
    };

    var chart = new google.visualization.AreaChart(document.getElementById(v3));

    chart.draw(data, options);
  }
}
