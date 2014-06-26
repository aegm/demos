$(document).ready(function(){
	 

/*
    |--------------------------------------------------------------------------
    | FLEXSLIDER
    |--------------------------------------------------------------------------
    */ 

    if($('.flexFullScreen').length){

        $('.flexFullScreen').flexslider({
            animation: "fade",
            controlNav: true,
            directionNav: true,
            slideshow: true,
            touch: true,
            prevText: '<i class="icon-left-open"></i>',           
            nextText: '<i class="icon-right-open"></i>',   
            start: function(slider){
               // setTimeout("animateTxt("+slider.currentSlide+", 'in')", 100);  
            },
            before: function(slider){
               //setTimeout("animateTxt("+slider.currentSlide+")", 100);  
            },
            after: function(slider){
                //setTimeout("animateTxt("+slider.currentSlide+", 'in')", 100);  
            } 
        });

    }   
})