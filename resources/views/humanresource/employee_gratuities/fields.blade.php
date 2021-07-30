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
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>
</div> --}}


<!-- File Page No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_page_no', 'File Page No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('file_page_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Payment Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('payment_date', 'Payment Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('payment_date', null, ['class' => 'form-control','id'=>'payment_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#payment_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


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
        })
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
        })
</script>
@endsection


<!-- Years Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('years', 'Years:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('years', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Months Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('months', 'Months:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('months', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Days Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('days', 'Days:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('days', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Rate Per Annum Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('rate_per_annum', 'Rate Per Annum:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('rate_per_annum', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Amount Paid Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('amount_paid', 'Amount Paid:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('amount_paid', null, ['class' => 'form-control']) !!}
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


<!-- Checked At Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('checked_at', 'Checked At:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('checked_at', null, ['class' => 'form-control','id'=>'checked_at']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#checked_at').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary save-button']) !!}
{{-- <a href="" class="btn btn-default modal-cancel">Cancel</a> --}}
</div>
