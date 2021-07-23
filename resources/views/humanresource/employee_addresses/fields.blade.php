<!-- Address Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('address', 'Address:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- State Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('state_id', 'State Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('state_id', modelDropdown($states), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- Country Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('country_id', 'Country Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('country_id', modelDropdown($countries), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


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
<div class="form-group">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employeeAddresses.index') }}" class="btn btn-default">Cancel</a>
</div>
