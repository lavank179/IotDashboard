$("#visualise").hide();
$("#profile").hide();
$("#contact").hide();

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
    chartArea: {width: '100%', height: '100%'}
  };

  var chart = new google.visualization.LineChart(
    document.getElementById("chart1")
  );

  chart.draw(data, options);
}

$(document).ready(function () {
  $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });
});




// toggle between dashboard pages
$('.men a').on('click', function(e) {
  e.preventDefault()
  let alinks = ['home', 'visualise', 'profile', 'contact'];
  for(var i = 0; i < alinks.length; i++){
    if(alinks[i] == this.className){
      $("#" + alinks[i]).show();
      var p = document.querySelector("." + alinks[i]).parentElement;
      p.classList.add('active');
    } else {
      $("#" + alinks[i]).hide();
      var p = document.querySelector("." + alinks[i]).parentElement;
      p.classList.remove('active');
    }
  }
  // console.log(this.className);
});