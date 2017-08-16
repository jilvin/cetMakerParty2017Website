var windowWidth = $(window).width();
var windowHeight = $(window).height();

var loginSectionWidth = $("#loginSection").width();
var loginSectionOuterHeight = $("#loginSection").outerHeight();
// console.log(loginSectionHeight);
var loginSectionCalculatedLeft = ((windowWidth/2) - (loginSectionWidth/2));
var loginSectionCalculatedTop = ((windowHeight/2) - (loginSectionOuterHeight/2));
// console.log(loginSectionCalculatedTop);
document.getElementById("loginSection").style.left = loginSectionCalculatedLeft+"px";
document.getElementById("loginSection").style.top = loginSectionCalculatedTop+"px";
