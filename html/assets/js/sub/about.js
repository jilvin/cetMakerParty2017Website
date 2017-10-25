$('a[href="#evolve"]').click(function(){
  if($("#evolveContent").hasClass("active"))
  {
    $("#evolveContent").toggle();

    $("#evolveToggle").html("<b>Know about E-volve from EDC CET.</b>");

    $("#evolveContent").toggleClass("active");
  }
  else
  {
    $("#evolveContent").toggle();

    $("#evolveToggle").html("<b>Hide E-volve details.</b>");

    $("#evolveContent").toggleClass("active");
  }
});
