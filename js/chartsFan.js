$("#bologna-listF a").on("click", function (e) {
    e.preventDefault();
    $(this).tab("show");
  });
  
  let alert11 = $(".filterFan1 .alert");
  let alert22 = $(".filterFan2 .alert");
  alert11.hide();
  alert22.hide();
  
  $(document).ready(function () {
    setInterval(function () {
      fromDate = document.querySelector(".filterFan1 #Fdate").value;
      toDate = document.querySelector(".filterFan1 #Tdate").value;
      f = document.querySelector(".filterFan1 #Fselect");
      filterBy = f.options[f.selectedIndex].value;
  
      if (fromDate != "" && toDate != "" && filterBy != "") {
        alert11.hide();
      } else {
        alert11.show();
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
          printChart(h, "Fan 1", "f1chart");
        },
      });
    }, 500);
  });
  
  $(document).ready(function () {
    setInterval(function () {
      fromDate = document.querySelector(".filterFan2 #Fdate").value;
      toDate = document.querySelector(".filterFan2 #Tdate").value;
      f = document.querySelector(".filterFan2 #Fselect");
      filterBy = f.options[f.selectedIndex].value;
  
      if (fromDate != "" && toDate != "" && filterBy != "") {
        alert22.hide();
      } else {
        alert22.show();
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
          printChart(h, "Fan 2", "f2chart");
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
  