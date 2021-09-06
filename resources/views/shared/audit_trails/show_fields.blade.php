{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $auditTrail->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('description', 'Description:') !!}</th>
    <td>{{ $auditTrail->description }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('user_id', 'User:') !!}</th>
    <td>{{ $auditTrail->user->name}}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $auditTrail->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $auditTrail->updated_at }}</td>
</tr>


