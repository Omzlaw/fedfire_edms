<!-- File Name Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_name', 'File Name:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('file_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- File Type Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_type_id', 'File Type Id:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('file_type_id', ['' => ''], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


<!-- File Ext Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('file_ext', 'File Ext:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('file_ext', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Staff No Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('staff_no', 'Staff No:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('staff_no', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</>


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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shared.fileDirectories.index') }}" class="btn btn-default">Cancel</a>
</div>
