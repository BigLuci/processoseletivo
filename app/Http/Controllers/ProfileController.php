<?php

namespace App\Http\Controllers;

use App\CargoProcesso;
use App\Escolaridade;
use App\FuncaoCargo;
use App\Sexo;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcao = FuncaoCargo::orderBy('id') ->get();
        $escola = Escolaridade::orderBy('id')->get();

        return view('profiles.formulario', compact('funcao','escola'));

    }

    public function inicio()
    {
        $cargo = CargoProcesso::orderBy('id')
        ->get();


        return view('inicio', compact('cargo')
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cargo = $request->cargo_processo;
        $funcao=FuncaoCargo::where('cargo_processo_id','=',$cargo)->get();

        // if ($cargo == $funcao->cargo_processo_id) {

        // }

        // se cargo igual a um entao chama funcoes
        $sexo = Sexo::all();
        $escola = Escolaridade::all();
        $cpf = $request->cpf;
        return view('profiles.formulario', compact('cpf','funcao','escola', 'sexo'));

    //     $profile = Profile::all();
    //    // $specialNeeds = SpecialNeed::all();
    //     $cpf = $request->cpf;


    //     if ($request->cargo_processo==1){
    //         return view('profiles.formulario',['profile'=> $profile,
    //          'cpf'=>$cpf,
    //          'cargo_processo'=>$request->cargo_processo]);
    //     }else{
    //         //$contratado = 0;
    //     }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cpf = $request->input('cfp');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
