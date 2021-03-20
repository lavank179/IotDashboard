$("#bologna-listL a").on("click", function (e) {
  e.preventDefault();
  $(this).tab("show");
});

let alert1 = $(".filterLight1 .alert");
let alert2 = $(".filterLight2 .alert");
let alert3 = $(".filterLight3 .alert");
let alert4 = $(".filterLight4 .alert");
alert1.hide();
alert2.hide();
alert3.hide();
alert4.hide();

$(document).ready(function () {
  setInterval(function () {
    fromDate = document.querySelector(".filterLight1 #Fdate").value;
    toDate = document.querySelector(".filterLight1 #Tdate").value;
    f = document.querySelector(".filterLight1 #Fselect");
    filterBy = f.options[f.selectedIndex].value;

    if (fromDate != "" && toDate != "" && filterBy != "") {
      alert1.hide();
    } else {
      alert1.show();
    }

    fromDate = fromDate + " 00:00:00";
    toDate = toDate + " 23:59:59";

    $.ajax({
      url: "./controllers/fetch/lights/light1.php",
      method: "POST",
      data: {
        fDate: fromDate,
        tDate: toDate,
        fils: filterBy,
        Did: 16,
      },
      success: function (data) {
        var h = JSON.parse(data);
        printChart(h, "Light 1", "l1chart");
      },
    });
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    fromDate = document.querySelector(".filterLight2 #Fdate").value;
    toDate = document.querySelector(".filterLight2 #Tdate").value;
    f = document.querySelector(".filterLight2 #Fselect");
    filterBy = f.options[f.selectedIndex].value;

    if (fromDate != "" && toDate != "" && filterBy != "") {
      alert2.hide();
    } else {
      alert2.show();
    }

    fromDate = fromDate + " 00:00:00";
    toDate = toDate + " 23:59:59";

    $.ajax({
      url: "./controllers/fetch/lights/light2.php",
      method: "POST",
      data: {
        fDate: fromDate,
        tDate: toDate,
        fils: filterBy,
        Did: 17,
      },
      success: function (data) {
        var h = JSON.parse(data);
        printChart(h, "Light 2", "l2chart");
      },
    });
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    fromDate = document.querySelector(".filterLight3 #Fdate").value;
    toDate = document.querySelector(".filterLight3 #Tdate").value;
    f = document.querySelector(".filterLight3 #Fselect");
    filterBy = f.options[f.selectedIndex].value;

    if (fromDate != "" && toDate != "" && filterBy != "") {
      alert3.hide();
    } else {
      alert3.show();
    }

    fromDate = fromDate + " 00:00:00";
    toDate = toDate + " 23:59:59";

    $.ajax({
      url: "./controllers/fetch/lights/light3.php",
      method: "POST",
      data: {
        fDate: fromDate,
        tDate: toDate,
        fils: filterBy,
        Did: 18,
      },
      success: function (data) {
        var h = JSON.parse(data);
        printChart(h, "Light 3", "l3chart");
      },
    });
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    fromDate = document.querySelector(".filterLight4 #Fdate").value;
    toDate = document.querySelector(".filterLight4 #Tdate").value;
    f = document.querySelector(".filterLight4 #Fselect");
    filterBy = f.options[f.selectedIndex].value;

    if (fromDate != "" && toDate != "" && filterBy != "") {
      alert4.hide();
    } else {
      alert4.show();
    }

    fromDate = fromDate + " 00:00:00";
    toDate = toDate + " 23:59:59";

    $.ajax({
      url: "./controllers/fetch/lights/light4.php",
      method: "POST",
      data: {
        fDate: fromDate,
        tDate: toDate,
        fils: filterBy,
        Did: 19,
      },
      success: function (data) {
        var h = JSON.parse(data);
        printChart(h, "Light 4", "l4chart");
      },
    });
  }, 500);
});

function printChart(h, title, id) {
  google.charts.load("current", { packages: ["corechart", "line"] });
  google.charts.setOnLoadCallback(drawBasic1);

  function drawBasic1() {
    var data = new google.visualization.DataTable(h);

    var options = {
      title: title,
      width: 1135,
      height: 550,
      legend: { position: "right" },
      hAxis: {
        title: "Time (hr)",
      },
      vAxis: {
        title: "Power (watts)",
      },
    };

    var chartl = new google.visualization.LineChart(
      document.getElementById(id)
    );

    chartl.draw(data, options);
  }
}
