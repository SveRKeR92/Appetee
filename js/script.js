$(document).ready(function() {
    $('a').on('click', function() {
        let anchor = $(this).attr('href'); // Page cible
        let headHeight = $('header').height();
        console.log(headHeight);
        console.log(anchor);
        if(anchor != "#nom"){
            $('html, body').animate( { scrollTop: $(anchor).offset().top - (headHeight+60) });
        }else{
            $('html, body').animate( { scrollTop: $(anchor).offset().top - (headHeight+300) });
            $('#nom').focus();
        }
        return false;
    });
});

