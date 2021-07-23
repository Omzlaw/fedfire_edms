<!-- School Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('school_name', 'School Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('school_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Certificate Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('certificate_id', 'Certificate Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('certificate_id', modelDropdown($certificate_types), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- School Type Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('school_type_id', 'School Type Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('school_type_id', modelDropdown($school_types), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- From Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('from_date', 'From Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('from_date', null, ['class' => 'form-control','id'=>'from_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#from_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- To Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('to_date', 'To Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('to_date', null, ['class' => 'form-control','id'=>'to_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#to_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection

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


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Remark Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Checked At Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('checked_at', 'Checked At:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('checked_at', null, ['class' => 'form-control','id'=>'checked_at']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#checked_at').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employeeEducations.index') }}" class="btn btn-default">Cancel</a>
</div>
