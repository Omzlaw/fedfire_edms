
<?php

use Illuminate\Support\Carbon;


if(!function_exists('format_date')) {
    function format_date($date) {
        $formatted_date = $date->toFormattedDateString();
        return $formatted_date;
    }   
}