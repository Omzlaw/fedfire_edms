<!-- File No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_no', 'File No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('file_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- First Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('first_name', 'First Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Last Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('last_name', 'Last Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Gender Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('gender', 'Gender:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('gender', enum_gender(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Birthdate Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('birthdate', 'Birthdate:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('birthdate', null, ['class' => 'form-control','id'=>'birthdate']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#birthdate').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Place Of Birth Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('place_of_birth', 'Place Of Birth:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('place_of_birth', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Birth Certificate Upload Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('birth_certificate_upload', 'Birth Certificate Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::file('birth_certificate_upload') !!}
        </div>
    </div>
</div>


<!-- Marital Status Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('marital_status_id', 'Marital Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('marital_status_id', enum_marital_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- First Appointment Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('first_appointment_date', 'First Appointment Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('first_appointment_date', null, ['class' => 'form-control','id'=>'first_appointment_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#first_appointment_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- First Arrival Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('first_arrival_date', 'First Arrival Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('first_arrival_date', null, ['class' => 'form-control','id'=>'first_arrival_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#first_arrival_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Nationality Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('nationality', 'Nationality:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('nationality', modelDropdown($countries, 'id', 'title'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Decorations Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('decorations', 'Decorations:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('decorations', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div

<!-- Staff code -->
    {!! Form::hidden('staff_code', null, ['class' => 'form-control']) !!}

<!-- File Upload Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
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


<!-- Email Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('email', 'Email:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Phone Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('phone', 'Phone:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Current Appointment Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('current_appointment', 'Current Appointment:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('current_appointment', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employees.index') }}" class="btn btn-default">Cancel</a>
</div>
