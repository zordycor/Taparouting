<?php
namespace App\Http\Controllers;
use App\Ruta;
use App\Tapa;
use App\Bar;
use Auth;
use Illuminate\Http\Request;
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
      return view('layouts.rutacreate');
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

      $ruta = new Ruta(array(
        'nombre' => $request->get('nombre'),
        'localidad' => $request->get('localidad'),
        'inicio' => $request->get('inicio'),
        'fin' => $request->get('fin'),
        'price1' => $request->get('price1'),
        'price2' => $request->get('price2'),
        'price3' => $request->get('price3'),
        'description' => $request->get('description'),
        'user_id' => $user_id

      ));

      $ruta->save();

      $imageName = $ruta->localidad . '.' .
        $request->file('img')->getClientOriginalExtension();

      $request->img->storeAs('rutas', $imageName);

      $localidad = $ruta->localidad;

      return redirect()->route('ruta',
        array('localidad' => $localidad))->with('message', 'Ruta añadida!');
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
//
            $ruta->save();
            return redirect()->action('DashboardController@index');
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