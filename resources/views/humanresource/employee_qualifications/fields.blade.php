<!-- Qualification Type Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('qualification_type_id', 'Qualification Type:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('qualification_type_id', modelDropdown($qualificationTypes, 'id', 'title'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Qualification Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('qualification_name', 'Qualification Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('qualification_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Date Obtained Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('date_obtained', 'Date Obtained:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_obtained', null, ['class' => 'form-control','id'=>'date_obtained']) !!}
        </div>
    </div>
</div>

{{-- @section('footer_scripts')
<script type="text/javascript">
    $('#date_obtained').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection --}}


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

{!! Form::hidden('checked_by', Auth::user()->id, ['class' => 'form-control']) !!}


<!-- File Upload Field -->
{{--<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>

</div>--}}


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Remark Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg save-button']) !!}
    {{-- <a href="#" class="btn btn-default modal-cancel">Cancel</a> --}}
</div>
