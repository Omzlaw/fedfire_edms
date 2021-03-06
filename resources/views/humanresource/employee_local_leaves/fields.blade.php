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

{!! Form::hidden('checked_by', Auth::user()->id, ['class' => 'form-control']) !!}


<!-- File Upload Field -->
{{--<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>

</div>--}}


<!-- No Of Days Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('no_of_days', 'No Of Days:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('no_of_days', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- File Page No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_page_no', 'File Page No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('file_page_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Leaver Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('leave_type_id', 'Leave Type:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('leave_type_id', modelDropdown($leave_types, 'id', 'title'), null, ['class' => 'form-control']) !!}
            {{-- <button  class="model_modal_button" data-route="{{ route('humanresource.leaveTypes.create') }}" type="button" data-toggle="modal"  data-target="#model_modal">Add new</button> --}}
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

{{-- @section('footer_scripts')
<script type="text/javascript">
    $('#from_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection --}}


<!-- To Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('to_date', 'To Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('to_date', null, ['class' => 'form-control','id'=>'to_date']) !!}
        </div>
    </div>
</div>

{{-- @section('footer_scripts')
<script type="text/javascript">
    $('#to_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection --}}


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


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg save-button']) !!}
{{-- <a href="" class="btn btn-default modal-cancel">Cancel</a> --}}
</div>
