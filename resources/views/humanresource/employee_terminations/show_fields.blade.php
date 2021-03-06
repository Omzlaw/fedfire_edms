{{-- <tr>
    <th scopre="row">{!! Form::label('id', 'Id:') !!}</th>
    <td>{{ $employeeTermination->id }}</td>
</tr> --}}


<tr>
    <th scopre="row">{!! Form::label('termination_id', 'Termination Type:') !!}</th>
    <td>{{ $employeeTermination->termination_type->title }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('employee_id', 'Employee:') !!}</th>
    <td>{{ $employeeTermination->employee->getFullName() }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('even_date', 'Even Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeTermination->even_date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('is_pensionable', 'Is Pensionable:') !!}</th>
    <td>{{ get_enum_value('enum_yes_no', $employeeTermination->is_pensionable) }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('pension_amount', 'Pension Amount:') !!}</th>
    <td>{{ $employeeTermination->pension_amount }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('pension_start_date', 'Pension Start Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeTermination->pension_start_date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('gratuity_amount', 'Gratuity Amount:') !!}</th>
    <td>{{ $employeeTermination->gratuity_amount }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('contract_gratuity', 'Contract Gratuity:') !!}</th>
    <td>{{ $employeeTermination->contract_gratuity }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('estate_gratuity_amount_paid', 'Estimate Gratuity Amount Paid:') !!}</th>
    <td>{{ $employeeTermination->estate_gratuity_amount_paid }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('widow_pension_amount', 'Widow Pension Amount:') !!}</th>
    <td>{{ $employeeTermination->widow_pension_amount }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('widow_pension_start_date', 'Widow Pension Start Date:') !!}</th>
    <td>{{ \Carbon\Carbon::parse($employeeTermination->widow_pension_start_date)->format('d/m/Y') }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('orphan_pension_amonut', 'Orphan Pension Amonut:') !!}</th>
    <td>{{ $employeeTermination->orphan_pension_amonut }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('nigeria_total_service_years', 'Nigeria Total Service Years:') !!}</th>
    <td>{{ $employeeTermination->nigeria_total_service_years }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('nigeria_total_service_months', 'Nigeria Total Service Months:') !!}</th>
    <td>{{ $employeeTermination->nigeria_total_service_months }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('nigeria_total_service_days', 'Nigeria Total Service Days:') !!}</th>
    <td>{{ $employeeTermination->nigeria_total_service_days }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('total_naria_salary', 'Total Naria Salary:') !!}</th>
    <td>{{ $employeeTermination->total_naria_salary }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('summary', 'Summary:') !!}</th>
    <td>{{ $employeeTermination->summary }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('remark', 'Remark:') !!}</th>
    <td>{{ $employeeTermination->remark }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('status', 'Status:') !!}</th>
    <td>{{ get_enum_value('enum_status', $employeeTermination->status) }}</td>
</tr>


{{-- <tr>
    <th scopre="row">{!! Form::label('compiled_by', 'Compiled By:') !!}</th>
    <td>{{ $employeeTermination->compiledBy->name }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('created_by', 'Created By:') !!}</th>
    <td>{{ $employeeTermination->created_by }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_by', 'Updated By:') !!}</th>
    <td>{{ $employeeTermination->updated_by }}</td>
</tr> --}}


{{-- <tr>
    <th scopre="row">{!! Form::label('created_at', 'Created At:') !!}</th>
    <td>{{ $employeeTermination->created_at }}</td>
</tr>


<tr>
    <th scopre="row">{!! Form::label('updated_at', 'Updated At:') !!}</th>
    <td>{{ $employeeTermination->updated_at }}</td>
</tr> --}}


