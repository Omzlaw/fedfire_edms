<!-- Address Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('address', 'Address:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Address Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('address_type', 'Permanent/Residential:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('address_type', enum_address_type(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Country Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('country_id', 'Country:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('country_id', modelDropdown($countries, 'id', 'title', 'nigeria_only'), null, ['id' => 'countrySelector', 'class' => 'form-control', 'onchange' => 'countryStateSelector()']) !!}
        </div>
    </div>
</div>

<!-- State Id Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('state_id', 'State:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('state_id', modelDropdown($states, 'id', 'title'), null, ['id' => 'stateSelector', 'class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}
{!! Form::macro('stateSelect', function ($statesModel) {
    $states = $statesModel
        ::orderBy('title')->where('country_id', '=', '160')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('state_id');
    foreach ($states as $state) {
        if($value == $state->id){
            $option = '<option selected value=' . $state->id . ' data-country_id=' . $state->country_id . '>' . $state->title . '</option>';
             $options[] = $option;
        }
        else {
            $option = '<option value=' . $state->id . ' data-country_id=' . $state->country_id . '>' . $state->title . '</option>';
            $options[] = $option;
        }

    }
    $list = implode('', $options);
    return "<select id='stateSelector' name='state_id' class='form-control' onchange='stateLocalGovtAreaSelector()'>{$list}</select>";
}) !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('state_id', 'State:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::stateSelect($states) !!}
        </div>
    </div>
</div>

{!! Form::macro('localGovtAreaSelect', function ($localGovtAreaModel) {
    $localGovtAreas = $localGovtAreaModel::orderBy('title')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('local_govt_area_id');
    foreach ($localGovtAreas as $localGovtArea) {
        if($value == $localGovtArea->id){
            $option = '<option selected value=' . $localGovtArea->id . ' data-state_id=' . $localGovtArea->state_id . '>' . $localGovtArea->title . '</option>';
            $options[] = $option;
        }
        else {
            $option = '<option value=' . $localGovtArea->id . ' data-state_id=' . $localGovtArea->state_id . '>' . $localGovtArea->title . '</option>';
            $options[] = $option;
        }

    }
    $list = implode('', $options);
    return "<select id='localGovtAreaSelector' name='local_govt_area_id' class='form-control'>{$list}</select>";
}) !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('local_govt_area_id', 'Local Govt Area:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::localGovtAreaSelect($local_govt_areas) !!}
        </div>
    </div>
</div>



<!-- Employee Id Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('employee_id', 'Employee:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('employee_id', modelDropdown($employees, 'id', 'staff_code'), null, ['class' => 'form-control']) !!}
            <button  class="model_modal_button" data-route="{{ route('humanresource.employees.create') }}" type="button" data-toggle="modal"  data-target="#model_modal">Add new</button>
        </div>
    </div>
</div> --}}
{!! Form::hidden('employee_id', Session::get('employee_id'), ['class' => 'form-control']) !!}


<!-- File Upload Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>

</div> --}}


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Remark Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('remark', 'Remark:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg save-button']) !!}
    {{-- <a href="#" class="btn btn-default modal-cancel">Cancel</a> --}}
</div>

<script>
    window.onload = function() {
        $('#stateSelector').prop('disabled', 'disabled');
        if ($('#countrySelector').children("option:selected").val()) {
            $('#stateSelector').prop('disabled', false);
        }
        $('#localGovtAreaSelector').prop('disabled', 'disabled');
        if ($('#stateSelector').children("option:selected").val()) {
            $('#localGovtAreaSelector').prop('disabled', false);
        }
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

    function stateLocalGovtAreaSelector(event) {

        var stateSelect = $('#stateSelector');
        var localGovtAreaSelect = $('#localGovtAreaSelector');
        localGovtAreaSelect.prop("selectedIndex", 0).val();
        var id = $(stateSelect).children("option:selected").val();
        $("#localGovtAreaSelector > option").each(function() {
            let state_id = $(this).data("state_id");
            if (id == state_id) {
                $(this).removeAttr('disabled').show();
            } else {
                $(this).attr('disabled', 'disabled').hide();
            }
        });
        localGovtAreaSelect.prop('disabled', false);
    }
</script>
