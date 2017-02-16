jQuery(document).ready(function () {
    //alert("hej");  
    jQuery("#menu-close").click(function () {
        jQuery('#mobilmeny').removeClass('open');
    });
    jQuery(".mobile-nav-trigger").click(function () {
        jQuery('#mobilmeny').addClass('open');
    });
});