{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $localGovtArea->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('title', 'Title:') !!}</th>
    <td>{{ $localGovtArea->title }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('description', 'Description:') !!}</th>
    <td>{{ $localGovtArea->description }}</td>
</tr> --}}

<tr>
    <th scopre="row">{!! Form::label('senatorial_zone_id', 'Senatorial Zone:') !!}</th>
    @if (isset($localGovtArea->senatorialZone->title))
        <td>{{ $localGovtArea->senatorialZone->title }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('state_id', 'State:') !!}</th>
    @if (isset($localGovtArea->state->title))
        <td>{{ $localGovtArea->state->title }}</td>
    @else
        <td></td>
    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $localGovtArea->status) }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $localGovtArea->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $localGovtArea->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $localGovtArea->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $localGovtArea->updated_at }}</td>
</tr> --}}
