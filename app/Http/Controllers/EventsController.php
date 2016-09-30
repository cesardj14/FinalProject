<?php

namespace App\Http\Controllers;

use App\events;
use Illuminate\Http\Request;

/*use App\Http\Requests;*/
use Illuminate\Auth;
/*use Validator;*//*no me sirve tavo*/

class EventsController extends Controller
{
   /* /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = events::paginate(10);


        if(Auth::user()->hasRole('Administrador')){
            return view('/eventos.index', ['eventos' => $events]);
        }elseif(Auth::user()->hasRole('Cliente')){
            return view('index');
        }else{
            return redirect('/');
        }
    }

   /* /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = new events();
        return view ('eventos.create', ['eventos'=>$events]);
    }

   /* /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        events::create ([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'images' => $request->input('images'),
            'valid_from' => $request->input('valid_from'),
            'valid_to' => $request->input('valid_to'),
           // 'nro_tickets' => $request->input('nro_tickets'),
          //  'user_id' => Auth::user()->id,

        ]);
        return redirect('events');
    }

   /* /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = events::findOrFail($id);
        return view('eventos.show', ['events' => $events]);
    }

    /*/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = eventos::findOrFail($id);
        return view ('eventos.edit', ['events' => $events]);
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

    }

    /*/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        events::destroy($id);
        return redirect('eventos.index');
    }
}
