$(document).ready(function(){
var weekStart = new Date;
weekStart.setDate(weekStart.getDate() - weekStart.getDay());
var ranges = d3.range(+weekStart / 1e3, +weekStart / 1e3 + 691200, 72e3),
 max = 50,
 min = 10,
 marcData = {};
ranges.map(function(a, b, c) {
 marcData[a] = Math.floor(Math.random() * (max - min) + min)
});
var cal = new CalHeatMap;
cal.init({
 itemSelector: "#cal-heatmap",
 domain: "week",
 data: marcData,
 colLimit: 7,
 cellSize: 16,
 range: 1,
 displayLegend: !1,
 tooltip: !0
});
});
