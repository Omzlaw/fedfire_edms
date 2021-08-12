@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link href="{{ asset('css/pages.css') }}" rel="stylesheet">

    <style>
        :root {
            --dark-body: #4d4c5a;
            --dark-main: #141529;
            --dark-second: #79788c;
            --dark-hover: #323048;
            --dark-text: #f8fbff;

            --light-body: #f3f8fe;
            --light-main: #fdfdfd;
            --light-second: #c3c2c8;
            --light-hover: #edf0f5;
            --light-text: #151426;

            --blue: #0000ff;
            --white: #fff;

            --shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

            --font-family: cursive;
        }

        .dark {
            --bg-body: var(--dark-body);
            --bg-main: var(--dark-main);
            --bg-second: var(--dark-second);
            --color-hover: var(--dark-hover);
            --color-txt: var(--dark-text);
        }

        .light {
            --bg-body: var(--light-body);
            --bg-main: var(--light-main);
            --bg-second: var(--light-second);
            --color-hover: var(--light-hover);
            --color-txt: var(--light-text);
        }




        .calendar {
            height: max-content;
            width: max-content;
            background-color: var(--bg-main);
            border-radius: 30px;
            padding: 20px;
            position: relative;
            overflow: hidden;
            /* transform: scale(1.25); */
        }

        .light .calendar {
            box-shadow: var(--shadow);
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 25px;
            font-weight: 600;
            color: var(--color-txt);
            padding: 10px;
        }

        .calendar-body {
            padding: 10px;
        }

        .calendar-week-day {
            height: 50px;
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            font-weight: 600;
        }

        .calendar-week-day div {
            display: grid;
            place-items: center;
            color: var(--bg-second);
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 2px;
            color: var(--color-txt);
        }

        .calendar-days div {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            position: relative;
            cursor: pointer;
            animation: to-top 1s forwards;
            /* border-radius: 50%; */
        }

        .calendar-days div span {
            position: absolute;
        }

        .calendar-days div:hover span {
            transition: width 0.2s ease-in-out, height 0.2s ease-in-out;
        }

        .calendar-days div span:nth-child(1),
        .calendar-days div span:nth-child(3) {
            width: 2px;
            height: 0;
            background-color: var(--color-txt);
        }

        .calendar-days div:hover span:nth-child(1),
        .calendar-days div:hover span:nth-child(3) {
            height: 100%;
        }

        .calendar-days div span:nth-child(1) {
            bottom: 0;
            left: 0;
        }

        .calendar-days div span:nth-child(3) {
            top: 0;
            right: 0;
        }

        .calendar-days div span:nth-child(2),
        .calendar-days div span:nth-child(4) {
            width: 0;
            height: 2px;
            background-color: var(--color-txt);
        }

        .calendar-days div:hover span:nth-child(2),
        .calendar-days div:hover span:nth-child(4) {
            width: 100%;
        }

        .calendar-days div span:nth-child(2) {
            top: 0;
            left: 0;
        }

        .calendar-days div span:nth-child(4) {
            bottom: 0;
            right: 0;
        }

        .calendar-days div:hover span:nth-child(2) {
            transition-delay: 0.2s;
        }

        .calendar-days div:hover span:nth-child(3) {
            transition-delay: 0.4s;
        }

        .calendar-days div:hover span:nth-child(4) {
            transition-delay: 0.6s;
        }

        .calendar-days div.curr-date,
        .calendar-days div.curr-date:hover {
            background-color: var(--blue);
            color: var(--white);
            border-radius: 50%;
        }

        .calendar-days div.curr-date span {
            display: none;
        }

        .month-picker {
            padding: 5px 10px;
            border-radius: 10px;
            cursor: pointer;
        }

        .month-picker:hover {
            background-color: var(--color-hover);
        }

        .year-picker {
            display: flex;
            align-items: center;
        }

        .year-change {
            height: 40px;
            width: 40px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            margin: 0 10px;
            cursor: pointer;
        }

        .year-change:hover {
            background-color: var(--color-hover);
        }

        .calendar-footer {
            padding: 10px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .toggle {
            display: flex;
        }

        .toggle span {
            margin-right: 10px;
            color: var(--color-txt);
        }

        .dark-mode-switch {
            position: relative;
            width: 48px;
            height: 25px;
            border-radius: 14px;
            background-color: var(--bg-second);
            cursor: pointer;
        }

        .dark-mode-switch-ident {
            width: 21px;
            height: 21px;
            border-radius: 50%;
            background-color: var(--bg-main);
            position: absolute;
            top: 2px;
            left: 2px;
            transition: left 0.2s ease-in-out;
        }

        .dark .dark-mode-switch .dark-mode-switch-ident {
            top: 2px;
            left: calc(2px + 50%);
        }

        .month-list {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: var(--bg-main);
            padding: 20px;
            grid-template-columns: repeat(3, auto);
            gap: 5px;
            display: grid;
            transform: scale(1.5);
            visibility: hidden;
            pointer-events: none;
        }

        .month-list.show {
            transform: scale(1);
            visibility: visible;
            pointer-events: visible;
            transition: all 0.2s ease-in-out;
        }

        .month-list>div {
            display: grid;
            place-items: center;
        }

        .month-list>div>div {
            width: 100%;
            padding: 5px 20px;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            color: var(--color-txt);
        }

        .month-list>div>div:hover {
            background-color: var(--color-hover);
        }

        @keyframes to-top {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

    </style>
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
            <div class="col-md-6 col-12  mb-20">
                <div class="secondary-color-bg dashboard-col pl-15 pb-15 pt-15">
                    {{-- <canvas id="myChart3" style="width:100%;max-width:100%"></canvas> --}}
                    <div class="col-12 mb-3 text-center">
                        <i class="fa fa-user text-secondary" style="font-size: 4rem"></i>
                    </div>
                    <div class="col-12 mb-3 text-center">
                        Hello {{ Auth::user()->name }}
                    </div>
                    <div class="mb-3 col-12 mb-60 text-center">
                        <h3 id="dayTime" class="text-white"></h3>
                    </div>
                    <div class="col-12 text-center">
                        <h5 class="text-white">Active quote</h5>
                        <h3 id="quote" class="text-white"></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <canvas id="myChart" style="width:100%;max-width:100%"></canvas>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6 col-xl-3 col-12 mb-20">
                <div class="bg-primary bg-gradient dashboard-col pl-15 pb-15 pt-15">
                    <div class="row">
                        <span class="col-4">
                            <i class="fa fa-users text-secondary" style="font-size: 4rem"></i>
                        </span>
                        <span class="text col-8 text-align-center">
                            <h3 class="text-white">{{ $employee_active }}
                                <p class="text-white " style="font-size: 1.5rem">Active Employees</p>
                        </span>
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-xl-3 col-12 mb-20">
                <div class="bg-success bg-gradient-success dashboard-col pl-15 pb-15 pt-15">
                    <div class="row">
                        <span class="col-4">
                            <i class="fa fa-users-slash text-secondary" style="font-size: 4rem"></i>
                        </span>
                        <span class="text col-8 text-align-center">
                            <h3 class="text-white">{{ $employee_inactive }}
                                <p class="text-white " style="font-size: 1.5rem">Inactive Employees</p>
                        </span>
                    </div>

                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-info bg-gradient-info dashboard-col pl-15 pb-15 pt-15">
                    <div class="row">
                        <span class="col-4">
                            <i class="fa fa-folder text-secondary" style="font-size: 4rem"></i>
                        </span>
                        <span class="text col-8 text-align-center">
                            <h3 class="text-white">{{ $file_active_count }}
                                <p class="text-white " style="font-size: 1.5rem">Active Files</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-dark bg-gradient-dark dashboard-col pl-15 pb-15 pt-15">
                    <div class="row">
                        <span class="col-4">
                            <i class="fa fa-folder text-secondary" style="font-size: 4rem"></i>
                        </span>
                        <span class="text col-8 text-align-center">
                            <h3 class="text-white">{{ $file_inactive_count }}
                                <p class="text-white " style="font-size: 1.5rem">Inactive Files</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-danger bg-gradient-danger dashboard-col pl-15 pb-15 pt-15">
                    <div class="row">
                        <span class="col-4">
                            <i class="fa fa-user text-secondary" style="font-size: 4rem"></i>
                        </span>
                        <span class="text col-8 text-align-center">
                            <h3 class="text-white">{{ $senior_officers_count_male }}
                                <p class="text-white " style="font-size: 1.5rem">Male Senior Officers</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-warning bg-gradient-warning dashboard-col pl-15 pb-15 pt-15">
                    <div class="row">
                        <span class="col-4">
                            <i class="fa fa-user text-secondary" style="font-size: 4rem"></i>
                        </span>
                        <span class="text col-8 text-align-center">
                            <h3 class="text-white">{{ $senior_officers_count_female }}
                                <p class="text-white" style="font-size: 1.5rem">Female Senior Officers</p>
                        </span>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-danger bg-gradient-danger dashboard-col pl-15 pb-15 pt-15">
                    <div class="row">
                        <span class="col-4">
                            <i class="fa fa-user-circle text-secondary" style="font-size: 4rem"></i>
                        </span>
                        <span class="text col-8 text-align-center">
                            <h3 class="text-white">{{ $rank_and_file_officers_count_male }}
                                <p class="text-white " style="font-size: 1.5rem">Male Rank and File</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3 col-12  mb-20">
                <div class="bg-warning bg-gradient-warning dashboard-col pl-15 pb-15 pt-15">
                    <div class="row">
                        <span class="col-4">
                            <i class="fa fa-user-circle text-secondary" style="font-size: 4rem"></i>
                        </span>
                        <span class="text col-8 text-align-center">
                            <h3 class="text-white">{{ $rank_and_file_officers_count_female }}
                                <p class="text-white " style="font-size: 1.5rem">Female Rank and File</p>
                        </span>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 col-12  mb-20">
                <div class="bg-white dashboard-col pl-15 pb-15 pt-15">
                    <canvas id="myChart2" style="width:100%;max-width:100%"></canvas>
                </div>
            </div>
            <div class="col-md-6 col-12  mb-20">
                <div class="secondary-color-bg dashboard-col pl-15 pb-15 pt-15">
                    {{-- <canvas id="myChart4" style="width:100%;max-width:100%"></canvas> --}}
                    <div class="calendar" style="width:100%;max-width:100%">
                        <div class="calendar-header">
                            <span class="month-picker" id="month-picker">February</span>
                            <div class="year-picker">
                                <span class="year-change" id="prev-year">
                                    <pre><</pre>
                                </span>
                                <span id="year">2021</span>
                                <span class="year-change" id="next-year">
                                    <pre>></pre>
                                </span>
                            </div>
                        </div>
                        <div class="calendar-body">
                            <div class="calendar-week-day">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div class="calendar-days"></div>
                        </div>
                        <div class="month-list"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <script>
        window.onload = function() {

            let qoutes = [
                'A hero has faced it all: he need not be undefeated, but he must be undaunted.',
                'The hero is the man who lets no obstacle prevent him from pursuing the values he has chosen.',
                'When tempted to fight fire with fire, remember that firefighters usually use water.',
                'Aspire rather to be a hero than merely appear one.',
                'Hard times don’ t create heroes. It is during the hard times when the‘ hero’ within us is revealed.',
                'More often than not, a hero’\ s most epic battle is the one you never see;it’ s the battle that goes on within him or herself.', 
                
            ]

            document.getElementById('quote').innerHTML = qoutes[0];

            function changeQuote() {
                setInterval(() => {
                    let randNumber = Math.floor(Math.random() * (qoutes.length));
                    document.getElementById('quote').innerHTML = qoutes[randNumber];
                    console.log(qoutes[randNumber]);
                }, 1000 * 10);
            }

            changeQuote();


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
                        backgroundColor: "#060c38",
                        borderColor: "#060c38",
                        borderWidth: 2
                    }, {
                        label: 'Female',
                        data: senior_officer_count_female_array,
                        backgroundColor: "#db2016",
                        borderColor: "#db2016",
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
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Number of employees'
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
                        backgroundColor: "#060c38",
                        borderColor: "#060c38",
                        borderWidth: 2
                    }, {
                        label: 'Female',
                        data: rank_and_file_count_female_array,
                        backgroundColor: "#db2016",
                        borderColor: "#db2016",
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
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Number of employees'
                            }
                        }]
                    }
                }
            });


        }
    </script>

    <script type="text/javascript">
        let calendar = document.querySelector('.calendar')

        const month_names = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
            'October', 'November', 'December'
        ]

        isLeapYear = (year) => {
            return (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) || (year % 100 === 0 && year % 400 === 0)
        }

        getFebDays = (year) => {
            return isLeapYear(year) ? 29 : 28
        }

        generateCalendar = (month, year) => {

            let calendar_days = calendar.querySelector('.calendar-days')
            let calendar_header_year = calendar.querySelector('#year')
            let dayTimeH3 = document.getElementById('dayTime')

            let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

            calendar_days.innerHTML = ''

            let currDate = new Date()
            if (currDate.getHours() > 12) {
                dayTimeH3.innerHTML = "Good Afternoon";
            } else if (currDate.getHours() < 12) {
                dayTimeH3.innerHTML = "Good Morning";
            } else if (currDate.getHours() > 17) {
                dayTimeH3.innerHTML = "Good Evening";
            }

            if (!month) month = currDate.getMonth()
            if (!year) year = currDate.getFullYear()

            let curr_month = `${month_names[month]}`
            month_picker.innerHTML = curr_month
            calendar_header_year.innerHTML = year

            // get first day of month

            let first_day = new Date(year, month, 1)

            for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {
                let day = document.createElement('div')
                if (i >= first_day.getDay()) {
                    day.classList.add('calendar-day-hover')
                    day.innerHTML = i - first_day.getDay() + 1
                    day.innerHTML += `<span></span>
                            <span></span>
                            <span></span>
                            <span></span>`
                    if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() &&
                        month === currDate.getMonth()) {
                        day.classList.add('curr-date')
                    }
                }
                calendar_days.appendChild(day)
            }
        }

        let month_list = calendar.querySelector('.month-list')

        month_names.forEach((e, index) => {
            let month = document.createElement('div')
            month.innerHTML = `<div data-month="${index}">${e}</div>`
            month.querySelector('div').onclick = () => {
                month_list.classList.remove('show')
                curr_month.value = index
                generateCalendar(index, curr_year.value)
            }
            month_list.appendChild(month)
        })

        let month_picker = calendar.querySelector('#month-picker')

        month_picker.onclick = () => {
            month_list.classList.add('show')
        }

        let currDate = new Date()

        let curr_month = {
            value: currDate.getMonth()
        }
        let curr_year = {
            value: currDate.getFullYear()
        }

        generateCalendar(curr_month.value, curr_year.value)

        document.querySelector('#prev-year').onclick = () => {
            --curr_year.value
            generateCalendar(curr_month.value, curr_year.value)
        }

        document.querySelector('#next-year').onclick = () => {
            ++curr_year.value
            generateCalendar(curr_month.value, curr_year.value)
        }

        let dark_mode_toggle = document.querySelector('.dark-mode-switch')

        dark_mode_toggle.onclick = () => {
            document.querySelector('body').classList.toggle('light')
            document.querySelector('body').classList.toggle('dark')
        }
    </script>

@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script language="javascript" type="text/javascript" src="{{ asset('vendors/chartjs/js/Chart.js') }}"></script>
    <script src="{{ asset('js/pages/dashboard.js') }}"></script>

    <!-- end of page level js -->
@stop
