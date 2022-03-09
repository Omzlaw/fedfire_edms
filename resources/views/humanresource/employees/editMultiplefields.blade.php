<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('rank_type_id', 'Rank:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('rank_type_id', modelDropdown($rank_types, 'id', 'description'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Status Field -->
<div class="col-sm-6 form-group">
    <div class="row">
        {!! Form::label('status', 'Status:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_employee_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

{!! Form::hidden('ids', $ids, ['class' => 'form-control']) !!}

<!-- Submit Field -->
<div class="col-sm-6 form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg']) !!}
    <a href="{{ route('humanresource.employees.index') }}" class="btn btn-default text-danger">Cancel</a>
</div>
