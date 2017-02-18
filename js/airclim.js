jQuery(document).ready(function () {
    jQuery("#nav-toggle").click(function(){
        jQuery("#mobilmeny").fadeToggle("fast");
        this.classList.toggle("active");
    });
    
    
    jQuery('.mobilmeny-submenu').hide();
    jQuery('.mobilmeny-nav .nolink').hide();
    jQuery('.mobilmeny-nav .nolink').next('span').hide();
    
    //jQuery('.mobilmeny .active-trail .mobilmeny-submenu .mobilmeny-submenu').hide();
    //jQuery('.mobilmeny .active-trail .mobilmeny-submenu .mobilmeny-submenu .mobilmeny-submenu').hide();
    
    //jQuery('.mobilmeny .active-trail .mobilmeny-submenu').show();
    //jQuery('.mobilmeny .active-trail .mobilmeny-submenu .active-trail .mobilmeny-submenu').show();
    //7jQuery('.mobilmeny .active-trail .mobilmeny-submenu .active-trail .mobilmeny-submenu .active-trail .mobilmeny-submenu').show();
    //jQuery('.mobilmeny .active-trail span').text('-');

    jQuery('#mobilmeny span.open-sub').click(function() {
        jQuery(this).next('.mobilmeny-submenu').slideToggle('fast');
        var $thx = jQuery(this);
        $thx.text($thx.text() == '+' ? '-' : '+');
        //alert("ssssss");
    });
    
    jQuery(".scroll-top").click(function() {
        jQuery("html, body").animate({scrollTop: 0 }, "slow");
        return false;
        //alert("ssssss");
    });
    var offset = 220;
    var duration = 500;
    jQuery('.scroll-top').hide();
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.scroll-top').fadeIn(duration);
        } else {
            jQuery('.scroll-top').fadeOut(duration);
        }
    });
});