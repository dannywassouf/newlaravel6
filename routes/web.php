<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

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
 use App\post;
use App\gets;
route::get('/read1',function(){
    $get=gets::find(1);
    //return $get;
 //   foreach($get as $get1)
   // {
               return $get->title;
    //}
});

/*route::prefix('user')->group(function(){
    route::get('/test',function() {
        return "welcome danny";
    });
    route::get('/test2',function (){
        return "danny";
    })->name("d");
});*/

route::group(['prefix'=>'user'],function(){
    route::get('/test',function() {
        return "welcome danny";
    })->name("b");
    route::get('/test2',function (){
        return "danny";
    })->name("d");
    route::get('/',function (){
        return "work";
    });


});

route::group(['namespace'=>'front'],function(){
    route::get('second','Secondcontroler@showstring');
    route::get('second2','Secondcontroler@showstring2');

});

/*route::get('login1',function (){
    return "log in not possible";
})->name('login');
*/

route::group(['namespace'=>'front'],function(){
    route::get('index','usercontroller@getindex');
});
route::resource('new','newscontroller');

Route::get('/', function () {
    return view('welcome');
});



 route::get('test3/{id?}',function(){
     return "test3";
 });

  /*  Route::get('/read',function(){
     $post1 =post::find(2);

     return $post1->title;

    }); */
    Route::get('/read',function(){
      $post2= post::find(2);
       return $post2->title;
    });
       route::get('/insert',function(){
           DB::insert('insert into gets (title) values(?)',['first insert']);
       });

       route::get('/update',function(){
       DB::update('update gets set title= "update it now" where id=?',[1]);
       });

       route::get('/delete/{id}',function($id){
       $delete=DB::delete('delete from gets where id=?',[$id]);
       return $delete;
       });


//Route::get('/postt','posts@index');

//Route::get('/post/{id}/{name}','posts@postss');
//Route::get('/category','posts@category');

//Route::get('/post',function(){return "post num";});
//Route::get('/post','posts1@index');
//  Route::get('/post/{id}','posts1@index');
//route::resource('pp','posts1');
    //route::get('/pp/{id}','posts1@post');
    route::get('/tt/{id1}/{name}','posts1@post1');
    Route::get('/title','posts1@post2');
//Route::get('/post/{id}','posts@index');
//Route::get('/post/{id1}',function($id1){return "post num".$id1;});
//Route::resource('ppp','posts');
//Route::get('post/{id2}','posts@postss');



route::group(['middleware'=>'auth'],function (){
    route::get('m1',function(){
        return "middleware1";
    });
});


route::get('login1',function(){
    return "not authentecated";
})->name('login');

route::get('view1',function() {
    $data = [];
    $data['name'] = "danny";
    $data['age'] = 33;

    $obj = new \stdClass();
    $obj->name = "shady";
    $obj->age = 30;
    return view('welcome',compact('obj'));
});
