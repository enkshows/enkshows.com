$(document).ready(function(){function a(a,b){var c=$(a).siblings();$(a).addClass(b),c.removeClass(b)}$(".table-data").tablesorter(),$("input, textarea").placeholder(),$.validate({modules:"security"}),$(".form-control").on("change",function(){$(this).val().length>0&&$(this).css({"font-family":'"museo-slab",serif',"font-weight":"500"})}),$(".section:last-child").css({"margin-bottom":"200px"}),$(".block__message--dotted:last-child").css({"border-bottom":"0"}),$(".login__links").find("a").on("click",function(){var b=$(this).attr("href");a(this,"active"),a(b,"active")}),$(".table-data").find("tbody > tr").on("click",function(){a(this,"table-selected")}),$(".footer-small").on("click",function(a){a.preventDefault(),$(this).toggleClass("active"),$(".footer-big").slideToggle()}),$(".close").on("click",function(a){a.preventDefault(),$(this).toggleClass("is-open"),$(this).parent().toggleClass("active")}),$(".toggle").on("change",function(){var a=$(this).data("target"),b=$(a);b.prop("disabled")?b.prop("disabled",!1):b.prop("disabled",!0)})});