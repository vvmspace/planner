<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PlannerController extends Controller
{
	function planner(){
	    $m_start = strtotime('01.' . Carbon::now()->format('m.Y') . ' +5 hours');
	    $m_end = strtotime('01.' . Carbon::now()->format('m.Y') . ' +1 month 5 hours');
	    $planned = 160 * (time() - $m_start) / ($m_end - $m_start);
		return ['planned' => round($planned, 2)];
	}
}
