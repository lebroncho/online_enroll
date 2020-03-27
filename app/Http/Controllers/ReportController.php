<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class ReportController extends Controller
{
    public function bed()
    {
        $students = DB::table('online_enrolment')
                    ->where('department', 'BED')->get();

        return view('bed', ['students' => $students]);
    }

    public function shs()
    {
        $students = DB::table('online_enrolment')
                    ->where('department', 'SHS')->get();

        return view('shs', ['students' => $students]);
    }

    public function ted()
    {
        $students = DB::table('online_enrolment')
                    ->where('department', 'TED')->get();

        return view('ted', ['students' => $students]);
    }
}
