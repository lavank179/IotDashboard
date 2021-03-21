let alert33 = $(".filterSen1 .alert");
let alert44 = $(".filterSen2 .alert");
alert33.hide();
alert44.hide();


$(document).ready(function () {
  setInterval(function () {
    fromDate = document.querySelector(".filterSen1 #Fdate").value;
    toDate = document.querySelector(".filterSen1 #Tdate").value;
    f = document.querySelector(".filterSen1 #Fselect");
    filterBy = f.options[f.selectedIndex].value;

    if (fromDate != "" && toDate != "" && filterBy != "") {
      alert33.hide();
    } else {
      alert33.show();
    }

    fromDate = fromDate + " 00:00:00";
    toDate = toDate + " 23:59:59";

    $.ajax({
      url: "./controllers/fetch/sensors/temp.php",
      method: "POST",
      data: {
        fDate: fromDate,
        tDate: toDate,
        fils: filterBy,
        Did: 16,
      },
      success: function (data) {
        let h = JSON.parse(data);
        temChart(h, "Temperature Sensor 1", "s1chart");
      },
    });
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    fromDate = document.querySelector(".filterSen2 #Fdate").value;
    toDate = document.querySelector(".filterSen2 #Tdate").value;
    f = document.querySelector(".filterSen2 #Fselect");
    filterBy = f.options[f.selectedIndex].value;

    if (fromDate != "" && toDate != "" && filterBy != "") {
      alert44.hide();
    } else {
      alert44.show();
    }

    fromDate = fromDate + " 00:00:00";
    toDate = toDate + " 23:59:59";

    $.ajax({
      url: "./controllers/fetch/sensors/temp.php",
      method: "POST",
      data: {
        fDate: fromDate,
        tDate: toDate,
        fils: filterBy,
        Did: 17,
      },
      success: function (data) {
        let h = JSON.parse(data);
        temChart(h, "Temperature Sensor 2", "s2chart");
      },
    });
  }, 500);
});

function temChart(v1, v2, v3) {
  google.charts.load("current", { packages: ["corechart", "bar"] });
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

    var chart = new google.visualization.ColumnChart(
      document.getElementById(v3)
    );

    chart.draw(data, options);
  }
}
