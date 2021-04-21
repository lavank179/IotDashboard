lightFan();
TempLevel();

function lightFan() {
  var options = {
    series: [],
    chart: {
      height: 400,
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
    title: {
      text: "Light-Fan comparison",
      align: "left",
      margin: 10,
      offsetX: 0,
      offsetY: 0,
      floating: false,
      style: {
        fontSize: "16px",
        fontWeight: "normal",
        fontFamily: "poppins",
        color: "#3266FF",
      },
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
    series: [
      {
        name: "series1",
        data: [31, 40, 28, 51, 42, 109, 100],
      },
      {
        name: "series2",
        data: [11, 32, 45, 32, 34, 52, 41],
      },
    ],
    chart: {
      height: 350,
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
      categories: [
        "2018-09-19T00:00:00.000Z",
        "2018-09-19T01:30:00.000Z",
        "2018-09-19T02:30:00.000Z",
        "2018-09-19T03:30:00.000Z",
        "2018-09-19T04:30:00.000Z",
        "2018-09-19T05:30:00.000Z",
        "2018-09-19T06:30:00.000Z",
      ],
    },
    tooltip: {
      x: {
        format: "dd/MM/yy HH:mm",
      },
    },
    title: {
      text: "Sensors comparison",
      align: "left",
      margin: 10,
      offsetX: 0,
      offsetY: 0,
      floating: false,
      style: {
        fontSize: "16px",
        fontWeight: "normal",
        fontFamily: "poppins",
        color: "#3266FF",
      },
    },
  };

  var chart = new ApexCharts(document.querySelector("#chartA2"), options);
  chart.render();
}
