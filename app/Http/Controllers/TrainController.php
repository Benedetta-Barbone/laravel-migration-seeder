<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $trains = Train::where('orario_partenza', '>=', $now)->get();

        return view('pages.home', compact('trains'));
    }
}
