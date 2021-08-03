<?php

    if( ! function_exists('close_modal_refresh')){
        function close_modal_refresh()
        {    
            echo redirect('humanresource.employees.save');
            
        }
    }