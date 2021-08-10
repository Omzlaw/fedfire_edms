<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shared\RankType;
use App\Models\Shared\FileDirectory;
use App\Models\Humanresource\Employee;
use App\Models\Humanresource\EmployeeRank;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function dashboard()
    {

        $employee = Employee::all();
        $employee_active = $employee->where('status', '=', 1)->count();
        $employee_inactive = $employee->where('status', '=', 0)->count();

        $file_active_count = FileDirectory::where('status', '=', 1)->count();
        $file_inactive_count = FileDirectory::where('status', '=', 0)->count();

        $employee_ranks = new EmployeeRank;

        $rank_and_files = RankType::where('type', '=', 1)->get();
        $senior_officers = RankType::where('type', '=', 0)->get();

        $senior_officers_count_female = $employee_ranks->where('status', '=', 1)->where('type', '=', 0)->where('employee_gender', '=', 0)->count();
        $rank_and_file_officers_count_female = $employee_ranks->where('status', '=', 1)->where('type', '=', 1)->where('employee_gender', '=', 0)->count();

        $senior_officers_count_male = $employee_ranks->where('status', '=', 1)->where('type', '=', 0)->where('employee_gender', '=', 1)->count();
        $rank_and_file_officers_count_male = $employee_ranks->where('status', '=', 1)->where('type', '=', 1)->where('employee_gender', '=', 1)->count();


        $rank_and_file_count_male_array = [];
        $rank_and_file_count_female_array = [];
        $rank_and_file_rank_array = [];
        $senior_officer_count_male_array = [];
        $senior_officer_count_female_array = [];
        $senior_officer_rank_array = [];

        foreach ($rank_and_files as $rank) {
            $id = $rank->id;

            $rank_and_file_count_male = $employee_ranks->where('status', '=', 1)->where('rank_type_id', '=', $id)->where('employee_gender', '=', 1)->count();
            $rank_and_file_count_male_array[] = $rank_and_file_count_male;

            $rank_and_file_count_female = $employee_ranks->where('status', '=', 1)->where('rank_type_id', '=', $id)->where('employee_gender', '=', 0)->count();
            $rank_and_file_count_female_array[] = $rank_and_file_count_female;

            $rank_and_file_rank_array[] = $rank->title;
        }

        foreach ($senior_officers as $rank) {
            $id = $rank->id;

            $senior_officer_count_male = $employee_ranks->where('status', '=', 1)->where('rank_type_id', '=', $id)->where('employee_gender', '=', 1)->count();
            $senior_officer_count_male_array[] = $senior_officer_count_male;

            $senior_officer_count_female = $employee_ranks->where('status', '=', 1)->where('rank_type_id', '=', $id)->where('employee_gender', '=', 0)->count();
            $senior_officer_count_female_array[] = $senior_officer_count_female;

            $senior_officer_rank_array[] = $rank->title;
        }

        return view('home.dashboard', compact(
            'employee_active',
            'employee_inactive',
            'senior_officers_count_male',
            'senior_officers_count_female',
            'file_active_count',
            'file_inactive_count',
            'rank_and_file_officers_count_male',
            'rank_and_file_officers_count_female',
            'senior_officer_rank_array',
            'senior_officer_count_male_array',
            'senior_officer_count_female_array',
            'rank_and_file_rank_array',
            'rank_and_file_count_male_array',
            'rank_and_file_count_female_array'
        ));
    }
}
