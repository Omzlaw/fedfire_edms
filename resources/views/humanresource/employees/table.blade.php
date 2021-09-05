@section('css')
    @include('layouts.datatables_css')
@endsection


<style>
    th {
        white-space: nowrap;
    }

    .main-header1, .main-header2, .main-header3{
        border-bottom: 1px solid #dee2e6 !important;
        text-align:center !important;
    }

</style>


<div id="details" class="___class_+?0___">
    {!! $dataTable->table(['width' => '100%', 'id' => 'table', 'class' => 'table table-striped table-bordered']) !!}
</div>


@section('footer_scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection


<script>
    let divWidth = document.getElementById('details').style.width
    let width = window.innerWidth;
    if (width <= 500) {
        document.getElementById('details').style.width = `100%`;
    } else if (width >= 1000 && width <= 950) {
        document.getElementById('details').style.width = `${width/19.5}rem`;
    } else {
        document.getElementById('details').style.width = `${width/18}rem`;
    }


    // let htmlTable = document.getElementById('table');
    // let tr = document.createElement('tr');
    // let th1 = document.createElement('th');
    // th1.setAttribute('colspan', 15);
    // th1.classList.add('main-header');
    // th1.classList.add('main-header1');
    // th1.innerHTML = 'Personal Records';

    // let th2 = document.createElement('th');
    // th2.setAttribute('colspan', 14);
    // th2.classList.add('main-header');
    // th2.classList.add('main-header2');
    // th2.innerHTML = 'Service Records';

    // let th3 = document.createElement('th');
    // th3.setAttribute('colspan', 6);
    // th3.classList.add('main-header');
    // th3.classList.add('main-header3');
    // th3.innerHTML = 'Education';

    // // tr.appendChild(th0);
    // tr.appendChild(th1);
    // tr.appendChild(th2);
    // tr.appendChild(th3);

    // htmlTable.children[0].prepend(tr);


</script>
