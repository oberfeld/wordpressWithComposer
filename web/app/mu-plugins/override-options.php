<?php

add_action('wp_loaded',
    function () {
        add_filter('pre_option_blogname', function () {
            return OPTION_BLOGNAME;
        }, 'blogname');
        add_filter('pre_option_blogdescription', function(){
            return OPTION_BLOGDESCRIPTION;
        }, 'blogdescription');
    }
);