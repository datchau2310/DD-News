! function(a) {
 a.fn.databar = function(b) {
  var b = b || {},
   c = function() {
    var a = 0,
     c = b.backgroundOpacity || .4,
     d = ["rgba(181, 137, 0, " + c + ")", "rgba(191, 122, 106, " + c + ")", "rgba(169, 189, 122, " + c + ")", "rgba(111, 180, 206, " + c + ")", "rgba(210, 169, 104, " + c + ")", "rgba(38, 139, 210, " + c + ")", "rgba(42, 161, 152, " + c + ")", "rgba(133, 153, 0, " + c + ")"];
    return function() {
     return a++, a >= d.length && (a = 0), d[a]
    }
   }();
  b.css = a.extend({
   textAlign: "right"
  }, b.css);
  var d = a(this);
  // if (0 == d.find("thead").length) return void console.error("thead not found. please use thead, th, tbody, tr and td.");
  // if (0 == d.find("tbody").length) return void console.error("tbody not found. please use thead, th, tbody, tr and td.");
  // if (0 == d.find("tbody tr").length) return void console.error("tr not found. please use thead, th, tbody, tr and td.");
  // if (0 == d.find("tbody tr td").length) return void console.error("td not found. please use thead, th, tbody, tr and td.");
  for (var e = d.find("tbody tr").first().find("td").length, f = 0; f < e; f++) {
   var g = d.find("tbody tr > :nth-child(" + (f + 1) + ")"),
    h = g.map(function(b) {
     var c = a(this).text(),
      d = c.replace(/[\s,%$\\]/g, "");
     return !!a.isNumeric(d) && parseFloat(d)
    });
   ! function(b, d) {
    var e = {};
    e["100%"] = Math.max.apply(null, h);
    var f = c();
    b.each(function(b) {
     if (h[b] === !1) return !0;
     var c = a("<span />").css(a.extend({
      position: "absolute",
      top: 0,
      left: 0,
      zIndex: 0,
      display: "block",
      height: "100%",
      width: 100 * h[b] / e["100%"] + "%",
      backgroundColor: f
     }, d.css));
     a(this).prepend(c), a(this).wrapInner(a("<div />").css({
      position: "relative",
      textAlign: d.css.textAlign
     }))
    })
   }(g, b)
  }
  return this
 }
}(jQuery);