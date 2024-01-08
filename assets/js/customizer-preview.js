(function ($) {
    $(document).ready(function () {

        wp.customize('add_support_text', function (value) {
            value.bind(function(to){
                $('.add-support-text').text(to);
            
            });
        });
        wp.customize('add_contact_number', function (value) {
            value.bind(function(to){
                $('.add_contact_number').text(to);
            
            });
        });

        wp.customize('top_header_right_side', function (value) {
            value.bind(function(to){
                true === to ? $('.mc-right-nav').hide() : $('.mc-right-nav').show();
                
            
            });
        });
        wp.customize('search_bar', function (value) {
            value.bind(function(to){
                true === to ? $('.header-item-search').hide() : $('.header-item-search').show();
               
            
            });
        });
        wp.customize('mc_logo', function (value) {
            value.bind(function(newvalue){
                if(newvalue){
                    $('.mc_logo').attr('src', newvalue);
                }
               
               
            
            });
        });



    })
})(jQuery);
