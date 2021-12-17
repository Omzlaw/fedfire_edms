<!-- Date Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('date', 'Date:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date', null, ['class' => 'form-control','id'=>'date']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endsection


<!-- Home Place Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('home_place', 'Home Place:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('home_place', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Proof Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('proof', 'Proof:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('proof', null, ['class' => 'form-control']) !!}
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


<!-- Checked By Field -->
{!! Form::hidden('checked_by', Auth::user()->id, ['class' => 'form-control']) !!}


<!-- Employee Id Field -->
{!! Form::hidden('employee_id', Session::get('employee_id'), ['class' => 'form-control']) !!}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg save-button']) !!}
    {{-- <a href="{{ route('humanresource.employeeBirthParticulars.index') }}" class="btn btn-default">Cancel</a> --}}
</div>
