{!! Form::hidden('employee_id', Session::get('employee_id'), ['class' => 'form-control']) !!}

<!-- Present Department Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('present_department', 'Present Department:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('present_department', enum_department(), null, ['id' => 'present_department', 'onchange' => 'makeStationSubMenu(this.value)', 'class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Present Station Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('present_station', 'Present Station:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('present_station', [-1 => 'Choose Station...'], null, ['id' => 'present_station', 'class' => 'form-control']) !!}
        </div>
    </div>
</div>

<!-- Location Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('location', 'Location:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('location', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>



<!-- State Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('state', 'State:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('state', modelDropdown($states, 'id', 'title'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}

<!-- State Field -->
{{-- {!! Form::macro('stateSelect', function ($stateModel) {
    $states = $stateModel
        ::orderBy('title')->where('country_id', '=', '160')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('state');
    foreach ($states as $state) {
        if ($value == $state->id) {
            $option = '<option selected value=' . $state->id . ' data-country_id=' . $state->country_id . ' data-geo_political_zone_id=' . $state->geo_political_zone_id . '>' . $state->title . '</option>';
            $options[] = $option;
        } else {
            $option = '<option value=' . $state->id . ' data-country_id=' . $state->country_id . ' data-geo_political_zone_id=' . $state->geo_political_zone_id . '>' . $state->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='stateSelector' name='state' class='form-control' onchange='stateRegionSelector()'>{$list}</select>";
}) !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('state_id', 'State of Origin:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::stateSelect($states) !!}
        </div>
    </div>
</div> --}}



<!-- Region Field -->
{{-- <div class="form-group">
    <div class="row">
        {!! Form::label('region', 'Region:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('region', modelDropdown($geo_political_zones, 'id', 'title'), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}


<!-- Geo-Political Zone Field -->
{!! Form::macro('geoPoliticalZoneSelect', function ($geoPoliticalZoneModel) {
    $geoPoliticalZones = $geoPoliticalZoneModel::orderBy('title')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = Form::getValueAttribute('region');
    foreach ($geoPoliticalZones as $geoPoliticalZone) {
        if ($value == $geoPoliticalZone->id) {
            $option = '<option selected value=' . $geoPoliticalZone->id . ' data-country_id=' . $geoPoliticalZone->country_id . '>' . $geoPoliticalZone->title . '</option>';
            $options[] = $option;
        } else {
            $option = '<option value=' . $geoPoliticalZone->id . ' data-country_id=' . $geoPoliticalZone->country_id . '>' . $geoPoliticalZone->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='geoPoliticalZoneSelector' name='region' class='form-control' onchange=''>{$list}</select>";
}) !!}


<div class="form-group">
    <div class="row">
        {!! Form::label('region', 'Region:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::geoPoliticalZoneSelect($geo_political_zones) !!}
        </div>
    </div>
</div>

<!-- Zone Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('zone', 'Zone:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('zone', enum_zone(), null, ['id' => 'zone', 'class' => 'form-control', 'onchange' => 'makeSubmenu(this.value)']) !!}
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        {!! Form::label('state', 'State:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            <select id="zoneSelect" disabled name="state" class="form-control">
                <option value="" disabled selected>Choose state under selected zone</option>
                <option></option>
            </select>
        </div>
    </div>
</div>

<!-- Status Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('status', 'Status:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::select('status', enum_status(), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


{{-- <!-- Created By Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('created_by', 'Created By:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::number('created_by', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>


<!-- Updated By Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('updated_by', 'Updated By:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('updated_by', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> --}}


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn secondary-color-bg save-button']) !!}
    {{-- <a href="{{ route('humanresource.employeeServices.index') }}" class="btn btn-default">Cancel</a> --}}
</div>


<script>
    window.onload = function() {
        $('#present_station').prop('disabled', 'disabled');
        let current_department = $('#present_department').val();
        let current_zone = $('#zone').val();
        if ($('#present_department').val() > -1) {
            makeStationSubMenu(current_department);
        }

        if ($('#zone').val() > -1) {
            makeSubmenu(current_zone);
        }


    }


    let subcategory = {
        1: ["Benue", "Plateau", "Nasarawa"],
        2: ["Kaduna", "Katsina"],
        3: ["Bauchi", "Yobe", "Borno"],
        4: ["Enugu", "Anambra", "Ebonyi"],
        5: ["Akwa-Ibom", "Rivers", "Calabar"],
        6: ["Lagos", "Ogun", "Oyo"],
        7: ["Niger", "Kogi", "Kwara"],
        8: ["Sokoto", "Kabbi", "Zamfara"],
        9: ["Adamawa", "Taraba", "Gombe"],
        10: ["Imo", "Abia"],
        11: ["Delta", "Edo", "Bayelsa"],
        12: ["Osun", "Ondo", "Ekiti"],
        13: ["Kano", "Jigawa"],
        14: ["Abuja"],
        15: ["HQ"]
    }

    let stationSubCategory = {
        1: ["Protocol",
            "CGF Staff",
            "Legal Unit",
            "Corporate Services",
            "Petty Contract",
            "Works"
        ],
        2: ["Admin & Supplies",
            "Finance & Account",
            "Expenditure",
            "General Administration",
            "Registry",
            "Appointment, Promotion & Discipline(APD)",
            "Special Duties",
            "Staff Welfare & Pension",
            "Training & Development",
            "Sport",
            "Logistics",
            "Security / Provost",
            "Store & Stock Verifier",
            "Salary",
            "Account",
            "Internal Audit",
            "Clinic",
            "Maintenance / Works",
            "FFS Chapel & Mosque"
        ],
        3: ["Federal Operations",
            "Abuja Command",
            "CO Operations– Abuja Command",
            "Office",
            "Ambulance Unit",
            "Special Emergency",
            "CO Laison Office Abuja",
            "Security & Provost Unit",
            "Data Management",
            "Logistics / Workshop"
        ],
        4: ["Budget", "Procurement"],
        5: ["Inspectorate",
            "Investigations",
            "Enforcement",
            "FOWA School Outreach",
            "Special Duties",
            "PED",
            "MDAs"
        ],
        6: ["PPRS", "ICT"],
        7: ["Academy", "Band Unit"]
    }

    function makeSubmenu(value) {
        $("#zoneSelect").prop('disabled', false);
        if (value.length == 0) document.getElementById("zoneSelect").innerHTML = "<option></option>";
        else {
            let options = "";
            for (categoryId in subcategory[value]) {
                options += `<option value=${subcategory[value][categoryId]}>` + subcategory[value][categoryId] +
                    "</option>";
            }
            document.getElementById("zoneSelect").innerHTML = options;
        }
    }

    function makeStationSubMenu(value) {
        $("#present_station").prop('disabled', false);
        if (value.length == 0) document.getElementById("present_station").innerHTML = "<option></option>";
        else {
            let options = "";
            for (categoryId in stationSubCategory[value]) {
                options += `<option value=${stationSubCategory[value][categoryId]}>` + stationSubCategory[value][
                    categoryId
                ] + "</option>";
            }
            document.getElementById("present_station").innerHTML = options;
        }
    }


    // function stateRegionSelector() {
    //     let stateSelect = $('#stateSelector');
    //     let geoPolitcalZoneSelect = $('#geoPoliticalZoneSelector');
    //     geoPolitcalZoneSelect.prop("selectedIndex", 0).val();
    //     let geo_political_zone_id = stateSelect.children("option:selected").data("geo_political_zone_id");

    //     $("#geoPoliticalZoneSelector > option").each(function() {
    //         let geo_zone_id = $(this).val();
    //         if (geo_political_zone_id == geo_zone_id) {
    //             // $(this).attr('selected', true);
    //             $(this).removeAttr('disabled').show();
    //         } else {
    //             $(this).attr('disabled', 'disabled').hide();
    //             // $(this).attr('selected', false);
    //         }
    //     });

    //     geoPolitcalZoneSelect.prop('disabled', false);

    // }
</script>
