var windowHeight = $(window).height();
// console.log(windowHeight);
var headerRowHeight = $("#headerRow").outerHeight();
// console.log(headerRowHeight);

var applySectionHeight = (windowHeight) - (headerRowHeight);
document.getElementById("applySection").style.height = applySectionHeight+"px";


var applyLineHeight = $("#applyLine").outerHeight();
// document.getElementById("applyLine").style.marginTop = applyLineHeight+"px";

// document.getElementById("applyButtonsRowWrap").style.marginTop = "-"+applyLineHeight+"px";
var applyButtonsRowHeight = (applySectionHeight) - (applyLineHeight);
document.getElementById("applyButtonsRow").style.height = applyButtonsRowHeight+"px";

// document.getElementById("workApplyButton").style.marginTop = "-"+((headerRowHeight+applyLineHeight)/2)+"px";
