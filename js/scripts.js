jQuery(document).ready(function($) {
    
    $('.connect i').each(function() {
        if($(this).hasClass('Facebook')) {
            $(this).addClass('fa-facebook-official');              
        }
        else if($(this).hasClass('Twitter')) {
            $(this).addClass('fa-twitter');
        }
        else if($(this).hasClass('Vine')) {
            $(this).addClass('fa-vine');
        }
        else if($(this).hasClass('Instagram')) {
            $(this).addClass('fa-instagram');
        }
        else if($(this).hasClass('YouTube')) {
            $(this).addClass('fa-youtube-play');
        }
        else if($(this).hasClass('LinkedIn')) {
            $(this).addClass('fa-linkedin-square');
        }
    });
    
});