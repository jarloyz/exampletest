<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Forecast;
use App\Models\Type;
use Illuminate\Http\Request;

class ForecastController extends Controller
{
    /**
     * Show the list of forecast.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        $forecast=Forecast::all();
        return view('forecast.index',compact('forecast'));
    }

    /**
     * Show the list of forecast.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(){
        $types=Type::all();
        $cities=City::all();
        return view('forecast.create',compact('types','cities'));
    }
    /**
     * Show the list of forecast.
     *
     * @return
     */
    public function store(Request $request){
        $request->validate([
            'nombre'=>['required','string'],
            'descripcion'=>['required','string'],
            'ciudad'=>['required','string'],
            'tipo'=>['required','string'],
            'temperatura_maxima'=>['required','string'],
            'temperatura_minima'=>['required','string'],
            'posibilidad_de_lluvia'=>['required','string'],
        ]);
        $forecast=Forecast::all();
        return redirect(route('forecast/index'));
    }
}
