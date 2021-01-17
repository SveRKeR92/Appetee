$('button').on('click',function(e){
    e.preventDefault();
})

$(document).ready(function() {
    $('a').on('click', function() {
        var anchor = $(this).attr('href'); // Page cible
        console.log(anchor);
        if(anchor != "#nom"){
            $('html, body').animate( { scrollTop: $(anchor).offset().top - 150 });
        }else{
            $('html, body').animate( { scrollTop: $(anchor).offset().top - 400 });
            $('#nom').focus();
        }
        return false;
    });
});

