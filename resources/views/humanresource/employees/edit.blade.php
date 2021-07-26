@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Employee @parent
@stop

@section('content')
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>{{ __('Edit') }} Employee</h1>

            {{-- <div class="col-lg-2 col-md-3 col-sm-4 col-12 mb-15">

                <div class="btn-group ">
                    <button type="button" class="btn btn-secondary  w-140px dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Details
                    </button>
                    <div class="dropdown-menu">
                        <li><a class="dropdown-item dt" data-id={{ $id }}
                                data-route="{{ route('humanresource.employeeActionSheets.index') }}" href="#">Action
                                Sheets</a></li>
                        <li><a class="dropdown-item dt" data-id={{ $id }}
                                data-route="{{ route('humanresource.employeeAddresses.index') }}" href="#">Address</a>
                        </li>
                        <li><a class="dropdown-item dt" data-id={{ $id }}
                                data-route="{{ route('humanresource.employeeCertificates.index') }}"
                                href="#">Certificates</a></li>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div> --}}
            {{-- <script type="text/javascript">
                window.onload = getRoute;

                function getRoute() {
                    $('.dt').each(function(e) {
                        $(this).click(function(e) {
                            e.preventDefault();
                            let id = $(this).data('id');
                            let route = $(this).data('route');
                            // console.log(id);
                            // console.log(route);
                            // $.ajaxSetup({
                            //     headers: {
                            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            //     }
                            // });
                            // $.ajax({
                            //     url: route,
                            //     type: 'POST',
                            //     data: {
                                    
                            //     },
                            //     success: function(data) {
                            //         $('.result').html(data);
                            //     }
                            // });
                        })
                    })
                }
            </script> --}}

        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::model($employee, ['route' => ['humanresource.employees.update', $employee->id], 'method' => 'patch', 'files' => true, 'class' => 'form-horizontal']) !!}

                @include('humanresource.employees.fields',[$marital_status, $countries])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
