<?php
namespace App\Http\Controllers;
use App\Ruta;
use App\Tapa;
use App\Bar;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class BaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
    public function search(Request $request, $searchKey=null){

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $rutas = Ruta::pluck('nombre','id');
      return view('layouts.barcreate', compact('rutas'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user_id = Auth::user()->id;

      $bar = new Bar(array(
        'nombre' => $request->get('nombre'),
        'direccion' => $request->get('direccion'),
        'horarios' => $request->get('horarios'),
        'telefono' => $request->get('telefono'),
        'tapanom' => $request->get('tapanom'),
        'tapadesc' => $request->get('tapadesc'),
        'ruta_id' => $request->get('ruta_id'),
        'user_id' => $user_id

      ));

      $bar->save();

      $imageName = $bar->id . '.' .
        $request->file('tapaimg')->getClientOriginalExtension();

      $request->tapaimg->storeAs('tapas', $imageName);

      $id = $bar->id;

      return \Redirect::route('bar',
        array('id' => $id))->with('message', 'Bar añadido!');
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
        $bar = Bar::find($id);
        return view('layouts.edit',compact('bar'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){

        $bar = Bar::find($id);
        $user = $this->__getUser();

        if($bar->user_id === $user['id']){
            $bar->update($request->all());
            return view('layouts.bar');
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