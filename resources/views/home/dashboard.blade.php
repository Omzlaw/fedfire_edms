@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link href="{{ asset('css/pages.css') }}" rel="stylesheet">


    <!--end of page vendors -->
@stop
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Dashboard</h1>

        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>
    <!-- /.content -->
    <section class="content">
        <div class="row">
            <div class="col-12 mb-3">
                Hello {{ Auth::user()->name }}
            </div>
            <div class="col-md-6 col-xl-3 col-12 mb-20">
                <div class="  bg-white dashboard-col pl-15 pb-15 pt-15">
                    <i class="im im-icon-Checked-User im-icon-set float-right bg-primary"></i>
                    <h3>{{ $employee_active }}</h3>
                    <p>Number of Active Employees</p>
                    {{-- <div class="progress meter mr-15">
                    <div id="progress-primary"
                        class=" progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="{{ $employee_count }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12 mb-20">
                <div class="  bg-white dashboard-col pl-15 pb-15 pt-15">
                    <i class="im im-icon-Checked-User im-icon-set float-right bg-primary"></i>
                    <h3>{{ $employee_inactive }}</h3>
                    <p>Number of Inactive Employees</p>
                    {{-- <div class="progress meter mr-15">
                    <div id="progress-primary"
                        class=" progress-bar bg-primary progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="{{ $employee_count }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>
                    <h3>{{ $file_active_count }}</h3>
                    <p>Number of Active Files</p>
                    {{-- <div class="progress mr-15">
                    <div id="progress-success"
                        class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="{{ $file_count }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <i class="im im-icon-Eye-Scan im-icon-set float-right bg-success"></i>
                    <h3>{{ $file_inactive_count }}</h3>
                    <p>Number of Inactive Files</p>
                    {{-- <div class="progress mr-15">
                    <div id="progress-success"
                        class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar"
                        style="width: 1%" aria-valuenow="{{ $file_count }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <i class="im im-icon-Love-User im-icon-set float-right bg-info"></i>
                    <h3>{{ $senior_officers_count_male }}</h3>
                    <p>Number of Male Senior Officers</p>
                    {{-- <div class="progress mr-15">
                    <div id="progress-info" class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div> --}}
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <i class="im im-icon-Love-User im-icon-set float-right bg-info"></i>
                    <h3>{{ $senior_officers_count_female }}</h3>
                    <p>Number of Female Senior Officers</p>
                    {{-- <div class="progress mr-15">
                    <div id="progress-info" class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div> --}}
                </div>
            </div>


            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <i class="im im-icon-Checked-User im-icon-set float-right bg-danger"></i>
                    <h3>{{ $rank_and_file_officers_count_male }}</h3>
                    <p>Number of Male Rank and File</p>
                    {{-- <div class="progress mr-15">
                    <div id="progress-danger" class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div> --}}
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <i class="im im-icon-Checked-User im-icon-set float-right bg-danger"></i>
                    <h3>{{ $rank_and_file_officers_count_female }}</h3>
                    <p>Number of Female Rank and File</p>
                    {{-- <div class="progress mr-15">
                    <div id="progress-danger" class="progress-bar bg-danger progress-bar-striped progress-bar-animated"
                        role="progressbar" style="width: 1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div> --}}
                    </p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <canvas id="myChart" style="width:100%;max-width:100%"></canvas>
                </div>
            </div>
            <div class="col-md-6 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <canvas id="myChart2" style="width:100%;max-width:100%"></canvas>
                </div>
            </div>

        </div>
    </section>

    <script>
        window.onload = function() {
            // $(document).ready(function() {
            //     $("#progress-primary").animate({
            //         width: '45%'
            //     }, 'slow', 'linear');
            //     $("#progress-info").animate({
            //         width: '45%'
            //     }, 'slow', 'linear');
            //     $("#progress-success").animate({
            //         width: '45%'
            //     }, 'slow', 'linear');
            //     $("#progress-danger").animate({
            //         width: '45%'
            //     }, 'slow', 'linear');
            // });
            var ctx = $('#myChart');
            var ctx2 = $('#myChart2');

            let employee_count = <?php echo json_encode($employee_active); ?>;

            let rank_and_file_rank_array = <?php echo json_encode($rank_and_file_rank_array); ?>;
            let rank_and_file_count_male_array = <?php echo json_encode($rank_and_file_count_male_array); ?>;
            let rank_and_file_count_female_array = <?php echo json_encode($rank_and_file_count_female_array); ?>;

            let senior_officer_rank_array = <?php echo json_encode($senior_officer_rank_array); ?>;
            let senior_officer_count_male_array = <?php echo json_encode($senior_officer_count_male_array); ?>;
            let senior_officer_count_female_array = <?php echo json_encode($senior_officer_count_female_array); ?>;

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: senior_officer_rank_array,
                    datasets: [{
                        label: 'Male',
                        data: senior_officer_count_male_array,
                        backgroundColor: "blue",
                        borderColor: "blue",
                        borderWidth: 2
                    }, {
                        label: 'Female',
                        data: senior_officer_count_female_array,
                        backgroundColor: "red",
                        borderColor: "red",
                        borderWidth: 2
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Senior Officers'
                    },
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            fontColor: "#000080",
                        },
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepSize: 1,
                                max: employee_count
                            }
                        }]
                    }
                }
            });

            var myChart2 = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: rank_and_file_rank_array,
                    datasets: [{
                        label: 'Male',
                        data: rank_and_file_count_male_array,
                        backgroundColor: "blue",
                        borderColor: "blue",
                        borderWidth: 2
                    }, {
                        label: 'Female',
                        data: rank_and_file_count_female_array,
                        backgroundColor: "red",
                        borderColor: "red",
                        borderWidth: 2
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'Rank and File'
                    },
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            fontColor: "#000080",
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepSize: 1,
                                max: employee_count
                            }
                        }]
                    }
                }
            });

        }
    </script>
@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
    <script src="{{ asset('js/pages/dashboard.js') }}"></script>

    <!-- end of page level js -->
@stop
