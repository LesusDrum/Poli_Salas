<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Salas;
use App\Models\Blocos;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    private $objBloco;
    private $objSala;

    public function __construct() 
    {
        $this->objBloco=new Blocos();
        $this->objSala=new Salas();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sala=$this->objSala->paginate(10);
        return view('salas_index', compact('sala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function show(Salas $salas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function edit(Salas $salas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salas $salas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salas $salas)
    {
        //
    }
}
