<!-- Rank Type Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('rank_type_id', 'Rank Type:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('rank_type_id', modelDropdown($rank_types, 'id', 'description'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Employee Id Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('employee_id', 'Employee Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('employee_id', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}
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
    <a href="{{ route('humanresource.employeeRanks.index') }}" class="btn btn-default">Cancel</a>
</div>
