
/* Nivo Slider */
$(window).load(function() {

    $('#slider').nivoSlider({directionNavHide:false});

});

$(document).ready(function(){
    /* Fancy Box */
    $('a.lightbox').fancybox({
        'titlePosition'	: 'over',
        'padding'       : 16,
        'opacity'		: true,
		'overlayShow'	: false,
		'transitionIn'	: 'elastic',
		'transitionOut'	: 'elastic'
  	});
   // youtube videos with fancy box
   $('a.lightbox-video').click(function() {

        $.fancybox( {
            'titlePosition'	: 'over',
            'padding'       : 16,
            'opacity'		: true,
		    'overlayShow'	: false,
		    'transitionIn'	: 'elastic',
		    'transitionOut'	: 'elastic',
            'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
            'type'          : 'swf',
            'swf'           : {'wmode':'transparent','allowfullscreen':'true'}

          });
            return false;
    });

    // Fade in/out on hover
    /*
    $("ul.folio-list li .thumb img").fadeTo("slow", 0.6);
    $("ul.folio-list li .thumb img").hover(function(){
        $(this).fadeTo("slow", 1.0);
    },function(){
        $(this).fadeTo("slow", 0.6);
    });
    */
    $('#contactform').submit(function (e) {

        e.preventDefault();
        var name = $('#name').val(),
            email = $('#email').val(),
            message = $('#message').val(),
            dataString = 'name=' + name + '&email=' + email + '&message=' + message;

            console.log($('#name'), $('#name').val(), dataString);
        if (name != '' && email != '' && message != '') {
            $.ajax({
                type : 'POST',
                processData: false,
                data : dataString,
                url : 'contact.php',
                success : function (data) {
                    console.log(data);
                    if (parseInt(data) == 1) {
                        $('#success-msg').text('Message has been sent!');
                        $('html, body').animate({
                             scrollTop: $("#contact").offset().top
                         }, 1000);
                    }
                },
                error : function (err) {
                    console.log(err);
                }
            });
        }
    });
});


