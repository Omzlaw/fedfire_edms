{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeAddress->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('address', 'Address:') !!}</th>
    <td>{{ $employeeAddress->address }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('address_type', 'Permanent/Residential:') !!}</th>
    <td>{{ get_enum_value('enum_address_type', $employeeAddress->address_type) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('country_id', 'Country:') !!}</th>
    <td>{{ $employeeAddress->country->title }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('state_id', 'State:') !!}</th>
    <td>{{ $employeeAddress->state->title }}</td>
</tr>

<tr>
    <th scopre="row">{!! Form::label('local_govt_area_id', 'Local Govt Area:') !!}</th>
    @if (isset($employeeAddress->localGovtArea->title))
        <td>{{ $employeeAddress->localGovtArea->title }}</td>
    @else
        <td></td>
    @endif
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeAddress->employee->getFullName() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $employeeAddress->file_upload }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeAddress->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeAddress->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeAddress->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeAddress->updated_by }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeAddress->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeAddress->updated_at }}</td>
</tr> --}}
