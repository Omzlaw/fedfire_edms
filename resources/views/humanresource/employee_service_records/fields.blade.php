<!-- Date Of Entry Made Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('date_of_entry_made', 'Date Of Entry Made:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_of_entry_made', null, ['class' => 'form-control','id'=>'date_of_entry_made']) !!}
        </div>
    </div>
</div>

{{-- @section('footer_scripts')
<script type="text/javascript">
    $('#date_of_entry_made').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection --}}


<!-- Detail Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('detail', 'Detail:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
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
    {{-- <a href="{{ route('humanresource.employeeServiceRecords.index') }}" class="btn btn-default">Cancel</a> --}}
</div>
