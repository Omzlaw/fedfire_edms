{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeForeignTours->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeForeignTours->employee->staff_code }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_upload', 'File Upload:') !!}</th>
    <td>{{ $employeeForeignTours->file_upload }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('leaver_id', 'Leave Type:') !!}</th>
    <td>{{ $employeeForeignTours->leaveType->title }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('from_date', 'From Date:') !!}</th>
    <td>{{ $employeeForeignTours->from_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('to_date', 'To Date:') !!}</th>
    <td>{{ $employeeForeignTours->to_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeForeignTours->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeForeignTours->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeForeignTours->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeForeignTours->updated_by }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('date_started', 'Date Started:') !!}</th>
    <td>{{ $employeeForeignTours->date_started->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('tour_gazette_no', 'Tour Gazette No:') !!}</th>
    <td>{{ $employeeForeignTours->tour_gazette_no }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('tour_length', 'Tour Length:') !!}</th>
    <td>{{ $employeeForeignTours->tour_length }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('leave_due_date', 'Leave Due Date:') !!}</th>
    <td>{{ $employeeForeignTours->leave_due_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('leave_departure_date', 'Leave Departure Date:') !!}</th>
    <td>{{ $employeeForeignTours->leave_departure_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('leave_gazette_no', 'Leave Gazette No:') !!}</th>
    <td>{{ $employeeForeignTours->leave_gazette_no }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('return_due_date', 'Return Due Date:') !!}</th>
    <td>{{ $employeeForeignTours->return_due_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('granted_extension_date', 'Granted Extension Date:') !!}</th>
    <td>{{ $employeeForeignTours->granted_extension_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('duty_resumption_date', 'Duty Resumption Date:') !!}</th>
    <td>{{ $employeeForeignTours->duty_resumption_date->toDateString() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('passed_to_uk', 'Passed To Uk:') !!}</th>
    <td>{{ $employeeForeignTours->passed_to_uk }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('passed_from_uk', 'Passed From Uk:') !!}</th>
    <td>{{ $employeeForeignTours->passed_from_uk }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('resident_months', 'Resident Months:') !!}</th>
    <td>{{ $employeeForeignTours->resident_months }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('resident_days', 'Resident Days:') !!}</th>
    <td>{{ $employeeForeignTours->resident_days }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('leave_months', 'Leave Months:') !!}</th>
    <td>{{ $employeeForeignTours->leave_months }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('leave_days', 'Leave Days:') !!}</th>
    <td>{{ $employeeForeignTours->leave_days }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeForeignTours->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeForeignTours->updated_at }}</td>
</tr> --}}


