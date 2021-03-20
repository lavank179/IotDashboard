$(document).ready(function () {
  am4core.useTheme(am4themes_animated);

  // create chart
  var chart = am4core.create("chartdiv1", am4charts.GaugeChart);
  chart.innerRadius = -15;

  var axis = chart.xAxes.push(new am4charts.ValueAxis());
  axis.min = 0;
  axis.max = 280;
  axis.strictMinMax = true;

  var colorSet = new am4core.ColorSet();

  var range0 = axis.axisRanges.create();
  range0.value = 0;
  range0.endValue = 100;
  range0.axisFill.fillOpacity = 1;
  range0.axisFill.fill = colorSet.getIndex(15);

  var range1 = axis.axisRanges.create();
  range1.value = 100;
  range1.endValue = 210;
  range1.axisFill.fillOpacity = 1;
  range1.axisFill.fill = colorSet.getIndex(2);

  var range2 = axis.axisRanges.create();
  range2.value = 210;
  range2.endValue = 280;
  range2.axisFill.fillOpacity = 1;
  range2.axisFill.fill = colorSet.getIndex(4);

  var hand = chart.hands.push(new am4charts.ClockHand());

  setInterval(function () {
    let m = [];
    let k = 0;
    document.querySelectorAll("#devicesCollection .onoff").forEach((item) => {
      if (
        item.id == "111" ||
        item.id == "112" ||
        item.id == "113" ||
        item.id == "114"
      ) {
        if (item.checked == true) {
          m[k] = 60;
        } else {
          m[k] = 0;
        }
        k += 1;
      }
    });

    let n = 0;
    for (var x = 0; x < m.length; x++) {
      n = n + m[x];
    }

    hand.showValue(n, 1000, am4core.ease.cubicOut);
  }, 2000);
  // Add bottom label
  var label = chart.chartContainer.createChild(am4core.Label);
  label.text = "Power (w)";
  label.align = "center";
});

$(document).ready(function () {
  am4core.useTheme(am4themes_animated);

  // create chart
  var chart = am4core.create("chartdiv3", am4charts.GaugeChart);
  chart.innerRadius = -15;

  var axis = chart.xAxes.push(new am4charts.ValueAxis());
  axis.min = 0;
  axis.max = 250;
  axis.strictMinMax = true;

  var colorSet = new am4core.ColorSet();

  var range0 = axis.axisRanges.create();
  range0.value = 0;
  range0.endValue = 70;
  range0.axisFill.fillOpacity = 1;
  range0.axisFill.fill = colorSet.getIndex(0);

  var range1 = axis.axisRanges.create();
  range1.value = 70;
  range1.endValue = 200;
  range1.axisFill.fillOpacity = 1;
  range1.axisFill.fill = colorSet.getIndex(2);

  var range2 = axis.axisRanges.create();
  range2.value = 200;
  range2.endValue = 250;
  range2.axisFill.fillOpacity = 1;
  range2.axisFill.fill = colorSet.getIndex(4);

  var hand = chart.hands.push(new am4charts.ClockHand());

  setInterval(function () {
    let m = [];
    let k = 0;
    document.querySelectorAll("#devicesCollection .onoff").forEach((item) => {
      if (item.id == "115" || item.id == "116") {
        if (item.checked == true) {
          m[k] = 80;
        } else {
          m[k] = 0;
        }
        k += 1;
      }
    });

    let n = 0;
    for (var x = 0; x < m.length; x++) {
      n = n + m[x];
    }

    hand.showValue(n, 1000, am4core.ease.cubicOut);
  }, 2000);
  // Add bottom label
  var label = chart.chartContainer.createChild(am4core.Label);
  label.text = "Power (w)";
  label.align = "center";
});

$(document).ready(function () {
  am4core.useTheme(am4themes_animated);

  // create chart
  var chart = am4core.create("chartdiv2", am4charts.GaugeChart);
  chart.innerRadius = am4core.percent(82);

  /**
   * Normal axis
   */

  var axis = chart.xAxes.push(new am4charts.ValueAxis());
  axis.min = 0;
  axis.max = 100;
  axis.strictMinMax = true;
  axis.renderer.radius = am4core.percent(80);
  axis.renderer.inside = true;
  axis.renderer.line.strokeOpacity = 1;
  axis.renderer.ticks.template.strokeOpacity = 1;
  axis.renderer.ticks.template.length = 10;
  axis.renderer.grid.template.disabled = true;
  axis.renderer.labels.template.radius = 40;
  axis.renderer.labels.template.adapter.add("text", function (text) {
    return text + "%";
  });

  /**
   * Axis for ranges
   */

  var colorSet = new am4core.ColorSet();

  var axis2 = chart.xAxes.push(new am4charts.ValueAxis());
  axis2.min = 0;
  axis2.max = 100;
  axis2.renderer.innerRadius = 10;
  axis2.strictMinMax = true;
  axis2.renderer.labels.template.disabled = true;
  axis2.renderer.ticks.template.disabled = true;
  axis2.renderer.grid.template.disabled = true;

  var range0 = axis2.axisRanges.create();
  range0.value = 0;
  range0.endValue = 50;
  range0.axisFill.fillOpacity = 1;
  range0.axisFill.fill = colorSet.getIndex(0);

  var range1 = axis2.axisRanges.create();
  range1.value = 50;
  range1.endValue = 100;
  range1.axisFill.fillOpacity = 1;
  range1.axisFill.fill = colorSet.getIndex(2);

  /**
   * Label
   */

  var label = chart.radarContainer.createChild(am4core.Label);
  label.isMeasured = false;
  label.fontSize = 45;
  label.x = am4core.percent(50);
  label.y = am4core.percent(100);
  label.horizontalCenter = "middle";
  label.verticalCenter = "bottom";
  label.text = "50%";

  /**
   * Hand
   */

  var hand = chart.hands.push(new am4charts.ClockHand());
  hand.axis = axis2;
  hand.innerRadius = am4core.percent(20);
  hand.startWidth = 10;
  hand.pin.disabled = true;
  hand.value = 50;

  hand.events.on("propertychanged", function (ev) {
    range0.endValue = ev.target.value;
    range1.value = ev.target.value;
    axis2.invalidate();
  });

  setInterval(() => {
    var value = Math.round(Math.random() * 100);
    label.text = value + "%";
    var animation = new am4core.Animation(
      hand,
      {
        property: "value",
        to: value,
      },
      1000,
      am4core.ease.cubicOut
    ).start();
  }, 2000);
});

$(document).ready(function () {
  am4core.useTheme(am4themes_animated);

  // create chart
  var chart = am4core.create("chartdiv4", am4charts.GaugeChart);
  chart.innerRadius = -15;

  var axis = chart.xAxes.push(new am4charts.ValueAxis());
  axis.min = 0;
  axis.max = 100;
  axis.strictMinMax = true;

  var colorSet = new am4core.ColorSet();

  var range0 = axis.axisRanges.create();
  range0.value = 0;
  range0.endValue = 50;
  range0.axisFill.fillOpacity = 1;
  range0.axisFill.fill = colorSet.getIndex(0);

  var range1 = axis.axisRanges.create();
  range1.value = 50;
  range1.endValue = 80;
  range1.axisFill.fillOpacity = 1;
  range1.axisFill.fill = colorSet.getIndex(2);

  var range2 = axis.axisRanges.create();
  range2.value = 80;
  range2.endValue = 100;
  range2.axisFill.fillOpacity = 1;
  range2.axisFill.fill = colorSet.getIndex(4);

  var hand = chart.hands.push(new am4charts.ClockHand());
  setInterval(function () {
    hand.showValue(Math.random() * 100, 1000, am4core.ease.cubicOut);
  }, 2000);
});
