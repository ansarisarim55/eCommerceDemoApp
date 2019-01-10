$(document).ready(function(){
   $("a.test").click(function(){
  var $a=$("ul.nav-pills li.active");
    var $n=$("ul.nav-pills li.active").next();
     $a.removeClass("active");
     $n.addClass("active");
});
});
