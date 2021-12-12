{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeService->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('present_department', 'Present Department:') !!}</th>
    <td>{{ get_enum_value('enum_department', $employeeService->present_department) }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('present_station', 'Present Station:') !!}</th>
    <td>{{ $employeeService->present_station }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('state', 'State:') !!}</th>
    <td>{{ $employeeService->state }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('zone', 'Zone:') !!}</th>
    <td>{{ get_enum_value('enum_zone', $employeeService->zone) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('region', 'Region:') !!}</th>
    @if (isset($employeeService->regionRelation->title))
        <td>{{ $employeeService->regionRelation->title }}</td>
    @else
        <td></td>
    @endif

</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeService->status) }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeService->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeService->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeService->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeService->updated_at }}</td>
</tr> --}}
