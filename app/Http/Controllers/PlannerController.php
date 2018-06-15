<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PlannerController extends Controller
{
	function planner(){
		return (time() - strtotime('01.' . Carbon::now()->format('m.Y') . ' +5 hours')) / 60 / 60;
	}
}
