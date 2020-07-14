<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;


use Dompdf\Dompdf;

use Dompdf\Options;
class FinanciamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $veiculo = new \App\Veiculo();
        $veiculost = new \App\Veiculo();
        //$veiculost = \App\Veiculo::select('preco')->where('name','LIKE','%'.'r'.'%')->first();
        return view('financiamento',compact('veiculost','veiculo')); 
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calculo(Request $request) {
        $valor1 = $request->taxa * pow((1 + $request->taxa), $request->nparcela);
        $valor2 = pow((1 + $request->taxa),  $request->nparcela) - 1;
        $pgto = $request->valorCarro * ($valor1 / $valor2);
     

                
            $financiamento = new \App\Financiamento();
            
            $financiamento = \App\Financiamento::create([
                     'valor' => $request->valorCarro, 
                     'nparcela' =>$request->nparcela,
                     'taxa' =>$request->taxa,
                     'pgto' =>$pgto,
                 ]); 

       

                $user = new \App\User();
                $user =\App\User::find(auth()->user()->id);

                $user->financiamento()->save($financiamento);

                
                $veiculo = new \App\Veiculo();
                $veiculost = \App\Veiculo::select('preco')->where('name','LIKE','%'.'r'.'%')->first();
                
                flash("O valor do pagamento ".number_format($pgto, 2, '.', ''))->success();
    
                return view('financiamento',compact('veiculost','veiculo'));    
        
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
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veiculo = new \App\Veiculo();
        $veiculo =\App\Veiculo::find($id);
        

        return view('financiamento',compact('veiculo')); 
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

    public function buscar(Request $request)
    {
    
        $veiculoo = new \App\Veiculo();
        $veiculost = \App\Veiculo::select('preco')->where('name','LIKE','%'.$request->pesquisa.'%')->first();
        return view('financiamento',compact('veiculost')); 
    }
    public function geraPdf(){
        
        $veiculo = \App\Veiculo::all();

          
        $user = new \App\User();

        $user=\App\User::find(auth()->user()->id);
        $financiamentos = $user->financiamento;
        
        

        $options = new Options();
        $options->set('isRemoteEnabled',TRUE); 
        $dompdf= new Dompdf($options); 

        $pdf= PDF::loadView('financiamentoPdf ', compact('financiamentos','user'));

        return $pdf->setPaper('a4')->stream('Meu financiamento.pdf');
    }
}
