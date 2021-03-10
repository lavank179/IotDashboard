$("#visualise").hide();
$("#profile").hide();
$("#contact").hide();
getSwitch(0);

const switchB = document.querySelector("#onoff");

// switch button toggle - LEDs
document.querySelectorAll(".onoff").forEach((item) => {
  item.addEventListener("change", (event) => {
    var toastElList1 = [].slice.call(document.querySelectorAll(".toast1"));
    var toastList1 = toastElList1.map(function (toastEl) {
      return new bootstrap.Toast(toastEl);
    });

    var toastElList2 = [].slice.call(document.querySelectorAll(".toast2"));
    var toastList2 = toastElList2.map(function (toastEl) {
      return new bootstrap.Toast(toastEl);
    });

    if (item.checked) {
      updateB1(parseInt(item.id), "on");

      toastList2.forEach((toast) => toast.hide());
      toastList1.forEach((toast) => toast.show());
    } else {
      updateB1(parseInt(item.id), "off");
      toastList1.forEach((toast) => toast.hide());
      toastList2.forEach((toast) => toast.show());
    }
  });
});

// ajax for switch toggle with JSON
function updateB1(id, val) {
  $.ajax({
    url: "./update.php",
    method: "POST",
    data: {
      name: id,
      stat: val,
    },
    success: function (data) {
      var d = JSON.parse(data);

      $("#device-status h3").html(d[0]["status"]);
    },
  });
}

// // chart example
// google.charts.load("current", { packages: ["corechart"] });
// google.charts.setOnLoadCallback(drawChart);

// function drawChart() {
//   var data = google.visualization.arrayToDataTable([
//     ["Year", "Sales", "Expenses"],
//     ["2004", 1000, 400],
//     ["2005", 1170, 460],
//     ["2006", 660, 1120],
//     ["2007", 1030, 540],
//   ]);

//   var options = {
//     title: "Company Performance",
//     curveType: "function",
//     legend: { position: "bottom" },
//     chartArea: {width: '100%', height: '100%'}
//   };

//   var chart = new google.visualization.LineChart(
//     document.getElementById("chart1")
//   );

//   chart.draw(data, options);
// }

google.charts.load("current", { packages: ["gauge"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["Label", "Value"],
    ["Memory", 80],
  ]);

  var options = {
    width: 400,
    height: 120,
    redFrom: 90,
    redTo: 100,
    yellowFrom: 75,
    yellowTo: 90,
    minorTicks: 5,
  };

  var chart = new google.visualization.Gauge(document.getElementById("chart1"));

  chart.draw(data, options);

  setInterval(function () {
    data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
    chart.draw(data, options);
  }, 13000);
}

$(document).ready(function () {
  $("#sidebarCollapse").on("click", function () {
    $("#sidebar").toggleClass("active");
  });
});

// toggle between dashboard pages
$(".men a").on("click", function (e) {
  e.preventDefault();
  let alinks = ["home", "visualise", "profile", "contact"];
  for (var i = 0; i < alinks.length; i++) {
    if (alinks[i] == this.className) {
      $("#" + alinks[i]).show();
      var p = document.querySelector("." + alinks[i]).parentElement;
      p.classList.add("active");
    } else {
      $("#" + alinks[i]).hide();
      var p = document.querySelector("." + alinks[i]).parentElement;
      p.classList.remove("active");
    }
  }
  // console.log(this.className);
});

// Add a device control
$("#subAdd").on("click", function () {
  let Dname = document.querySelector("#form-Dname").value;
  let Did = document.querySelector("#form-Did").value;

  const k = updateB2(Dname, parseInt(Did));

  if (k == "success") {
    console.log(k);
    getSwitch(1);
  } else {
    alert("Error: " + k);
  }
});

// ajax for adding button to JSON
function updateB2(val1, val2) {
  console.log(typeof val2);
  var d1;
  $.ajax({
    async: false,
    url: "./update.php",
    method: "POST",
    data: {
      dName: val1,
      dId: val2,
    },
    success: function (data) {
      d1 = data;
    },
  });

  return d1;
}

// ajax for getting and creating switch buttons from JSON
function getSwitch(ts) {
  $.ajax({
    url: "./data.json",
    method: "POST",
    success: function (data) {
      let count = Object.keys(data).length;

      // creating a table row for new switch

      if (ts === 0) {
        for (let i = 0; i < count; i++) {
          printRow(data[i]["name"], data[i]["id"]);
        }
      } else if (ts === 1) {
        printRow(data[count - 1]["name"], data[count - 1]["id"]);
      }
    },
  });
}

// print row element
function printRow(v1, v2) {
  let coll = document.querySelector("#devicesCollection");
  const tr = document.createElement("tr");
  tr.innerHTML = `<tr>
                          <th scope="row">  </th>
                            <td>
                                <h4> ${v1} </h4>
                            </td>
                          <td>
                            <label class="switch">
                                <input class="onoff but" type="checkbox" checked id="${v2}">
                                <span class="round"> </span>
                            </label>
                          </td>
                        </tr>`;

  coll.appendChild(tr);
}
