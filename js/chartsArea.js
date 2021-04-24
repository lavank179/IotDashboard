lightFan();
TempLevel();

function lightFan() {
  var options = {
    series: [],
    chart: {
      height: 323,
      type: "area",
    },
    dataLabels: {
      enabled: true,
    },
    stroke: {
      curve: "smooth",
    },
    xaxis: {
      type: "datetime",
    },
  };

  var chart = new ApexCharts(document.querySelector("#chartA1"), options);
  chart.render();
  $.ajax({
    url: "./controllers/fetch/lightfan.php",
    method: "POST",
    async: false,
    data: { lightfan: "apiloaded" },
    success: function (data) {
      let lights = JSON.parse(data);

      let li1 = [],
        li2 = [];

      for (let u = 0; u < lights[0].length; u++) {
        li1.push({ x: lights[1][u], y: lights[0][u] });
        li2.push({ x: lights[3][u], y: lights[2][u] });
      }

      console.log(li1, li2);
      chart.updateSeries([
        { name: "Lights", data: li1 },
        { name: "Fans", data: li2 },
      ]);
    },
  });
}

function TempLevel() {
  var options = {
    series: [],
    chart: {
      height: 340,
      type: "area",
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
    },
    xaxis: {
      type: "datetime",
    },
  };

  var chart = new ApexCharts(document.querySelector("#chartA2"), options);
  chart.render();
  $.ajax({
    url: "./controllers/fetch/tempmoist.php",
    method: "POST",
    async: false,
    data: { tempmoist: "apiloaded" },
    success: function (data) {
      let dat = JSON.parse(data);

      let li1 = [],
        li2 = [];

      for (let u = 0; u < dat[0].length; u++) {
        li1.push({ x: dat[1][u], y: dat[0][u] });
        li2.push({ x: dat[3][u], y: dat[2][u] });
      }

      console.log(li1, li2);
      chart.updateSeries([
        { name: "Lights", data: li1 },
        { name: "Fans", data: li2 },
      ]);
    },
  });
}
