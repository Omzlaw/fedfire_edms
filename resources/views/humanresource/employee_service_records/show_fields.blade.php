{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeServiceRecord->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('date_of_entry_made', 'Date Of Entry Made:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeServiceRecord->date_of_entry_made )->format('d/m/y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('detail', 'Detail:') !!}</th>
    <td>{{ $employeeServiceRecord->detail }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('certified_by', 'Certified By:') !!}</th>
    @if (isset($employeeServiceRecord->certifiedBy))
    <td>{{ $employeeServiceRecord->certifiedBy->name }}</td>
    @else
    ---
    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeServiceRecord->status) }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeServiceRecord->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeServiceRecord->updated_at }}</td>
</tr> --}}


