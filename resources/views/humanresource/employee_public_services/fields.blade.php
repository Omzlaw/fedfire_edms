<!-- Employer Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('employer_name', 'Employer Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('employer_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- From Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('from_date', 'From Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('from_date', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- To Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('to_date', 'To Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('to_date', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- File Page Ref Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_page_ref', 'File Page Ref:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('file_page_ref', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Employee Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('employee_id', 'Employee Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('employee_id', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- File Upload Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload_id', 'File Upload Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('file_upload_id', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Total Years Served Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('total_years_served', 'Total Years Served:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('total_years_served', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Total Paid Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('total_paid', 'Total Paid:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('total_paid', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Remark Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Checked By Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('checked_by', 'Checked By:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('checked_by', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Created By Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('created_by', 'Created By:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('created_by', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Updated By Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('updated_by', 'Updated By:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('updated_by', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employeePublicServices.index') }}" class="btn btn-default">Cancel</a>
</div>
