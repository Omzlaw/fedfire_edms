<!-- Area Of Service Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('area_of_service', 'Area Of Service:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('area_of_service', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Service No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('service_no', 'Service No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('service_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Last Unit Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('last_unit', 'Last Unit:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('last_unit', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


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
<div class="form-group">
    <div class="row">
        {!! Form::label('employee_id', 'Employee Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('employee_id', modelDropdown($employees), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- File Upload Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>
</div <div class="clearfix">
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
        })
</script>
@endsection


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employeeForceServices.index') }}" class="btn btn-default">Cancel</a>
</div>
