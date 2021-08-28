@section('css')
    @include('layouts.datatables_css')
@endsection

<div>
    <div id="details" class="table-responsive">
        {!! $dataTable->table(['id'=>'table','width' => '100%', 'class' => 'table table-striped table-bordered display nowrap']) !!}

    </div>
</div>


@section('footer_scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection

