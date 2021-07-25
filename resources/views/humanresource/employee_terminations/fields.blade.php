

<!-- Termination Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('termination_id', 'Termination Type:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('termination_id', modelDropdown($termination_types, 'id', 'title'), null, ['class' => 'form-control']) !!}
            <button  class="model_modal_button" data-route="{{ route('humanresource.terminationTypes.create') }}" type="button" data-toggle="modal"  data-target="#model_modal">Add new</button>
        </div>
    </div>
</div>


<!-- Employee Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('employee_id', 'Employee:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('employee_id', modelDropdown($employees, 'id', 'staff_code'), null, ['class' => 'form-control']) !!}
            <button  class="model_modal_button" data-route="{{ route('humanresource.employees.create') }}" type="button" data-toggle="modal"  data-target="#model_modal">Add new</button>
        </div>
    </div>
</div>


<!-- File Upload Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>

</div>


<!-- Even Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('even_date', 'Even Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('even_date', null, ['class' => 'form-control','id'=>'even_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#even_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Is Pensionable Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('is_pensionable', 'Is Pensionable:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('is_pensionable', enum_yes_no(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Pension Amount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('pension_amount', 'Pension Amount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('pension_amount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Pension Start Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('pension_start_date', 'Pension Start Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('pension_start_date', null, ['class' => 'form-control','id'=>'pension_start_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#pension_start_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Gratuity Amount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('gratuity_amount', 'Gratuity Amount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('gratuity_amount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Contract Gratuity Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('contract_gratuity', 'Contract Gratuity:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('contract_gratuity', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Estate Gratuity Amount Paid Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('estate_gratuity_amount_paid', 'Estate Gratuity Amount Paid:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('estate_gratuity_amount_paid', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Widow Pension Amount Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('widow_pension_amount', 'Widow Pension Amount:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('widow_pension_amount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Widow Pension Start Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('widow_pension_start_date', 'Widow Pension Start Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('widow_pension_start_date', null, ['class' => 'form-control','id'=>'widow_pension_start_date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#widow_pension_start_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Orphan Pension Amonut Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('orphan_pension_amonut', 'Orphan Pension Amonut:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('orphan_pension_amonut', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Nigeria Total Service Years Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('nigeria_total_service_years', 'Nigeria Total Service Years:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('nigeria_total_service_years', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Nigeria Total Service Months Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('nigeria_total_service_months', 'Nigeria Total Service Months:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('nigeria_total_service_months', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Nigeria Total Service Days Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('nigeria_total_service_days', 'Nigeria Total Service Days:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('nigeria_total_service_days', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Total Naria Salary Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('total_naria_salary', 'Total Naria Salary:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('total_naria_salary', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Summary Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('summary', 'Summary:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('summary', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Remark Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('remark', null, ['class' => 'form-control']) !!}
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


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('humanresource.employeeTerminations.index') }}" class="btn btn-default">Cancel</a>
</div>
