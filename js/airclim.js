jQuery(document).ready(function () {
    jQuery("#nav-toggle").click(function(){
        jQuery("#mobilmeny").fadeToggle("fast");
        this.classList.toggle("active");
    });
    
    
    $('.off-canvas-submenu .off-canvas-submenu').hide();
    $('.off-canvas-nav .nolink').hide();
    $('.off-canvas-nav .nolink').next('span').hide();
    $('.off-canvas-submenu .active-trail .off-canvas-submenu').show();
    $('.off-canvas-submenu .active-trail span').text('-');

    $('.open-sub').click(function() {
        $(this).next('.off-canvas-submenu .off-canvas-submenu').slideToggle();
        var $thx = $(this);
        $thx.text($thx.text() == '+' ? '-' : '+');
    });
    
    
});