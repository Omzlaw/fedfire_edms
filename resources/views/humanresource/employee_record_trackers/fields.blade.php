<!-- Employee Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('employee_id', 'Employee Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('employee_id', ['' => ''], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['class' => 'form-control']) !!}
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


<!-- Has Profile Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('has_profile', 'Has Profile:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('has_profile', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Has Education Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('has_education', 'Has Education:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('has_education', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employeeRecordTrackers.index') }}" class="btn btn-default">Cancel</a>
</div>
