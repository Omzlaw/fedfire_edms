<?php

    if( ! function_exists('close_modal_refresh')){
        function close_modal_refresh()
        {        
            echo '<script>
                $("#model_modal").modal("hide");
                location.reload();
            </script>';
        }
    }