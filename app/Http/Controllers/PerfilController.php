<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Perfil;
use App\Sexo;
use App\Municipio;
use App\Departamento;
use App\Pais;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $qs =Perfil::all();
        // return $qs;
        return Perfil::with([
            'sexo',
            'municipio',
            'departamento',
            'pais'
        ])->get();
    }


    // public function index2()
    // {
    //     $perfil->load([
    //         'sexo',
    //         'recinto',
    //         'carrera',
    //         'area',
    //         'modalidad',
    //         'etnia',
    //         'municipio',
    //         'departamento',
    //         'nacionalidad',
    //         'user',
    //     ]);
    //     return view('perfil', compact('perfil'));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // RELACION PARA SEXOS
        $sexos = Sexo::all();

        //RELACION PARA MUNICIPIO
        $municipios = Municipio::all();
        //RELACION PARA DEPARTAMENTO
        $departamentos = Departamento::all();
        //RELACION PARA NACIONALIDAD
        $paises = Pais::all();
        return view('perfiles.crearperfiles', compact('sexos', 'municipios', 'departamentos', 'paises'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil = new Perfil();
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id  = $request['sexo_id'];
        $perfil->municipio_id = $request['municipio_id'];
        $perfil->departamento_id  = $request['departamento_id'];
        $perfil->pais_id = $request['pais_id'];
        $perfil->carnet = $request['carnet'];
        $perfil->save();
        return redirect('perfil');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return $perfil;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        // RELACION PARA SEXOS
        $sexos = Sexo::all();

         $municipios = Municipio::all();
         //RELACION PARA DEPARTAMENTO
         $departamentos = Departamento::all();
         //RELACION PARA NACIONALIDAD
         $paises = Pais::all();
        return view('perfiles/editarperfiles', ['perfil' => $perfil], compact('sexos','municipios', 'departamentos', 'paises'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id  = $request['sexo_id'];
        $perfil->municipio_id = $request['municipio_id'];
        $perfil->departamento_id  = $request['departamento_id'];
        $perfil->pais_id = $request['pais_id'];
        $perfil->carnet = $request['carnet'];
        $perfil->save();
        // return redirect('home');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect('perfiles/lista');
    }


    public function list()
    {
        $rs = $this->index();
        return view('perfiles/listaperfiles',['rs' => $rs]);
    }
}
