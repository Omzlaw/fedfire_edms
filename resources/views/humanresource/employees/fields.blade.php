<!-- File No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_no', 'Service No:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('file_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- First Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('first_name', 'First Name:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Middle Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('middle_name', 'Middle Name:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Last Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('last_name', 'Last Name:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Gender Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('gender', 'Gender:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('gender', enum_gender(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Birthdate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('birthdate', 'Birthdate:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('birthdate', null, ['class' => 'form-control', 'id' => 'birthdate']) !!}
        </div>
    </div>
</div>

{{-- @section('footer_scripts')
    <script type="text/javascript">
        $('#birthdate').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
    </script>
@endsection --}}


<!-- Place Of Birth Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('place_of_birth', 'Place Of Birth:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('place_of_birth', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}


<!-- Profile Picture  Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('profile_picture', 'Profie Picture:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::file('profile_picture') !!}
        </div>
    </div>
</div>


<!-- Marital Status Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('marital_status_id', 'Marital Status:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('marital_status_id', enum_marital_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- First Appointment Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('first_appointment_date', 'First Appointment Date:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('first_appointment_date', null, ['class' => 'form-control', 'id' => 'first_appointment_date']) !!}
        </div>
    </div>
</div>

{{-- @section('footer_scripts')
    <script type="text/javascript">
        $('#first_appointment_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
    </script>
@endsection --}}

<!-- Date of Resumption of Duty Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('resumption_of_duty_date', 'Date of Resumption of Duty:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('resumption_of_duty_date', null, ['class' => 'form-control', 'id' => 'resumption_of_duty_date']) !!}
        </div>
    </div>
</div>

<!-- First Arrival Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('first_arrival_date', 'First Arrival Date:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('first_arrival_date', null, ['class' => 'form-control', 'id' => 'first_arrival_date']) !!}
        </div>
    </div>
</div>

<!--  Present Appointment Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('present_appointment_date', 'Present Appointment Date:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('present_appointment_date', null, ['class' => 'form-control', 'id' => 'present_appointment_date']) !!}
        </div>
    </div>
</div>

{{-- @section('footer_scripts')
    <script type="text/javascript">
        $('#first_arrival_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
    </script>
@endsection --}}


<!-- Nationality Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('country_id', 'Country:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('nationality', modelDropdown($countries, 'id', 'title'), null, ['class' => 'form-control', 'onchange' => 'countryGeoPoliticalZoneSelector()', 'id' => 'countrySelector']) !!}
        </div>
    </div>
</div> --}}
{!! Form::macro('countrySelect', function ($countryModel) {
    $countries = $countryModel::orderBy('title')->where('id', '=', '160')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('nationality');
    foreach ($countries as $country) {
        if($value == $country->id) {
            $option = '<option selected value=' . $country->id . '' . '>' . $country->title . '</option>';
            $options[] = $option;
        }
        else {
            $option = '<option value=' . $country->id . '' . '>' . $country->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='countrySelector' name='nationality' class='form-control' onchange='countryStateSelector()'>{$list}</select>";
}) !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('nationality', 'Country:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::countrySelect($countries) !!}
        </div>
    </div>
</div>


<!-- State of Origin Field -->
{!! Form::macro('stateSelect', function ($stateModel) {
    $states = $stateModel::orderBy('title')->where('country_id', '=', '160')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('state_of_origin');
    foreach ($states as $state) {
        if($value == $state->id) {
            $option = '<option selected value=' . $state->id . ' data-country_id=' . $state->country_id . ' data-geo_political_zone_id=' . $state->geo_political_zone_id . '>' . $state->title . '</option>';
            $options[] = $option;
        }
        else {
            $option = '<option value=' . $state->id . ' data-country_id=' . $state->country_id . ' data-geo_political_zone_id=' . $state->geo_political_zone_id . '>' . $state->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='stateSelector' name='state_of_origin' class='form-control' onchange='stateLocalGovtAreaSelector()'>{$list}</select>";
}) !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('state_id', 'State of Origin:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::stateSelect($states) !!}
        </div>
    </div>
</div>

<!-- Geo-Political Zone Field -->
{!! Form::macro('geoPoliticalZoneSelect', function ($geoPoliticalZoneModel) {
    $geoPoliticalZones = $geoPoliticalZoneModel::orderBy('title')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('geo_political_zone');
    foreach ($geoPoliticalZones as $geoPoliticalZone) {
        if($value == $geoPoliticalZone->id){
            $option = '<option selected value=' . $geoPoliticalZone->id . ' data-country_id=' . $geoPoliticalZone->country_id . '>' . $geoPoliticalZone->title . '</option>';
            $options[] = $option;
        }
        else {
            $option = '<option value=' . $geoPoliticalZone->id . ' data-country_id=' . $geoPoliticalZone->country_id . '>' . $geoPoliticalZone->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='geoPoliticalZoneSelector' name='geo_political_zone' class='form-control' onchange=''>{$list}</select>";
}) !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('geo_political_zone_id', 'Geo-Political Zone:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::geoPoliticalZoneSelect($geo_political_zones) !!}
        </div>
    </div>
</div>



<!-- Local Govt Area Zone Field -->
{!! Form::macro('localGovtAreaSelect', function ($localGovtAreaModel) {
    $localGovtAreas = $localGovtAreaModel::orderBy('title')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('geo_political_zone');
    foreach ($localGovtAreas as $localGovtArea) {
        if($value == $localGovtArea->id){
            $option = '<option selected value=' . $localGovtArea->id . ' data-senatorial_zone_id=' . $localGovtArea->senatorial_zone_id . ' data-state_id=' . $localGovtArea->state_id . '>' . $localGovtArea->title . '</option>';
            $options[] = $option;
        }
        else{
            $option = '<option value=' . $localGovtArea->id . ' data-senatorial_zone_id=' . $localGovtArea->senatorial_zone_id . ' data-state_id=' . $localGovtArea->state_id . '>' . $localGovtArea->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='localGovtAreaSelector' name='local_govt_area' class='form-control' onchange='localGovtSelector()'>{$list}</select>";
}) !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('local_govt_area_id', 'Local Govt Area:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::localGovtAreaSelect($local_govt_areas) !!}
        </div>
    </div>
</div>

<!-- Senatorial Zone Field -->
{!! Form::macro('senatorialZoneSelect', function ($senatorialZoneModel) {
    $senatorialZones = $senatorialZoneModel::orderBy('title')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('senatorial_zone');
    foreach ($senatorialZones as $senatorialZone) {
        if($value == $senatorialZone->id){
            $option = '<option selected value=' . $senatorialZone->id . ' data-state_id=' . $senatorialZone->state_id . '>' . $senatorialZone->title . '</option>';
            $options[] = $option;
        }
        else {
            $option = '<option selected value=' . $senatorialZone->id . ' data-state_id=' . $senatorialZone->state_id . '>' . $senatorialZone->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='senatorialZoneSelector' name='senatorial_zone' class='form-control' onchange=''>{$list}</select>";
}) !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('senatorial_zone_id', 'Senatorial Zone:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::senatorialZoneSelect($senatorial_zones) !!}
        </div>
    </div>
</div>


<!-- Decorations Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('decorations', 'Decorations:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('decorations', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Staff code -->
{!! Form::hidden('staff_code', null, ['class' => 'form-control']) !!}

<!-- File Upload Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>
</div> --}}


<!-- Remark Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('remark', 'Remark:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Email Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('email', 'Email:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Phone Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('phone', 'Phone:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_employee_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Current Appointment Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('current_appointment', 'Current Appointment:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('current_appointment', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg']) !!}
    <a href="{{ route('humanresource.employees.index') }}" class="btn btn-default text-danger">Cancel</a>
</div>



<script>
    window.onload = function() {
        // $('#countrySelector').prop('disabled', 'disabled');
        $('#stateSelector').prop('disabled', 'disabled');
        $('#geoPoliticalZoneSelector').prop('disabled', 'disabled');
        $('#senatorialZoneSelector').prop('disabled', 'disabled');
        $('#localGovtAreaSelector').prop('disabled', 'disabled');
    }

    function countryStateSelector(event) {

        var countrySelect = $('#countrySelector');
        var stateSelect = $('#stateSelector');
        stateSelect.prop("selectedIndex", 0).val();
        var id = $(countrySelect).children("option:selected").val();
        $("#stateSelector > option").each(function() {
            let country_id = $(this).data("country_id");
            if (id == country_id) {
                $(this).removeAttr('disabled').show();
            } else {
                $(this).attr('disabled', 'disabled').hide();
            }
        });
        stateSelect.prop('disabled', false);
    }

    function stateLocalGovtAreaSelector() {
        let stateSelect = $('#stateSelector');
        let localGovtAreaSelect = $('#localGovtAreaSelector');
        let geoPolitcalZoneSelect = $('#geoPoliticalZoneSelector');
        localGovtAreaSelect.prop("selectedIndex", 0).val();
        geoPolitcalZoneSelect.prop("selectedIndex", 0).val();
        let geo_political_zone_id = stateSelect.children("option:selected").data("geo_political_zone_id");

        $("#geoPoliticalZoneSelector > option").each(function() {
            let geo_zone_id = $(this).val();
            if (geo_political_zone_id == geo_zone_id) {
                // $(this).attr('selected', true);
                $(this).removeAttr('disabled').show();
            } else {
                $(this).attr('disabled', 'disabled').hide();
                // $(this).attr('selected', false);
            }
        });

        geoPolitcalZoneSelect.prop('disabled', false);

        $("#localGovtAreaSelector > option").each(function() {
            let id = stateSelect.children("option:selected").val();
            let state_id = $(this).data("state_id");
            if (id == state_id) {
                $(this).removeAttr('disabled').show();
            } else {
                $(this).attr('disabled', 'disabled').hide();
            }
        });

        localGovtAreaSelect.prop('disabled', false);
    }

    function localGovtSelector() {
        var localGovtAreaSelect = $('#localGovtAreaSelector');
        var senatorialZoneSelect = $('#senatorialZoneSelector');
        senatorialZoneSelect.prop("selectedIndex", 0).val();
        var id = localGovtAreaSelect.children("option:selected").val();
        var senatorial_zone_id = localGovtAreaSelect.children("option:selected").data("senatorial_zone_id");

        $("#senatorialZoneSelector > option").each(function() {
            let senate_zone_id = $(this).val();
            if (senatorial_zone_id == senate_zone_id) {
                // $(this).attr('selected', true);
                $(this).removeAttr('disabled').show();
            } else {
                $(this).attr('disabled', 'disabled').hide();
                // $(this).attr('selected', false);
            }
        });
        senatorialZoneSelect.prop('disabled', false);
    }

    // function countryStateSelector(event) {
    //     var countrySelect = $('#countrySelector');
    //     var stateSelect = $('#stateSelector');
    //     var id = countrySelect.children("option:selected").val();
    //     $("#stateSelector > option").each(function() {
    //         let country_id = $(this).data("country_id");
    //         if (id == country_id) {
    //             $(this).removeAttr('disabled').show();
    //         } else {
    //             $(this).attr('disabled', 'disabled').hide();
    //         }
    //     });
    //     stateSelect.prop('disabled', false);
    // }

    // function countryGeoPoliticalZoneSelector(event) {

    //     var countrySelect = $('#countrySelector');
    //     var geoPolitcalZoneSelect = $('#geoPoliticalZoneSelector');
    //     var id = countrySelect.children("option:selected").val();
    //     $("#GeoPoliticalZoneSelector > option").each(function() {
    //         let country_id = $(this).data("country_id");
    //         if (id == country_id) {
    //             $(this).removeAttr('disabled').show();
    //         } else {
    //             $(this).attr('disabled', 'disabled').hide();
    //         }
    //     });
    //     geoPolitcalZoneSelect.prop('disabled', false);
    // }

    // function geoPoliticalZoneStateSelector(event) {

    //     var stateSelect = $('#stateSelector');
    //     var geoPolitcalZoneSelect = $('#geoPoliticalZoneSelector');
    //     var id = geoPolitcalZoneSelect.children("option:selected").val();
    //     $("#stateSelector > option").each(function() {
    //         let geo_political_zone_id = $(this).data("geo_political_zone_id");
    //         if (id == geo_political_zone_id) {
    //             $(this).removeAttr('disabled').show();
    //         } else {
    //             $(this).attr('disabled', 'disabled').hide();
    //         }
    //     });
    //     stateSelect.prop('disabled', false);
    // }

    // function stateSenatorialZoneSelector(event) {

    //     var stateSelect = $('#stateSelector');
    //     var senatorialZoneSelect = $('#senatorialZoneSelector');
    //     var id = stateSelect.children("option:selected").val();
    //     $("#senatorialZoneSelector > option").each(function() {
    //         let state_id = $(this).data("state_id");
    //         if (id == state_id) {
    //             $(this).removeAttr('disabled').show();
    //         } else {
    //             $(this).attr('disabled', 'disabled').hide();
    //         }
    //     });
    //     senatorialZoneSelect.prop('disabled', false);
    // }

    // function senatorialZoneLocalGovtAreaSelector(event) {

    //     var senatorialZoneSelect = $('#senatorialZoneSelector');
    //     var localGovtAreaSelect = $('#localGovtAreaSelector');
    //     var id = senatorialZoneSelect.children("option:selected").val();
    //     $("#localGovtAreaSelector > option").each(function() {
    //         let senatorial_zone_id = $(this).data("senatorial_zone_id");
    //         if (id == senatorial_zone_id) {
    //             $(this).removeAttr('disabled').show();
    //         } else {
    //             $(this).attr('disabled', 'disabled').hide();
    //         }
    //     });
    //     localGovtAreaSelect.prop('disabled', false);
    // }
</script>
