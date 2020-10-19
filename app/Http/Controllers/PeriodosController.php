<?php

namespace App\Http\Controllers;

use App\Models\Periodos;
use App\Models\Curso;
use Illuminate\Http\Request;

class PeriodosController extends Controller
{

    private $objPeriodo;
    private $objCurso;

    public function __construct() 
    {
        $this->objPeriodo=new Periodos();
        $this->objCurso=new Curso();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos=$this->objPeriodo->paginate(10);
        return view('periodos_index', compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos=$this->objCurso->all();
        return view('periodos_create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad = $this->objPeriodo->create([
            'periodo'=>$request->periodo,
            'hora_entrada'=>$request->hora_entrada,
            'hora_saida'=>$request->hora_saida,
            'cod_curso'=>$request->cod_curso,
        ]);
        if($cad){
            return redirect('periodos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function show(Periodos $periodos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periodos=$this->objPeriodo->find($id);
        $cursos=$this->objCurso->all();
        return view('periodos_create', compact('periodos','cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod_periodo)
    {
        $edit = $this->objPeriodo->where(['cod_periodo'=>$cod_periodo])->update([
            'periodo'=>$request->periodo,
            'hora_entrada'=>$request->hora_entrada,
            'hora_saida'=>$request->hora_saida,
            'cod_curso'=>$request->cod_curso,
        ]);
        if($edit){
            return redirect('periodos');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodos  $periodos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->objPeriodo->destroy($id);
        return($del)?"sim":"não";
    }
}
