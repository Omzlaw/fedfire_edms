<!-- Wife Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('wife_name', 'Wife Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('wife_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Wife Birthdate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('wife_birthdate', 'Wife Birthdate:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('wife_birthdate', null, ['class' => 'form-control','id'=>'wife_birthdate']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#wife_birthdate').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Marriage Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('marriage_date', 'Marriage Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('marriage_date', null, ['class' => 'form-control','id'=>'marriage_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#marriage_date').datetimepicker({
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employeeWives.index') }}" class="btn btn-default">Cancel</a>
</div>
