{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employee->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('file_no', 'File No:') !!}</th>
    <td>{{ $employee->file_no }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('first_name', 'First Name:') !!}</th>
    <td>{{ $employee->first_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('last_name', 'Last Name:') !!}</th>
    <td>{{ $employee->last_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('gender', 'Gender:') !!}</th>
    <td>{{ get_enum_value('enum_gender', $employee->gender) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('birthdate', 'Birthdate:') !!}</th>
    <td>{{ $employee->birthdate->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('place_of_birth', 'Place Of Birth:') !!}</th>
    <td>{{ $employee->place_of_birth }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('birth_certificate_upload', 'Birth Certificate Upload:') !!}</th>
    <td>{{ $employee->birth_certificate_upload }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('marital_status_id', 'Marital Status:') !!}</th>
    <td>{{ get_enum_value('enum_marital_status', $employee->marital_status_id) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('first_appointment_date', 'First Appointment Date:') !!}</th>
    <td>{{ $employee->first_appointment_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('first_arrival_date', 'First Arrival Date:') !!}</th>
    <td>{{ $employee->first_arrival_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('nationality', 'Nationality:') !!}</th>
    <td>{{ $employee->country->title }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('decorations', 'Decorations:') !!}</th>
    <td>{{ $employee->decorations }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $employee->file_upload }}</td>
</tr>


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


