$("#bologna-listL a").on("click", function (e) {
  e.preventDefault();
  $(this).tab("show");
});

$(
  ".filterLight1 .alert, .filterLight2 .alert, .filterLight3 .alert, .filterLight4 .alert"
).hide();

function getInputValues(ids) {
  fromDate = document.querySelector("." + ids + " #Fdate").value;
  toDate = document.querySelector("." + ids + " #Tdate").value;
  f = document.querySelector("." + ids + " #Fselect");
  filterBy = f.options[f.selectedIndex].value;

  return [fromDate, toDate, filterBy];
}

function changeAlert(ids, f, t, fil) {
  let alerts = $("." + ids + " .alert");
  if (f != "" && t != "" && fil != "") {
    alerts.hide();
  } else {
    alerts.show();
  }
}

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
      printChart(h, v5, v6);
    },
  });
}

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

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLight1");

    changeAlert("filterLight1", v1, v2, v3);

    getDataAll(v1, v2, v3, 16, "Light 1", "l1chart", "lights/light1");
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLight2");

    changeAlert("filterLight2", v1, v2, v3);

    getDataAll(v1, v2, v3, 17, "Light 2", "l2chart", "lights/light2");
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLight3");

    changeAlert("filterLight3", v1, v2, v3);

    getDataAll(v1, v2, v3, 18, "Light 3", "l3chart", "lights/light3");
  }, 500);
});

$(document).ready(function () {
  setInterval(function () {
    let [v1, v2, v3] = getInputValues("filterLight4");

    changeAlert("filterLight4", v1, v2, v3);

    getDataAll(v1, v2, v3, 19, "Light 4", "l4chart", "lights/light4");
  }, 500);
});

function getCSVdata(id, n) {
  let [v1, v2, v3] = getInputValues(id);

  $.ajax({
    url: "./controllers/fetch/csvLF.php",
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
          row
            .map((item) =>
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
