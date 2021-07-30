<?php

    if( ! function_exists('close_modal_refresh')){
        function close_modal_refresh()
        {        
            echo '<script>
                document.getElementById("model_modal").hide()
                location.reload();
            </script>';
        }
    }