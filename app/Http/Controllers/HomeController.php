<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Reserva;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view('home', [
        $salas = DB::table('reservas')
                    ->join('users', 'users.id', '=', 'reservas.user_id')
                    ->join('salas', 'salas.id', '=', 'reservas.sala_id')
                    ->select('salas.nome', 'reservas.hora', 'reservas.id')
                    ->where('users.id', '=', Auth::User()->id)
                    ->get()
      ], compact('salas'));
    }
}
