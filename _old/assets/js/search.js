jQuery( function () { 
    jQuery('a[href="#search"]').on('click', function(event) { 
        event.preventDefault(); 
        jQuery('#gcod-searchbox').addClass('open');
        jQuery('#gcod-searchbox > form > input[type="text"]').focus();
    }); 
    jQuery('#gcod-searchbox, #gcod-searchbox button.close').on('click keyup', function(event) { 
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) { 
            jQuery(this).removeClass('open'); 
        } 
    }); 
});