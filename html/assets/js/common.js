// for henosis initialization -- start

henosisInit(2, "visibility");

// for henosis initialization -- end

function containersHeightWidthFix()
{
  var windowHeight = $(window).height();
  var windowWidth = $(window).width();
  document.getElementById("container1").style.height = windowHeight+"px";
  document.getElementById("container1").style.width = windowWidth+"px";
  document.getElementById("container2").style.height = windowHeight+"px";
  document.getElementById("container2").style.width = windowWidth+"px";
}

$( document ).ready(function()
{
  // fix for android -- start

  var isAndroid = ua.indexOf("android") > -1;

  if(isAndroid)
  {
    containersHeightWidthFix();
  }

  // fix for android -- end

  var windowWidth = $(window).width();
  var windowHeight = $(window).height();

  // for menu -- start

  var menuRowHeight = $('#menuRow').height();
  // console.log("menuRowHeight : "+menuRowHeight);
  var menuRowCalculatedTop = ((windowHeight/2) - (menuRowHeight/2));
  // console.log(menuRowCalculatedTop);
  document.getElementById("menuRow").style.top = menuRowCalculatedTop+"px";

  if(windowWidth >= 768)
  {
    var socialMediaBrandingSectionOuterHeight = $('#socialMediaBrandingSection').outerHeight();
    // var socialMediaBrandingSectionOuterHeight = 0;

    var menuLeftColumnOuterHeight = $('#menuLeftColumn').outerHeight();
    var menuLeftColumnCalculatedTop = ((menuRowHeight/2) - (menuLeftColumnOuterHeight/2));
    document.getElementById("menuLeftColumn").style.top = menuLeftColumnCalculatedTop+"px";

    var menuLeftColumnULOuterHeight = $('#menuLeftColumnUL').outerHeight();
    var menuLeftColumnULCalculatedTop = ((menuLeftColumnOuterHeight/2) - (menuLeftColumnULOuterHeight/2));
    document.getElementById("menuLeftColumnUL").style.top = menuLeftColumnULCalculatedTop+"px";

    var menuCenterColumnOuterHeight = $('#menuCenterColumn').outerHeight();
    var menuCenterColumnCalculatedTop = ((menuRowHeight/2) - ((menuCenterColumnOuterHeight-socialMediaBrandingSectionOuterHeight)/2));
    document.getElementById("menuCenterColumn").style.top = menuCenterColumnCalculatedTop+"px";

    var menuCenterColumnULOuterHeight = $('#menuCenterColumnUL').outerHeight();
    var menuCenterColumnULCalculatedTop = ((menuCenterColumnOuterHeight/2) - (menuCenterColumnULOuterHeight/2));
    document.getElementById("menuCenterColumnUL").style.top = menuCenterColumnULCalculatedTop+"px";

    var menuRightColumnOuterHeight = $('#menuRightColumn').outerHeight();
    var menuRightColumnCalculatedTop = ((menuRowHeight/2) - (menuRightColumnOuterHeight/2));
    document.getElementById("menuRightColumn").style.top = menuRightColumnCalculatedTop+"px";

    var menuRightColumnULOuterHeight = $('#menuRightColumnUL').outerHeight();
    var menuRightColumnULCalculatedTop = ((menuRightColumnOuterHeight/2) - (menuRightColumnULOuterHeight/2));
    document.getElementById("menuRightColumnUL").style.top = menuRightColumnULCalculatedTop+"px";

    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = "#menuLeftColumn::after { top: -"+(menuLeftColumnULOuterHeight/2)+"px; }";
    document.head.appendChild(css);

    // for menu -- end

  }
});
