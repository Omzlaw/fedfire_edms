{{-- <!-- File Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_name', 'File Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('file_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div --}}


<!-- File Type Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_type_id', 'File Type:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('file_type_id', modelDropdown($file_types, 'id', 'title'), null, ['class' => 'form-control']) !!}
            <button id="model_modal_button" data-route="{{ route('shared.fileTypes.create') }}" type="button" data-toggle="modal"  data-target="#model_modal">Add new</button>
        </div>
    </div>
</div>


<!-- Staff No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('staff_no', 'Staff No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('staff_no', modelDropdown($employees, 'id', 'staff_code'), null, ['class' => 'form-control']) !!}
            <button id="model_modal_button" data-route="{{ route('humanresource.employees.create') }}" type="button" data-toggle="modal"  data-target="#model_modal">Add new</button>
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


<!-- Remark Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- File Upload Field -->
<div class="form-group">
    <div class="row"> 
        {!! Form::label('file_upload', 'File Upload:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('file_upload[]', array('multiple' => true, 'class' => 'form-control')) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shared.fileDirectories.index') }}" class="btn btn-default">Cancel</a>
</div>
