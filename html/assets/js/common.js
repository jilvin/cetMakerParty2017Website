// for session data management -- start

function writeCookie(name,value,minutes) {
    var date, expires;
    if (minutes) {
        date = new Date();
        date.setTime(date.getTime()+(minutes*60*1000));
        expires = "; expires=" + date.toGMTString();
            }else{
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var i, c, ca, nameEQ = name + "=";
    ca = document.cookie.split(';');
    for(i=0;i < ca.length;i++) {
        c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return '';
}

// for session data management -- end

// for henosis to resume states -- start
// https://stackoverflow.com/questions/2257631/how-to-create-a-session-using-javascript

function saveHenosisState()
{
  var windowWidth = $(window).width();
  var windowHeight = $(window).height();
  writeCookie("windowWidth", windowWidth, 30); // 30 minutes
  writeCookie("windowHeight", windowHeight, 30); // 30 minutes
  writeCookie("henosisCX", document.getElementById("henosis").getAttribute("cx"), 30); // 30 minutes
  writeCookie("henosisCY", document.getElementById("henosis").getAttribute("cy"), 30); // 30 minutes
}

var resumeHenosis = document.getElementsByClassName("resumeHenosis");

for (var i = 0; i < resumeHenosis.length; i++)
{
  resumeHenosis[i].addEventListener('click', saveHenosisState, false);
}

// for henosis to resume states -- end

// for henosis initialization -- start

if(readCookie("henosisCX") != '' && readCookie("henosisCY") != '' && readCookie("windowWidth") == $(window).width() && readCookie("windowHeight") == $(window).height())
{
  henosisInit(2, "visibility", readCookie("henosisCX"), readCookie("henosisCY"));
}
else
{
  henosisInit(2, "visibility");
}

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

  var ua = navigator.userAgent.toLowerCase();
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
