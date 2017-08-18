var windowHeight = $(window).height();
// console.log(windowHeight);
var headerRowHeight = $("#headerRow").height();
// console.log(headerRowHeight);

var applyButtonsRowHeight = (windowHeight - headerRowHeight);
// console.log(applyButtonsRowHeight);
document.getElementById("applyButtonsRow").style.height = applyButtonsRowHeight + "px";

// var applyButtonsRowOuterHeight = $("#applyButtonsRow").outerHeight();
var applyButtonsRowOuterHeight = applyButtonsRowHeight;
// console.log(applyButtonsRowOuterHeight);
var workApplyButtonOuterHeight = $("#workApplyButton").outerHeight();
var experienceApplyButtonOuterHeight = $("#experienceApplyButton").outerHeight();

var workApplyButtonCalculatedTop = (applyButtonsRowOuterHeight/2) - (workApplyButtonOuterHeight/2);
document.getElementById("workApplyButton").style.top = workApplyButtonCalculatedTop+"px";

var experienceApplyButtonCalculatedTop = (applyButtonsRowOuterHeight/2) - (experienceApplyButtonOuterHeight/2);
document.getElementById("experienceApplyButton").style.top = experienceApplyButtonCalculatedTop+"px";
