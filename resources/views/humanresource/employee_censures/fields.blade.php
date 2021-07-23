<!-- Title Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('title', 'Title:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Summary Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('summary', 'Summary:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('summary', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Date Recieved Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('date_recieved', 'Date Recieved:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('date_recieved', null, ['class' => 'form-control','id'=>'date_recieved']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#date_recieved').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Employee Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('employee_id', 'Employee:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
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


<!-- Compiled At Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('compiled_at', 'Compiled At:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('compiled_at', null, ['class' => 'form-control','id'=>'compiled_at']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#compiled_at').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employeeCensures.index') }}" class="btn btn-default">Cancel</a>
</div>
