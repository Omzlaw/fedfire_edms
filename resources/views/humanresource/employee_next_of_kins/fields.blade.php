<!-- Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('name', 'Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Address Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('address', 'Address:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Relationship Id Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('relationship_id', 'Relationship:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('relationship_id', modelDropdown($relationship), null, ['class' => 'form-control']) !!}
            <button  class="model_modal_button" data-route="{{ route('shared.relationships.create') }}" type="button" data-toggle="modal"  data-target="#model_modal">Add new</button>
        </div>
    </div>
</div> --}}


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
{{--<div class="form-group">
    <div class="row">
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload') !!}
        </div>
    </div>

</div>--}}


<!-- Remark Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {{-- <a href="#" class="btn btn-default modal-cancel">Cancel</a> --}}
</div>
