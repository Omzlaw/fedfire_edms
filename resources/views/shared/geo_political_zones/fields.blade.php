<!-- Title Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('title', 'Title:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
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


<!-- Country Id Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('country_id', 'Country:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('country_id', modelDropdown($countries, 'id', 'title', 'nigeria_only'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg']) !!}
    <a href="{{ route('shared.geoPoliticalZones.index') }}" class="btn btn-default">Cancel</a>
</div>
