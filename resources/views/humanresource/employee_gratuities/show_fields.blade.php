{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeGratuity->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeGratuity->employee->getFullName() }}</td>
</tr>



<tr>
    <th scopre="row">{!! Form::label('file_page_no', 'File Page No:') !!}</th>
    <td>{{ $employeeGratuity->file_page_no }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('payment_date', 'Payment Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeGratuity->payment_date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('from_date', 'From Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeGratuity->from_date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('to_date', 'To Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeGratuity->to_date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('years', 'Years:') !!}</th>
    <td>{{ $employeeGratuity->years }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('months', 'Months:') !!}</th>
    <td>{{ $employeeGratuity->months }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('days', 'Days:') !!}</th>
    <td>{{ $employeeGratuity->days }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeGratuity->status) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('rate_per_annum', 'Rate Per Annum:') !!}</th>
    <td>{{ $employeeGratuity->rate_per_annum }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('amount_paid', 'Amount Paid:') !!}</th>
    <td>{{ $employeeGratuity->amount_paid }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeGratuity->remark }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('checked_by', 'Checked By:') !!}</th>
    <td>{{ $employeeGratuity->checkedBy->name }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('checked_at', 'Checked At:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeGratuity->checked_at)->format('d/m/Y') }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeGratuity->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeGratuity->updated_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeGratuity->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeGratuity->updated_at }}</td>
</tr> --}}


