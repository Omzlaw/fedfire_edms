<!-- Date Entry Made Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('date_entry_made', 'Date Entry Made:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_entry_made', null, ['class' => 'form-control','id'=>'date_entry_made']) !!}
        </div>
    </div>
</div>

{{-- @section('footer_scripts')
<script type="text/javascript">
    $('#date_entry_made').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection --}}


<!-- Salary Scale Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('salary_scale', 'Salary Scale:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('salary_scale', modelDropdown($salary_scales, 'id', 'title'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Basic Salary Pa Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('basic_salary_pa', 'Basic Salary Pa:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('basic_salary_pa', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Inducement Pay Pa Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('inducement_pay_pa', 'Inducement Pay Pa:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('inducement_pay_pa', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Increment Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('increment_date', 'Increment Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('increment_date', null, ['class' => 'form-control','id'=>'increment_date']) !!}
        </div>
    </div>
</div>

{{-- @section('footer_scripts')
<script type="text/javascript">
    $('#increment_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection --}}


<!-- Authority Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('authority', 'Authority:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('authority', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Certified By Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('certified_by', 'Certified By:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('certified_by', ['' => ''], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}

<!-- Certified By Field -->
{!! Form::hidden('certified_by', Auth::user()->id, ['class' => 'form-control']) !!}


<!-- Employee Id Field -->
{!! Form::hidden('employee_id', Session::get('employee_id'), ['class' => 'form-control']) !!}


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
    {{-- <a href="{{ route('humanresource.employeeEmolumentRecords.index') }}" class="btn btn-default">Cancel</a> --}}
</div>
