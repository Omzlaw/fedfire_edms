{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $state->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('title', 'Title:') !!}</th>
    <td>{{ $state->title }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('description', 'Description:') !!}</th>
    <td>{{ $state->description }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $state->status) }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('geo_political_zone_id', 'Geo-Politcal Zone:') !!}</th>
    @if (isset($state->geoPoliticalZone->title))
        <td>{{ $state->geoPoliticalZone->title }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('country_id', 'Country:') !!}</th>
    <td>{{ $state->country->title }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $state->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $state->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $state->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $state->updated_at }}</td>
</tr> --}}


