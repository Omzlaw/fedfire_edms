<!-- Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('name', 'Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Gender Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('gender', 'Gender:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('gender', ['1' => 'Female', '2' => 'Male'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Birthday Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('birthday', 'Birthday:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('birthday', null, ['class' => 'form-control','id'=>'birthday']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#birthday').datetimepicker({
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
    <a href="{{ route('humanresource.employeeChildrens.index') }}" class="btn btn-default">Cancel</a>
</div>
