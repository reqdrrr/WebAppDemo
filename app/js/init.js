(function($){
  $(function(){

    if ($(".fb-like").length > 0) {
        if (typeof (FB) != 'undefined') {
            FB.init({ status: true, cookie: true, xfbml: true, appId : '246819758725223' });
        } else {
            $.getScript("//connect.facebook.net/en_US/all.js#xfbml=1", function () {
                FB.init({ status: true, cookie: true, xfbml: true, appId : '246819758725223' });
            });
        }
    }

  	$('.button-collapse').sideNav({
      menuWidth: 350, // Default is 240
    });

    $('.button-collapse2').sideNav({
    	menuWidth: 240, // Default is 240
    });

  	$('.dropdown-button').dropdown({ 
  	    hover: true ,
  	    alignment: 'left',
  	});

  	$('.dropdown-button2').dropdown({ 
  	    hover: true ,
  	    alignment: 'left',
  	});

    $('.tooltipped').each(function(index, element) {
        var span = $('#' + $(element).attr('data-tooltip-id') + '>span:first-child');
        span.before($(element).attr('data-tooltip'));
        span.remove();
    });

    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year,
      today: 'Today',
      clear: 'Clear',
      close: 'Ok',
      closeOnSelect: false, // Close upon selecting a date,
      format: 'yyyy-mm-dd'
    });

    $('.pcodatepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year,
      today: 'Today',
      clear: 'Clear',
      close: 'Ok',
      closeOnSelect: false, // Close upon selecting a date,
      format: 'yyyy-mm-dd',
      min: new Date(2018,6,2),
      max: new Date(2018,6,6)
    });

  	$('.modal').modal();

    $('.carousel.carousel-slider').carousel({
      full_width: true,
      interval: 5000,
    });

    setInterval(function(){
      $('.carousel').carousel('next');
    },7000);

    $('.slider').slider({
        full_width: true,
        interval: 7000,
    });

    $('select').material_select();

    $(document).on('click', 'a.btn.disabled', function(e){
      e.preventDefault();
    });

    fix_navlogo();
    $(window).on("resize scroll load", fix_navlogo);

    //for quizzes
    $('a.verify').click(function(e){
      e.preventDefault();
      var url = $(this).attr('href');
      var wrong = [];
      $('select.question').each(function(index){
        if($(this).val() != 'true'){
          wrong.push('#'+(index+1));
        }
      });
      if(wrong.length == 0){
        ajax({
          url:window.location.pathname,
          data:{result:'passed'},
          success:function(data){
            window.location = url;
          }
        });
      }
      else{
        var prompt = 'Your '+((wrong.length > 1)?'answers':'answer')+' in '+((wrong.length > 1)?'questions ':'question ')+series(wrong)+' '+((wrong.length > 1)?'are':'is')+' wrong. Please review your '+((wrong.length > 1)?'answers ':'answer ')+'.';
        Materialize.toast(prompt,5000);
      }
    });

    $('#sidenavbutton').click(function(){
      document.getElementById('slide-out').style.display='';
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space