<!-- Title Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('title', 'Title:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


{{-- <!-- Description Field --> --}}
{{-- <div class="form-group ">
    <div class="row">
        {!! Form::label('description', 'Description:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}


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
            {!! Form::select('country_id', modelDropdown($countries, 'id', 'title'), null, ['class' => 'form-control', 'onchange' => 'countryGeoPoliticalZoneSelector()', 'id' => 'countrySelector']) !!}
        </div>
    </div>
</div>

<!-- Geo_Political_Zone Id Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('geo_political_zone_id', 'Geo-Political Zone:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('geo_political_zone_id', modelDropdown($geo_political_zones, 'id', 'title'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}

{!! Form::macro('GeoPoliticalZoneSelect', function($geoPoliticalZoneModel)
{
    $geoPoliticalZones = $geoPoliticalZoneModel::orderBy('title')->get();
    $options = array();
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    foreach ($geoPoliticalZones as $geoPoliticalZone) {

        $option = '<option value=' . $geoPoliticalZone->id . ' data-country_id=' . $geoPoliticalZone->country_id . '>' . $geoPoliticalZone->title . '</option>';
        $options[] = $option;
    }
    $list = implode('', $options);
    return "<select id='GeoPoliticalZoneSelector' name='geo_political_zone_id' class='form-control'>{$list}</select>";
}); !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('geo_political_zone_id', 'Geo-Political Zone:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::GeoPoliticalZoneSelect($geo_political_zones) !!}
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg']) !!}
    <a href="{{ route('shared.states.index') }}" class="btn btn-default">Cancel</a>
</div>


<script>

    window.onload = function () { 
        $('#GeoPoliticalZoneSelector').prop('disabled', 'disabled');
    }

    function countryGeoPoliticalZoneSelector(event) {

        var countrySelect = $('#countrySelector');
        var geoPolitcalZoneSelect = $('#GeoPoliticalZoneSelector');
        var id = countrySelect.children("option:selected").val();
        $("#GeoPoliticalZoneSelector > option").each(function() {
            let country_id = $(this).data("country_id");
            if (id == country_id) {
                $(this).removeAttr('disabled').show();
            } else {
                $(this).attr('disabled', 'disabled').hide();
            }
        });
        geoPolitcalZoneSelect.prop('disabled', false);
    }

</script>