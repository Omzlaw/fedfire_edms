<tr>
    <th scopre="row">{!! Form::label('senatorial_zone', 'Senatorial Zone:') !!}</th>
    @if (isset($employee->senatorialZone->title))
        <td>{{ $employee->senatorialZone->title }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('local_govt_area', 'Local Govt Area:') !!}</th>
    @if (isset($employee->localGovtArea->title))
        <td>{{ $employee->localGovtArea->title }}</td>
    @else
        <td></td>
    @endif
</tr>

<tr>
    <th scopre="row">{!! Form::label('first_arrival_date', 'First Arrival Date:') !!}</th>
    <td>{{ $employee->first_arrival_date }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('decorations', 'Decorations:') !!}</th>
    <td>{{ $employee->decorations }}</td>
</tr>



{{-- <tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $employee->file_upload }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employee->remark }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('email', 'Email:') !!}</th>
    <td>{{ $employee->email }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('phone', 'Phone:') !!}</th>
    <td>{{ $employee->phone }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employee->status) }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employee->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employee->updated_by }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('current_appointment', 'Current Appointment:') !!}</th>
    <td>{{ $employee->current_appointment }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employee->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employee->updated_at }}</td>
</tr> --}}
