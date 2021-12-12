@section('css')
    @include('layouts.datatables_css')
@endsection

<div class="table-responsive">
    {!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered', 'id' => 'table']) !!}
</div>

@section('footer_scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}

@endsection
