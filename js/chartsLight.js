$("#bologna-listL a").on("click", function (e) {
  e.preventDefault();
  $(this).tab("show");
});

// Retrieve input values from respective input fields in visualize
function getInputValues(ids) {
  fromDate = document.querySelector("." + ids + " #Fdate").value;
  toDate = document.querySelector("." + ids + " #Tdate").value;
  f = document.querySelector("." + ids + " #Fselect");
  filterBy = f.options[f.selectedIndex].value;

  return [fromDate, toDate, filterBy];
}

// Show & hide the no data alert according to the output values
function changeAlert(ids, f, t, fil) {
  let alerts = $("." + ids + " .alert");
  if (f != "" && t != "" && fil != "") {
    alerts.hide();
  } else {
    alerts.show();
  }
}

// Ajax function to get the data from DB using PHP
function getDataAll(v1, v2, v3, v4, v5, v6, v7) {
  $.ajax({
    url: "./controllers/fetch/" + v7 + ".php",
    method: "POST",
    data: {
      fDate: v1 + " 00:00:00",
      tDate: v2 + " 23:59:59",
      fils: v3,
      Did: v4,
    },
    success: function (data) {
      var h = JSON.parse(data);
      if (v4 == 60) {
        if (h.length > 0) printChartPie(h, v5, v6);
      } else if (v4 == 30 || v4 == 31 || v4 == 32) {
        temChart(h, v5, v6, v4);
      } else {
        printChart(h, v5, v6);
      }
    },
  });
}

// Display the charts according to the data in the respective places
function printChart(h, title, id) {
  google.charts.load("current", { packages: ["corechart", "line"] });
  google.charts.setOnLoadCallback(drawBasic1);

  function drawBasic1() {
    var data = new google.visualization.DataTable(h);

    var options = {
      title: title,
      titleTextStyle: {
        color: "#00b377",
        bold: true,
      },
      legend: { position: "right" },
      colors: ["#00E396"],
      curveType: "function",
      hAxis: {
        title: "Time (hr)",
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
        title: "Power (watts)",
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

    var chartl = new google.visualization.LineChart(
      document.getElementById(id)
    );

    chartl.draw(data, options);
  }
}

// Display the charts according to the data in the respective places
function printChartPie(h, title, id) {
  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = new google.visualization.arrayToDataTable(h);

    var options = {
      title: title,
      is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById(id));
    chart.draw(data, options);
  }
}

// Light 1 func to get all data and print values
$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLight1");

    changeAlert("filterLight1", v1, v2, v3);

    getDataAll(v1, v2, v3, 16, "Light 1", "l1chart", "lights");
  }, 500);
});

// Light 2 func to get all data and print values
$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLight2");

    changeAlert("filterLight2", v1, v2, v3);

    getDataAll(v1, v2, v3, 17, "Light 2", "l2chart", "lights");
  }, 500);
});

// Light 3 func to get all data and print values
$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLight3");

    changeAlert("filterLight3", v1, v2, v3);

    getDataAll(v1, v2, v3, 18, "Light 3", "l3chart", "lights");
  }, 500);
});

// Light 4 func to get all data and print values
$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLight4");

    changeAlert("filterLight4", v1, v2, v3);

    getDataAll(v1, v2, v3, 19, "Light 4", "l4chart", "lights");
  }, 500);
});

// All Light func to get all data and print values
$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLightAll");

    changeAlert("filterLightAll", v1, v2, v3);

    getDataAll(v1, v2, v3, 50, "All Lights Total", "l5chart", "lights");
  }, 500);
});

// All Light func to get all data and print values eith Zones in pie chart
$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLightZones");

    changeAlert("filterLightAll", v1, v2, v3);

    getDataAll(v1, v2, v3, 60, "All Lights Zones", "l6chart", "lights");
  }, 500);
});

// Snippet to convert the data to CSV format and Download
function getCSVdata(id, n) {
  let [v1, v2, v3] = getInputValues(id);
  let url = "";

  if (
    n == 16 ||
    n == 17 ||
    n == 18 ||
    n == 19 ||
    n == 25 ||
    n == 26 ||
    n == 51 ||
    n == 52
  )
    url = "./controllers/fetch/csvLF.php";
  else if (n == 30 || n == 31 || n == 32)
    url = "./controllers/fetch/csvSEN.php";

  $.ajax({
    url: url,
    method: "POST",
    data: {
      fDate: v1 + " 00:00:00",
      tDate: v2 + " 23:59:59",
      fils: v3,
      Did: n,
    },
    success: function (data) {
      var h = JSON.parse(data);

      let date = new Date();
      var dte =
        ("00" + (date.getMonth() + 1)).slice(-2) +
        "-" +
        ("00" + date.getDate()).slice(-2) +
        "-" +
        date.getFullYear() +
        "_" +
        ("00" + date.getHours()).slice(-2) +
        "-" +
        ("00" + date.getMinutes()).slice(-2);

      const csv = h
        .map((row) =>
          row.map((item) =>
              typeof item === "string" && item.indexOf(",") >= 0
                ? `"${item}"`
                : String(item)
            )
            .join(",")
        )
        .join("\n");

      let filename = id + " _ " + dte + " .csv";
      download(csv, filename, "text/csv");
    },
  });
}

// function downloadCSV() {
//   // window.open(`data:text/csv;charset=utf-8,${kims1.reduce((acc, curr) => (`${acc}${Object.values(curr).join(",")}\n`), "")}`);
//   // window.open(`data:text/csv;charset=utf-8,` + encodeURI(csvStr));
// }
//

// Snippet to download the CSV file with custom filename and .csv file-format
function download(strData, strFileName, strMimeType) {
  var D = document,
    a = D.createElement("a");
  strMimeType = strMimeType || "application/octet-stream";

  if (navigator.msSaveBlob) {
    // IE10
    return navigator.msSaveBlob(
      new Blob([strData], { type: strMimeType }),
      strFileName
    );
  } /* end if(navigator.msSaveBlob) */

  if ("download" in a) {
    //html5 A[download]
    a.href = "data:" + strMimeType + "," + encodeURIComponent(strData);
    a.setAttribute("download", strFileName);
    a.innerHTML = "downloading...";
    D.body.appendChild(a);
    setTimeout(function () {
      a.click();
      D.body.removeChild(a);
    }, 66);
    return true;
  } /* end if('download' in a) */

  //do iframe dataURL download (old ch+FF):
  var f = D.createElement("iframe");
  D.body.appendChild(f);
  f.src = "data:" + strMimeType + "," + encodeURIComponent(strData);

  setTimeout(function () {
    D.body.removeChild(f);
  }, 333);
  return true;
} /* end download() */
