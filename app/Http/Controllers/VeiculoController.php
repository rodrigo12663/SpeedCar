<?php

namespace App\Http\Controllers;

use App\Http\Requests\VeiculoRequest;



class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculo = \App\Veiculo::all();
        
        return view('admin.atualiza',compact('veiculo'));  
    }

    public function indexWelcome()
    {
        $sql = 'select * from veiculos limit 8';

        $veiculo=\DB::select($sql);

        $sqls = 'select * from veiculos where id>8 limit 8';

        $veiculoT=\DB::select($sqls);
                    
        return view('home',compact('veiculo','veiculoT'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VeiculoRequest $request)
    {        
             //dd($request->file('foto')->isValid());
           
             
            if($request->file('foto')->isValid()){
                $nameFile= $request->name .''.'.'.$request->foto->extension();
                $request->foto->storeAs('veiculos',$nameFile);
                $veiculo = new \App\Veiculo();
                $veiculo->name=$request->name;
                $veiculo->preco=$request->preco;
                $veiculo->imagem=$nameFile;
                $veiculo->descricao=$request->msg;
                $veiculo->save();
            }
            $veiculo = \App\Veiculo::all();
            flash("Produto Cadastrado")->success();
            return view('admin.atualiza',compact('veiculo'));      
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
        $veiculoo = new \App\Veiculo();
        $veiculoo =\App\Veiculo::find($id);
        return view('admin.index', compact('veiculoo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VeiculoRequest $request, $id)
    {
       
            $nameFile= $request->name .''.'.'.$request->foto->extension();
            $veiculo=\DB::table('veiculos')
                                ->where('id',$id)
                                ->update([
                'name'=>$request->name,
                'preco'=>$request->preco,
                'imagem'=>$nameFile,
                'descricao'=>$request->msg,
                
            ]);
            flash("Carro atualizado".$nameFile)->success();
            return redirect('/admin'); 
                    
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = new \App\Veiculo();
        
        flash("O id ".$id ." foi deletado com sucesso")->success();
        $veiculo->destroy($id);
        return redirect('/admin');
        
    }
    public function exibir($id){
        $veiculoos = new \App\Veiculo();
        $veiculoos =\App\Veiculo::find($id);
        return view('conheca.conhecaCarro', compact('veiculoos'));
        

    }

    public function exibirForm($id){
        $veiculoos = new \App\Veiculo();
        $veiculoos =\App\Veiculo::find($id);
        return view('form_cliente', compact('veiculoos'));
        

    }
}




