{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeePublicService->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('employer_name', 'Employer Name:') !!}</th>
    <td>{{ $employeePublicService->employer_name }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('from_date', 'From Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeePublicService->from_date)->format('d/m/Y')  }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('to_date', 'To Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeePublicService->to_date)->format('d/m/Y')  }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('file_page_ref', 'File Page Ref:') !!}</th>
    <td>{{ $employeePublicService->file_page_ref }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeePublicService->employee->getFullName()}}</td>
</tr>



<tr>
    <th scopre="row">{!! Form::label('total_years_served', 'Total Years Served:') !!}</th>
    <td>{{ $employeePublicService->total_years_served }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('total_paid', 'Total Paid:') !!}</th>
    <td>{{ $employeePublicService->total_paid }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeePublicService->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('checked_by', 'Checked By:') !!}</th>
    <td>{{ $employeePublicService->checkedBy->name }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeePublicService->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeePublicService->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeePublicService->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeePublicService->updated_at }}</td>
</tr> --}}


