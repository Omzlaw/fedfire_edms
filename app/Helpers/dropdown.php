<?php

/**
 *
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		
 * @author		Alabi omeiza 
 * @since		Version 1.0
 * @enum helper to print html files in pdf and excel fromat
 */


use Illuminate\Database\Eloquent\Model;


if (!function_exists('modelDropdown')) {
    function modelDropdown(Model $model, $key = 'id', $value = 'name', $filter = null)
    {
        $modelData = $model::orderBy($value)->where('status', '=', '1')->get();
        $modelArray = array('' => 'Select...');
        if($filter == 'nigeria_only')
        {
            $modelData = $model::orderBy($value)->where('id', '=', '160')->where('status', '=', '1')->get();
        }
        else if($filter == 'nigerian_state_only') {
            $modelData = $model::orderBy($value)->where('country_id', '=', '160')->where('status', '=', '1')->get();
        }

        foreach ($modelData as $row) {
            $modelArray[$row->{$key}] = $row->{$value};
        }
        return $modelArray;
    }
}


if (!function_exists('getModelColumns')) {
    function getModelColumns(Model $model)
    {
        $modelColumns = $model::columns();
        return $modelColumns;
    }
}


/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		Okuta omeiza 
 * @since		Version 1.0
 * @enum helper to print html files in pdf and excel fromat
 */

if (!function_exists('get_enum_value')) {
    function get_enum_value($enum, $index)
    {
        if (isset($enum) && isset($index)) {
            $array = $enum();
            $value = $array[$index];
            return ($value != 'Select...') ? $value : 'No selection';
        } else {
            return '---';
        }
    }
}

if (!function_exists('get_array_value')) {
    function get_array_value(array $array, array $indexes)
    {
        if (count($array) == 0 || count($indexes) == 0) {
            return false;
        }

        $index = array_shift($indexes);
        if (!array_key_exists($index, $array)) {
            return false;
        }

        $value = $array[$index];
        if (count($indexes) == 0) {
            return $value;
        }

        if (!is_array($value)) {
            return false;
        }

        return get_array_value($value, $indexes);
    }
}

if (!function_exists('enum_gender')) {
    function enum_gender($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'Female';
        $option['1'] = 'Male';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_rank_type')) {
    function enum_rank_type($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'Officers Rank';
        $option['1'] = 'Rank & File';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_religion')) {
    function enum_religion($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['1'] = 'Christianity';
        $option['2'] = 'Islam';
        $option['3'] = 'Traditional';
        $option['4'] = 'Others';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_blood_group')) {
    function enum_blood_group($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['1'] = 'AA';
        $option['2'] = 'AB';
        $option['3'] = 'O Negative';
        $option['4'] = 'O positive';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_study_mode')) {
    function enum_study_mode($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'Full-Time';
        $option['1'] = 'Part-Time';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}
if (!function_exists('enum_exams')) {
    function enum_exams($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'WASSCE';
        $option['1'] = 'NECO';
        $option['2'] = 'NABTEB';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}


if (!function_exists('enum_disability')) {
    function enum_disability($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'Normal';
        $option['1'] = 'Disbled';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}


if (!function_exists('enum_marital_status')) {
    function enum_marital_status($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'Married';
        $option['1'] = 'Single';
        $option['2'] = 'Divorced';
        $option['3'] = 'Widower';
        $option['4'] = 'Widow';
        $option['5'] = 'Separated';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_status')) {
    function enum_status($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'Inactive';
        $option['1'] = 'Active';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_employee_status')) {
    function enum_employee_status($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'Retired';
        $option['1'] = 'Serving';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}


if (!function_exists('enum_fluency')) {
    function enum_fluency($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['5'] = 'Excellent';
        $option['4'] = 'Good';
        $option['3'] = 'Fair';
        $option['2'] = 'Poor';
        $option['1'] = 'Very Poor';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_enroll_status')) {
    function enum_enroll_status($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'Declined';
        $option['1'] = 'Admitted';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_yes_no')) {
    function enum_yes_no($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0'] = 'No';
        $option['1'] = 'Yes';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_chilld_location')) {
    function enum_chilld_location($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['1'] = 'Father';
        $option['2'] = 'Mother';
        $option['3'] = 'Other';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}



if (!function_exists('enum_rating')) {
    function enum_rating($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['1'] = 'Very Poor';
        $option['2'] = 'Poor';
        $option['3'] = 'Fair';
        $option['4'] = 'Good';
        $option['5'] = 'Very Good';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_message_scope')) {
    function enum_message_scope($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['1'] = 'Public';
        $option['2'] = 'Staff';
        $option['3'] = 'All';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_account_type')) {
    function enum_account_type($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['1'] = 'Reciepts';
        $option['2'] = 'Payments';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_register')) {
    function enum_register($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['1'] = 'Absent';
        $option['2'] = 'Present';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_time_of_day')) {
    function enum_time_of_day($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['1'] = 'AM';
        $option['2'] = 'PM';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_weekday')) {
    function enum_weekday($add_Select = TRUE)
    {
        $option['-1'] = 'Select...';
        $option['0']  = 'Sunday';
        $option['1']  = 'Monday';
        $option['2']  = 'Tuesday';
        $option['3']  = 'Wednesday';
        $option['4']  = 'Thursday';
        $option['5']  = 'Friday';
        $option['6']  = 'Saturday';
        if (!$add_Select) {
            unset($option['-1']);
        }
        return $option;
    }
}

if (!function_exists('enum_gradebook_skills')) {
    function enum_gradebook_skills()
    {

        $options = [
            '0'  => 'Select...',
            '5' =>  'Excellent',
            '4' =>  'Good',
            '3' =>  'Fair',
            '2' =>  'Poor',
            '1' =>  'Very Poor'
        ];

        return $options;
    }
}

if (!function_exists('enum_brodsheet_sheet')) {
    function enum_brodsheet_sheet()
    {
        $options = [
            '0'  => 'Select...',
            '1' =>  'Term',
            '2' =>  'Cummulative',
        ];

        return $options;
    }
}

if (!function_exists('get_days')) {
    function get_days()
    {

        $days = range(1, 31);

        $options['-1'] = 'Select...';

        foreach ($days as $day) {
            $day = str_pad($day, 2, '0', STR_PAD_LEFT);
            $options[$day] = $day;
        }
        return $options;
    }
}

if (!function_exists('get_months')) {
    function get_months()
    {
        $months = range(1, 12);

        $options['-1'] = 'Select...';

        foreach ($months as $month) {
            $month = str_pad($month, 2, '0', STR_PAD_LEFT);
            $options[$month] = date("F", mktime(0, 0, 0,  $month, 10));
        }
        return $options;
    }
}

if (!function_exists('get_years')) {
    function get_years($start_year = NULL, $end_year = NULL)
    {

        $start_year = isset($start_year) ? $start_year : date('Y');

        $years = range($start_year, $start_year - 20);

        $options['-1'] = 'Select...';

        foreach ($years as $year) {
            $options[$year] = $year;
        }
        return $options;
    }
}

if (!function_exists('get_weekdays')) {
    function get_weekdays()
    {
        $timestamp = strtotime('next Sunday');

        $options['-1'] = 'Select...';

        for ($i = 0; $i < 7; $i++) {
            $options[$i] = strftime('%A', $timestamp);
            $timestamp = strtotime('+1 day', $timestamp);
        }
        return $options;
    }
}

if (!function_exists('get_hours')) {
    function get_hours()
    {
        $hours = range(0, 23);

        $options['-1'] = 'Select...';

        foreach ($hours as $hour) {
            $hour = str_pad($hour, 2, '0', STR_PAD_LEFT);
            $options[$hour] = $hour;
        }
        return $options;
    }
}

if (!function_exists('get_mins')) {
    function get_mins()
    {
        $hours = range(0, 59);

        $options['-1'] = 'Select...';

        foreach ($hours as $hour) {
            $hour = str_pad($hour, 2, '0', STR_PAD_LEFT);
            $options[$hour] = $hour;
        }
        return $options;
    }
}
