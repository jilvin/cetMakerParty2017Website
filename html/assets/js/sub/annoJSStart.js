var anno1 = new Anno({
  target : '#henosisDupe',
  position: {
    top: '50%',
    left: 'calc(50vw - 100px)'
  },
  className: 'anno-width-200',
  content: 'Hey! I am henosis. Move me around or click me to view the menu.',
  buttons : [{
    text: 'OK :)',
    // className: 'anno-btn-low-importance',
    click: function(anno, evt){
      anno.hide()}
    }]
  })

  // $( document ).ready(function() {
  $(window).on('load', function()
  {
    setTimeout(function () {
      anno1.show();
    }, 1000);
  });
