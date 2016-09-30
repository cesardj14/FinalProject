<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Validator;

class EventsController extends Controller
{
    /*/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /*/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $events = Event::paginate(10);


        if(Auth::user()->hasRole('Administrador')){
            return view('/eventos.index', ['events' => $events]);
        }elseif(Auth::user()->hasRole('Cliente')){
            return view('index');
        }else{
            return redirect('/');
        }
    }

    /*/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event();
        return view ('eventos.create', ['event'=>$event]);
    }

    /*/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $v = Validator::make($request->all(),
             [
                 'title' => 'required|max:255',
             ]);
         if ($v->fails())
         {
             return redirect('paquetes.create')
                 ->withErrors($v)
                 ->withInput();
         }

        */



        Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'valid_from' => $request->input('valid_from'),
            'valid_to' => $request->input('valid_to'),
            'nro_tickets' => $request->input('nro_tickets'),
            /*'status' => $request->input('status'),*/
            'user_id' => Auth::user()->id,

        ]);

        return redirect('eventos');
    }

    /*/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('eventos.show', ['event' => $event]);
    }

    /*/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view ('eventos.edit', ['event' => $event]);
    }

    /*/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /*/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('/eventos');
    }
}
