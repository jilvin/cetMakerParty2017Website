var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
// if(isAndroid)
// {

if(window.getComputedStyle(document.body))
{

  var imageSrc = window.getComputedStyle(document.body).getPropertyValue('background-image').replace(/url\((['"])?(.*?)\1\)/gi, '$2').split(',')[0];

  var image = new Image();
  image.src = imageSrc;

  var imageWidth = image.width,
  imageHeight = image.height;

  var windowWidth = window.innerWidth,
  windowHeight = window.innerHeight;

  // alert('width =' + width + ', height = ' + height)

  var leftOffset = parseFloat((imageWidth - windowWidth)/2);
  var topOffset = parseFloat((imageHeight - windowHeight)/2);

  //background-position fix
  document.body.style.backgroundPosition = parseFloat(leftOffset/2)+"px "+parseFloat(topOffset/2)+"px";
}

// }