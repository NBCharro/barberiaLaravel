<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $tomorrow = Carbon::tomorrow()->toDateString('Y-m-d');
            $citas = Reserva::all(['fecha', 'hora', 'trabajadora']);
            return view('reservas.reservas')->with(["tomorrow" => $tomorrow, 'citas' => $citas]);
        } catch (\Throwable $e) {
            return view('error')->with(["mensajeError1" => "Lo sentimos, en este momento no aceptamos reservas de citas previas"]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulos.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            'nombre' => 'required|max:50',
            'telefono' => 'required|max:9',
            'email' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'servicio' => 'required',
            'trabajadora' => 'required',
        ];
        $request->validate($reglas);

        Reserva::create([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'servicio' => $request->servicio,
            'trabajadora' => $request->trabajadora,
        ]);

        return view('reservas.guardado')->with([
            'nombre' => $request->nombre,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'servicio' => $request->servicio,
            'trabajadora' => $request->trabajadora
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reserva $reserva)
    {
        //
    }
}
