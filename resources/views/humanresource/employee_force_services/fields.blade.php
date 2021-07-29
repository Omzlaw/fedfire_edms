<!-- Area Of Service Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('area_of_service', 'Area Of Service:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('area_of_service', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Service No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('service_no', 'Service No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('service_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Last Unit Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('last_unit', 'Last Unit:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('last_unit', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Reason For Leaving Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('reason_for_leaving', 'Reason For Leaving:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('reason_for_leaving', null, ['class' => 'form-control']) !!}
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
{{--<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>

</div>--}}


<!-- Remark Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Date Updated Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('date_updated', 'Date Updated:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_updated', null, ['class' => 'form-control','id'=>'date_updated']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#date_updated').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
{{-- <a href="" class="btn btn-default modal-cancel">Cancel</a> --}}
</div>
