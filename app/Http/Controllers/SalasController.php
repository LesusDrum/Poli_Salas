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
        $blocos=$this->objBloco->all();
        return view('salas_create', compact('blocos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $this->objSala->create([
            'nome_sala'=>$request->nome_sala,
            'descricao_sala'=>$request->descricao_sala,
            'cod_bloco'=>$request->cod_bloco,
        ]);
        if($cad){
            return redirect('salas');
        }
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
    public function edit($id)
    {
        $salas=$this->objSala->find($id);
        $blocos=$this->objBloco->all();
        return view('salas_create', compact('salas','blocos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_sala)
    {
        $edit = $this->objSala->where(['cod_sala'=>$cod_sala])->update([
            'nome_sala'=>$request->nome_sala,
            'descricao_sala'=>$request->descricao_sala,
            'cod_bloco'=>$request->cod_bloco,
        ]);
        if($edit){
            return redirect('salas');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salas  $salas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objSala->destroy($id);
        return($del)?"sim":"não";
    }
}
