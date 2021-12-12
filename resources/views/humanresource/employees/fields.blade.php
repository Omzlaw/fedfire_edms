<div class="col-sm-12 form-group text-center">
    <h6>Basic Information</h6>
</div>


<!-- Profile Picture  Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('profile_picture', 'Profie Picture:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::file('profile_picture', ['id' => 'profile_picture']) !!}
        </div>
    </div>
</div>


<!-- First Name Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('first_name', 'First Name:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Middle Name Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('middle_name', 'Middle Name:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Last Name Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('last_name', 'Last Name:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Gender Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('gender', 'Gender/Sex:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('gender', enum_gender(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Religion Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('religion', 'Religion:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('religion', enum_religion(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Birthdate Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('date_of_birth', 'Date of Birth:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_of_birth', null, ['class' => 'form-control', 'id' => 'date_of_birth']) !!}
        </div>
    </div>
</div>

{{-- @section('footer_scripts')
    <script type="text/javascript">
        $('#date_of_birth').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
    </script>
@endsection --}}


<!-- Place Of Birth Field -->
{{-- <div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('place_of_birth', 'Place Of Birth:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('place_of_birth', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}




<!-- Marital Status Id Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('marital_status_id', 'Marital Status:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('marital_status_id', enum_marital_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Nationality Field -->
{{-- <div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('country_id', 'Country:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('nationality', modelDropdown($countries, 'id', 'title'), null, ['class' => 'form-control', 'onchange' => 'countryGeoPoliticalZoneSelector()', 'id' => 'countrySelector']) !!}
        </div>
    </div>
</div> --}}
{!! Form::macro('countrySelect', function ($countryModel) {
    $countries = $countryModel
        ::orderBy('title')->where('id', '=', '160')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('nationality');
    foreach ($countries as $country) {
        if ($value == $country->id) {
            $option = '<option selected value=' . $country->id . '' . '>' . $country->title . '</option>';
            $options[] = $option;
        } else {
            $option = '<option selected value=' . $country->id . '' . '>' . $country->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='countrySelector' name='nationality' class='form-control'>{$list}</select>";
}) !!}


<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('nationality', 'Country:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::countrySelect($countries) !!}
        </div>
    </div>
</div>


<!-- State of Origin Field -->
{!! Form::macro('stateSelect', function ($stateModel) {
    $states = $stateModel
        ::orderBy('title')->where('country_id', '=', '160')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('state_of_origin');
    foreach ($states as $state) {
        if ($value == $state->id) {
            $option = '<option selected value=' . $state->id . ' data-country_id=' . $state->country_id . ' data-geo_political_zone_id=' . $state->geo_political_zone_id . '>' . $state->title . '</option>';
            $options[] = $option;
        } else {
            $option = '<option value=' . $state->id . ' data-country_id=' . $state->country_id . ' data-geo_political_zone_id=' . $state->geo_political_zone_id . '>' . $state->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='stateSelector' name='state_of_origin' class='form-control' onchange='stateLocalGovtAreaSelector()'>{$list}</select>";
}) !!}


<div class="col-sm-6 form-group">
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
        if ($value == $geoPoliticalZone->id) {
            $option = '<option selected value=' . $geoPoliticalZone->id . ' data-country_id=' . $geoPoliticalZone->country_id . '>' . $geoPoliticalZone->title . '</option>';
            $options[] = $option;
        } else {
            $option = '<option value=' . $geoPoliticalZone->id . ' data-country_id=' . $geoPoliticalZone->country_id . '>' . $geoPoliticalZone->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='geoPoliticalZoneSelector' name='geo_political_zone' class='form-control' onchange=''>{$list}</select>";
}) !!}


<div class="col-sm-6 form-group">
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
    $value = Form::getValueAttribute('local_govt_area');
    foreach ($localGovtAreas as $localGovtArea) {
        if ($value == $localGovtArea->id) {
            $option = '<option selected value=' . $localGovtArea->id . ' data-senatorial_zone_id=' . $localGovtArea->senatorial_zone_id . ' data-state_id=' . $localGovtArea->state_id . '>' . $localGovtArea->title . '</option>';
            $options[] = $option;
        } else {
            $option = '<option value=' . $localGovtArea->id . ' data-senatorial_zone_id=' . $localGovtArea->senatorial_zone_id . ' data-state_id=' . $localGovtArea->state_id . '>' . $localGovtArea->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select data-old-value=$value id='localGovtAreaSelector' name='local_govt_area' class='form-control' onchange='localGovtSelector()'>{$list}</select>";
}) !!}


<div class="col-sm-6 form-group">
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
        if ($value == $senatorialZone->id) {
            $option = '<option selected value=' . $senatorialZone->id . ' data-state_id=' . $senatorialZone->state_id . '>' . $senatorialZone->title . '</option>';
            $options[] = $option;
        } else {
            $option = '<option value=' . $senatorialZone->id . ' data-state_id=' . $senatorialZone->state_id . '>' . $senatorialZone->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='senatorialZoneSelector' name='senatorial_zone' class='form-control' onchange=''>{$list}</select>";
}) !!}


<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('senatorial_zone_id', 'Senatorial Zone:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::senatorialZoneSelect($senatorial_zones) !!}
        </div>
    </div>
</div>

<div class="col-sm-12 form-group text-center">
    <h6>Service Information</h6>
</div>

<!-- File No Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('service_number', 'Service No:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('service_number', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- IPPIS No Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('IPPIS', 'IPPIS No:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('IPPIS', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Cadre Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('cadre', 'CADRE:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('cadre', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- First Appointment Date Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('date_of_first_appointment', 'Date of First Appointment :', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_of_first_appointment', null, ['class' => 'form-control', 'id' => 'first_appointment_date']) !!}
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

<!-- Date of Assumption of Duty Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('assumption_of_duty_date', 'Assumption of Duty Date:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('assumption_of_duty_date', null, ['class' => 'form-control', 'id' => 'assumption_of_duty_date']) !!}
        </div>
    </div>
</div>

<!-- First Arrival Date Field -->
{{-- <div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('first_arrival_date', 'First Arrival Date:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('first_arrival_date', null, ['class' => 'form-control', 'id' => 'first_arrival_date']) !!}
        </div>
    </div>
</div> --}}

<!--  Present Appointment Date Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('date_of_present_appointment', 'Date of Present Appointment :', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_of_present_appointment', null, ['class' => 'form-control', 'id' => 'date_of_present_appointment']) !!}
        </div>
    </div>
</div>

<!--  Date of Confirmation Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('date_of_confirmation', 'Date of Confirmation:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_of_confirmation', null, ['class' => 'form-control', 'id' => 'date_of_confirmation']) !!}
        </div>
    </div>
</div>

<!-- GL Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('gl', 'GL:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('gl', enum_grade_level(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Type of Appointment Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('type_of_appointment', 'Type of Appointment:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('type_of_appointment', enum_type_of_appointment(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

{{-- <!-- Retirement Date By DOB Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('retirement_date_by_dob', 'Retirement Date By DOB:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('retirement_date_by_dob', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Retirement Year By DOB Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('retirement_year_by_dob', 'Retirement Year By DOB:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('retirement_year_by_dob', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- No of Years Remained By DOB Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('no_of_years_remained_by_dob', 'No of Years Remained By DOB:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('no_of_years_remained_by_dob', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Retirement Date By DOFA Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('retirement_date_by_dofa', 'Retirement Date By DOFA:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('retirement_date_by_dofa', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- No of Years Remained By DOFA Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('no_of_years_remained_by_dofa', 'No of Years Remained By DOFA:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('no_of_years_remained_by_dofa', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}

<!-- Current Appointment Field -->
{{-- <div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('current_appointment', 'Current Appointment:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('current_appointment', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}

{{-- @section('footer_scripts')
    <script type="text/javascript">
        $('#first_arrival_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
    </script>
@endsection --}}





<!-- Decorations Field -->
{{-- <div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('decorations', 'Decorations:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('decorations', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}


<!-- File Upload Field -->
{{-- <div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>
</div> --}}


<!-- Remark Field -->
<div class="col-sm-6 form-group ">
    <div class="row">
        {!! Form::label('remark', 'Remark:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Status Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('status', 'Status:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_employee_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<div class="col-sm-12 form-group text-center">
    <h6>Contact Information</h6>
</div>

<!-- Email Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('email', 'Email:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Phone Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('phone', 'Phone:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

{!! Form::hidden('nationality', null) !!}
{!! Form::hidden('state_of_origin', null) !!}
{!! Form::hidden('local_govt_area', null) !!}
{!! Form::hidden('geo_political_zone', null) !!}
{!! Form::hidden('senatorial_zone', null) !!}
<!-- Staff code -->
{!! Form::hidden('staff_code', null, ['class' => 'form-control']) !!}





<!-- Submit Field -->
<div class="col-sm-6 form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg']) !!}
    <a href="{{ route('humanresource.employees.index') }}" class="btn btn-default text-danger">Cancel</a>
</div>



<script>
    window.onload = function() {
        $('#countrySelector').prop('disabled', 'disabled');
        // $('#stateSelector').prop('disabled', 'disabled');
        $('#geoPoliticalZoneSelector').prop('disabled', 'disabled');
        $('#senatorialZoneSelector').prop('disabled', 'disabled');
        $('#localGovtAreaSelector').prop('disabled', 'disabled');

        if ($('#stateSelector').children("option:selected").val()) {
            stateLocalGovtAreaSelector();
            $('#localGovtAreaSelector').prop('disabled', false);
        }



    }

    var profilePicture = document.getElementById('profile_picture');
    profilePicture.addEventListener('change', function(event) {
        if (profilePicture.files[0].size > 150000) {
            alert('File is larger then 150kB! Please reduce size')
            $("#profile_picture").val(null);
        }
    })


    function stateLocalGovtAreaSelector() {
        let stateSelect = $('#stateSelector');
        let localGovtAreaSelect = $('#localGovtAreaSelector');
        let geoPolitcalZoneSelect = $('#geoPoliticalZoneSelector');

        let geo_political_zone_id = stateSelect.children("option:selected").data("geo_political_zone_id");


        $("#geoPoliticalZoneSelector > option").each(function() {
            let geo_zone_id = $(this).val();
            if (geo_political_zone_id == geo_zone_id) {
                $(this).attr('selected', true);
                $(this).removeAttr('disabled').show();
                return false;
            } else {
                $(this).attr('disabled', 'disabled').hide();
            }
        });

        let currentOption;

        $("#localGovtAreaSelector > option").each(function() {
            let id = stateSelect.children("option:selected").val();
            let state_id = $(this).data("state_id");
            let oldValue = $("#localGovtAreaSelector").data('old-value');

            if (id == state_id) {
                $(this).removeAttr('disabled').show();
                $(this).attr('selected', true);
                if (oldValue == $(this).val()) {
                    currentOption = $(this);
                }
            } else {
                $(this).attr('disabled', 'disabled').hide();
            }
        });

        if (currentOption) {
            $("#localGovtAreaSelector > option").each(function() {
                $(this).attr('selected', false);
            });
            currentOption.attr('selected', true);
        }

        localGovtSelector();
    }

    function localGovtSelector() {
        $('#localGovtAreaSelector').prop('disabled', false);
        var localGovtAreaSelect = $('#localGovtAreaSelector');
        var senatorialZoneSelect = $('#senatorialZoneSelector');

        var id = localGovtAreaSelect.children("option:selected").val();
        var senatorial_zone_id = localGovtAreaSelect.children("option:selected").data("senatorial_zone_id");


        $("#senatorialZoneSelector > option").each(function() {
            $(this).attr('selected', false);
        });

        $("#senatorialZoneSelector > option").each(function() {
            let senate_zone_id = $(this).val();
            if (senatorial_zone_id == senate_zone_id) {
                $(this).attr('selected', true);
                $(this).removeAttr('disabled').show();
                return false;
            } else {
                $(this).attr('disabled', 'disabled').hide();
            }
        });

    }

    document.getElementById("employee-form").addEventListener("submit", function(event) {
        event.preventDefault();
        let countrySelect = $('#countrySelector');

        let stateSelect = $('#stateSelector');
        let localGovtAreaSelect = $('#localGovtAreaSelector');
        let geoPolitcalZoneSelect = $('#geoPoliticalZoneSelector');
        var senatorialZoneSelect = $('#senatorialZoneSelector');


        $("[name='nationality']").val(countrySelect.children("option:selected").val());
        $("[name='state_of_origin']").val(stateSelect.children("option:selected").val());
        $("[name='local_govt_area']").val(localGovtAreaSelect.children("option:selected").val());
        $("[name='geo_political_zone']").val(geoPolitcalZoneSelect.children("option:selected").val());
        $("[name='senatorial_zone']").val(senatorialZoneSelect.children("option:selected").val());

        this.submit();
    });
</script>
