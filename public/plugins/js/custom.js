var $border_color = "#F5F8FA",
 $grid_color = "#e1e8ed",
 $default_black = "#666",
 $red = "#E24B46",
 $grey = "#999999",
 $yellow = "#FAD150",
 $pink = "#666",
 $blue = "#d12a16",
 $green = "#6EBB41",
 tid = setInterval(function() {
  if ("complete" === document.readyState) {
   clearInterval(tid);
   var a = document.querySelector.bind(document),
    b = document.querySelector(".vertical-nav");
   a(".collapse-menu").onclick = function() {
    b.classList.toggle("vertical-nav-sm"), $(".dashboard-wrapper").toggleClass("dashboard-wrapper-lg", 200), $("i", this).toggleClass("icon-menu2 icon-cross2")
   }, a(".toggle-menu").onclick = function() {
    b.classList.toggle("vertical-nav-opened")
   }
  }
 }, 1e3);
$(function() {
  $(".vertical-nav").metisMenu()
 }),
 function(a, b, c, d) {
  function e(b, c) {
   this.element = b, this.settings = a.extend({}, g, c), this._defaults = g, this._name = f, this.init()
  }
  var f = "metisMenu",
   g = {
    toggle: !0
   };
  e.prototype = {
   init: function() {
    var b = a(this.element),
     c = this.settings.toggle;
    b.find("li.active").has("ul").children("ul").addClass("collapse in"), b.find("li").not(".active").has("ul").children("ul").addClass("collapse"), b.find("li").has("ul").children("a").on("click", function(b) {
     b.preventDefault(), a(this).parent("li").toggleClass("active").children("ul").collapse("toggle"), c && a(this).parent("li").siblings().removeClass("active").children("ul.in").collapse("hide")
    })
   }
  }, a.fn[f] = function(b) {
   return this.each(function() {
    a.data(this, "plugin_" + f) || a.data(this, "plugin_" + f, new e(this, b))
   })
  }
 }(jQuery, window, document), $(function() {
  $.scrollUp({
   scrollName: "scrollUp",
   scrollDistance: 180,
   scrollFrom: "top",
   scrollSpeed: 300,
   easingType: "linear",
   animation: "fade",
   animationSpeed: 200,
   scrollTrigger: !1,
   scrollText: '<i class="icon-chevron-up"></i>',
   scrollTitle: !1,
   scrollImg: !1,
   activeOverlay: !1,
   zIndex: 2147483647
  })
 });
var element, circle, d, x, y;
$(".btn").click(function(a) {
 element = $(this), 0 == element.find(".circless").length && element.prepend("<span class='circless'></span>"), circle = element.find(".circless"), circle.removeClass("animate"), circle.height() || circle.width() || (d = Math.max(element.outerWidth(), element.outerHeight()), circle.css({
  height: d,
  width: d
 })), x = a.pageX - element.offset().left - circle.width() / 2, y = a.pageY - element.offset().top - circle.height() / 2, circle.css({
  top: y + "px",
  left: x + "px"
 }).addClass("animate")
}), $(function() {
 $(".loading-wrapper").fadeOut(2e3)
}), $(function() {
 $("#header-actions .dropdown").hover(function() {
  $(".dropdown-menu", this).stop(!0, !0).fadeIn("fast"), $(this).toggleClass("open")
 }, function() {
  $(".dropdown-menu", this).stop(!0, !0).fadeOut("fast"), $(this).toggleClass("open")
 })
});