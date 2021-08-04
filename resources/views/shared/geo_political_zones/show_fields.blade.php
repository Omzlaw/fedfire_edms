{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $geoPoliticalZone->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('title', 'Title:') !!}</th>
    <td>{{ $geoPoliticalZone->title }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $geoPoliticalZone->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('country_id', 'Country:') !!}</th>
    <td>{{ $geoPoliticalZone->country->title }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $geoPoliticalZone->created_at }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $senatorialZone->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $senatorialZone->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $geoPoliticalZone->updated_at }}</td>
</tr> --}}


