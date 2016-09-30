<?php

namespace App\Http\Controllers;

use App\Package;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Validator;

class PaquetesController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $packages = Package::paginate(10);


        if(Auth::user()->hasRole('Administrador')){
            return view('/paquetes.index', ['packages' => $packages]);
        }elseif(Auth::user()->hasRole('Cliente')){
            return view('index');
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package = new Package();
        return view ('paquetes.create', ['package'=>$package]);
    }

    /**
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



        Package::create ([
            'title' => $request->input('title'),
            'destiny' => $request->input('destiny'),
            'description' => $request->input('description'),
            'valid_from' => $request->input('valid_from'),
            'valid_to' => $request->input('valid_to'),
            'nro_tickets' => $request->input('nro_tickets'),
            'user_id' => Auth::user()->id,

        ]);

        return redirect('paquetes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('paquetes.show', ['package' => $package]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view ('paquetes.edit', ['packege' => $package]);
    }

    /**
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Package::destroy($id);
        return redirect('paquetes.index');
    }
}
