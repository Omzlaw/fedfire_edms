<!-- Folio Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('folio', 'Folio:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('folio', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

{!! Form::hidden('employee_id', Session::get('employee_id'), ['class' => 'form-control']) !!}

{!! Form::hidden('action_by', Auth::user()->id, ['class' => 'form-control']) !!}

<!-- Action At Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('action_at', 'Action At:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('action_at', null, ['class' => 'form-control','id'=>'action_at']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#action_at').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection


<!-- Date Cleared Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('date_cleared', 'Date Cleared:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::date('date_cleared', null, ['class' => 'form-control','id'=>'date_cleared']) !!}
        </div>
    </div>
</div>

@section('footer_scripts')
<script type="text/javascript">
    $('#date_cleared').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        });
</script>
@endsection

<!-- Employee Id Field -->
{{-- <div class="form-group">
     <div class="row">
         {!! Form::label('employee_id', 'Employee:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
         <div class="col-md-9 col-lg-9 col-12">
             {!! Form::select('employee_id', modelDropdown($employees, 'id', 'staff_code'), null, ['class' => 'form-control']) !!}
             <button  class="model_modal_button" data-route="{{ route('humanresource.employees.create') }}" type="button" data-toggle="modal"  data-target="#model_modal">Add new</button>
         </div>
     </div>
 </div> --}}
{!! Form::hidden('employee_id', Session::get('employee_id'), ['class' => 'form-control']) !!}

<!-- Remark Field -->
<div class="form-group ">
    <div class="row">
        {!! Form::label('remark', 'Remark:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::textarea('remark', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> 


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    {{-- <a href="#" data-dismiss="modal" class="btn btn-default modal-cancel">Cancel</a> --}}
</div>
