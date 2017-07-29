var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");

if(isAndroid)
{

  if(window.getComputedStyle(document.body))
  {

    //background-position fix
    document.body.style.backgroundPosition = "unset";

  }

}