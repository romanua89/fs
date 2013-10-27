(function($){

    $(document).ready(function(){

        $.fn.topWindowMenu();
        $(window).scroll(function(){
            $.fn.topWindowMenu();
        });

    });

    $.fn.topWindowMenu = function(){

        var $siteMenu = $('.site-menu'),
            scrollTopPosition = document.documentElement.scrollTop,
            TopPosition = document.getElementById('siteMenu').offsetTop,
            topSiteLineHeight = $('.top-site-line').height(),
            mustFixOnTop = false,
            currentState = false;




        if(scrollTopPosition > TopPosition + topSiteLineHeight){
            mustFixOnTop = true;
            activateFixateMenu();
        }else{
            mustFixOnTop = false;
            deactivateFixateMenu();
        }


        function activateFixateMenu(){
            if(currentState) return;
            console.log('activate');
            currentState = true;
        }

        function deactivateFixateMenu(){

            console.log('deactivate');

        }




    }



})(jQuery);