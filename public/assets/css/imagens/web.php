<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    //primeira forma de select
    //  $sql = 'select * from users where id=?';

    //$users=\DB::select($sql,[4]);
    //segunda forma de select
    //$users=\DB::table('users')
            // ->select('id','name')
            //->where('id',4)
            //->first();

    //dd($users);

    //terceira forma
    //$user=\App\User::all('name','id','email')->where('id',28);
    //echo($user);

    //mas assignement filllnable
    //$userData=[
       // 'name'=>'fghj',
        //'email'=>'teesteter',
        //'password'=>bcrypt(24567)
    //];

    //find
    //$user=  \App\User::find(19);
   // $user->update($userData);

    //$user = \App\User::whereIn('id',[11,13,14
    //]);
    //$user->delete();
    $user=[
      ['name'=>'rodrigo','email'=>'rodrigoVo@hotmail.com'],
      ['name'=>'yuri','email'=>'rodrtrrrtoVo@hotmail.com'],
      ['name'=>'pedro','email'=>'rodrrrggrigoVo@hotmail.com']
    ];
    return view('welcome', compact('user'));
    


});

Route::post('/dados','UserController@index')->name('teste.novo');


//Route::get('/listagem-usuario','UserController@listUser');



//Route::get('/model', function(){
  //$products = \App\Product::all();

   //$user = new \App\User();
  // $user =\App\User::find(1);
  // $user->name='rodrigoV';

  // $user->save();

   //return \App\User::all();


    //return $products;

//});

//Route::get('/teste', function(){
    //activity record fazendo update
   // $user = new \App\User;
   // $user= \App\User::find(42);
    //$user->name='rodrigoVCC';


    //$user->save();
//});


// users

//Route::get('/users','UserController@index');
//Route::get('/users/{id}','UserController@show');
//Route::post('/users','UserController@save');

//rotas juntas de um mesmo controlller --resource
//Route::resource('/users','UserController');
//Route::resource('/products','ProductController');


//Route::get('/listagem-usuario/{user}',function($user){
    //return view('listUser',compact('user'));

  //  return redirect()->route('product_index');
//});


//prefixo
//Route::prefix('/product')->name('product_')->group(function (){

   // Route::get('/', function(){
     //   echo 'opa';
    //})->name('index');

    //Route::get('/1', function(){
      //  echo 'opa 1';
    //})->name('single');

//});

//chamando a view e passando um valor
//Route::view('/view','view',['name'=>' rodrigo ']);


//parâmetros não obrigatorio
//Route::get('/listagem-usuario/{user?}',function($user=null){
  //  if(is_null($user)){
    //    echo'coloque um valor';
    //}
    //else{
     //   echo'Valor impresso:';
        //return $user;
    //}


//});


//estudos das view

//exxibindo valor na view
//Route::get('/hello/{user}',function($user){
//  return view('helo',compact('user'));
//});

