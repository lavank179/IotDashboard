const switchB = document.querySelector("#onoff");

// switchB.addEventListener("change", function () {

//     var toastElList1 = [].slice.call(document.querySelectorAll(".toast1"));
//     var toastList1 = toastElList1.map(function (toastEl) {
//       return new bootstrap.Toast(toastEl);
//     });

//     var toastElList2 = [].slice.call(document.querySelectorAll(".toast2"));
//     var toastList2 = toastElList2.map(function (toastEl) {
//       return new bootstrap.Toast(toastEl);
//     });

//   if (this.checked) {

//     updateB1('on');

//     toastList2.forEach(toast => toast.hide());
//     toastList1.forEach(toast => toast.show());
//   }
//   else{

//     updateB1('off');
//     toastList1.forEach(toast => toast.hide());
//     toastList2.forEach(toast => toast.show());
//   }
// });

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

// chart example
google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["Year", "Sales", "Expenses"],
    ["2004", 1000, 400],
    ["2005", 1170, 460],
    ["2006", 660, 1120],
    ["2007", 1030, 540],
  ]);

  var options = {
    title: "Company Performance",
    curveType: "function",
    legend: { position: "bottom" },
  };

  var chart = new google.visualization.LineChart(
    document.getElementById("content")
  );

  chart.draw(data, options);
}
