<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ruta;
use App\Bar;
class RutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($localidad)
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruta = Ruta::find($id);
        return view('layouts.edit',compact('ruta'));
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
        $ruta = Ruta::find($id);
        $user = $this->__getUser();

        if($ruta->user_id === $user['id']){
            $values = $request->all();
            $ruta->nombre = $values['nombre'];
            $ruta->inicio = $values['inicio'];
            $ruta->fin = $values['fin'];
            $ruta->price1 = $values['price1'];
            $ruta->price2 = $values['price2'];
            $ruta->price3 = $values['price3'];
            $ruta->description = $values['description'];
//            if($request->hasFile($values['img'])){
//                $ruta->img = $values['img'];
//            }
            $ruta->save();
            return view('welcome');
        }
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