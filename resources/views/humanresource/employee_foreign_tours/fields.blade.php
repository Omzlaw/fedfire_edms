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
<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>

</div>


<!-- Leaver Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('leaver_id', 'Leave Type:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('leaver_id', modelDropdown($leave_types), null, ['class' => 'form-control']) !!}
            <button  class="model_modal_button" data-route="{{ route('humanresource.leaveTypes.create') }}" type="button" data-toggle="modal"  data-target="#model_modal">Add new</button>
        </div>
    </div>
</div>


<!-- From Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('from_date', 'From Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('from_date', null, ['class' => 'form-control','id'=>'from_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#from_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- To Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('to_date', 'To Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('to_date', null, ['class' => 'form-control','id'=>'to_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#to_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
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


<!-- Date Started Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('date_started', 'Date Started:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_started', null, ['class' => 'form-control','id'=>'date_started']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#date_started').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Tour Gazette No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('tour_gazette_no', 'Tour Gazette No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('tour_gazette_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Tour Length Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('tour_length', 'Tour Length:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('tour_length', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Leave Due Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('leave_due_date', 'Leave Due Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('leave_due_date', null, ['class' => 'form-control','id'=>'leave_due_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#leave_due_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Leave Departure Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('leave_departure_date', 'Leave Departure Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('leave_departure_date', null, ['class' => 'form-control','id'=>'leave_departure_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#leave_departure_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Leave Gazette No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('leave_gazette_no', 'Leave Gazette No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('leave_gazette_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Return Due Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('return_due_date', 'Return Due Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('return_due_date', null, ['class' => 'form-control','id'=>'return_due_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#return_due_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Granted Extension Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('granted_extension_date', 'Granted Extension Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('granted_extension_date', null, ['class' => 'form-control','id'=>'granted_extension_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#granted_extension_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Duty Resumption Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('duty_resumption_date', 'Duty Resumption Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('duty_resumption_date', null, ['class' => 'form-control','id'=>'duty_resumption_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#duty_resumption_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Passed To Uk Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('passed_to_uk', 'Passed To Uk:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('passed_to_uk', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Passed From Uk Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('passed_from_uk', 'Passed From Uk:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('passed_from_uk', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Resident Months Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('resident_months', 'Resident Months:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('resident_months', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Resident Days Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('resident_days', 'Resident Days:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('resident_days', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Leave Months Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('leave_months', 'Leave Months:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('leave_months', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Leave Days Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('leave_days', 'Leave Days:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('leave_days', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employeeForeignTours.index') }}" class="btn btn-default">Cancel</a>
</div>
