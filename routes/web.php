<?php

use App\Http\Controllers\testController;
use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});

// Route::middleware('auth:sanctum')->group(function () {

//     Route::get('/profile', function(){});
//     Route::post('/products', function(){});

// });

// Route::get('/admin/posts/example',array('as'=>'admin.home',function(){
//     $url = route('admin.home');
//     return 'this url is' .$url;
// }));


// Route::get('/tests/{id}','testController@index');


// Route::resource('posts', 'PostController');

// Route::get('/contact','PostController@contact');


// Route::get('/contact', function () {
//     return view('contact');
// });


// use Illuminate\Support\Facades\DB;
// Route::get('/insert', function () {
//     DB::insert(
//         'insert into posts (title, body, user_id, omar, admin) values (?, ?, ?, ?, ?)',
//         ['php with laravel', 'my content', 100, 'ahmed gamal', 101]
//     );
// 
//     return 'inserted';
// });

use App\User;
use App\Post;       
use App\Country;
use App\Http\Controllers\PostController;
use App\Photo;
//
//   Route::get('/posts', function () {
// 
//    // كل الـ posts
//     $posts = Post::all();
// 
//    foreach ($posts as $post) {
//        echo $post->title;
//    }
// 
//    $posts = Post::orderBy('id', 'desc')->get();
//   return $posts;
// });



// Route::get('/basicinsert5', function () {
//     $post = new Post;
//     $post->title = 'Eloquent title insert5';
//     $post->body = 'Eloquent is really cool5';
//     $post->user_id = 5;
//     $post->omar = 'elmowafy';
//     $post->admin = 5;
//     $post->save();
//     return $post;
// });
//
// Route::get('/basicupdate20', function () {
// $post = Post::find(1);
// $post->body = 'Eloquent is really cool20';
// $post->save();
// return 'Post updated';
// });
//
// Route::get('/create', function () {
//    $post = Post::create([
    //    'title' => 'new post',
    //    'body' => 'new body',
    //    'user_id' => 33,
    //    'omar' => 'elmowafy',
    //    'admin' => 1,
//    ]);
//    return 'ok';
// });

//Post::where("id",1)->where('admin',0)->update([
//    'title' => 'Eloquent title update2',
//    'body'=>'Eloquent is really cool update2',
//]);





// CRUD APP 

Route::resource('/posts','PostController')

































// Route::get('delete', function () {
//     $post = Post::find(27);
//     $post = Post::find(23);
//     $post = Post::find(22);
//     $post = Post::find(1);
//     $post->delete();
//     return 'deleted';
// });

// Route::get('/trashed', function () {
//     $post = Post::withTrashed()
//     ->where('id', 1)
//     ->get();
//     return $post;
// });


// Route::get('/user/{id}/post', function ($id) {
// $user = user::find($id);
// return $user->post;
// });

// Route::get('/posts',function(){
//     $user =User::find(1);
    
//     foreach($user->posts as $post){
//     echo $post->title . "<br>" ;
//     }
// });


// Route::get('user/{id}/role',function($id){
//     $user = User::find($id);
//     foreach($user->roles as $role){
//         return $role->name;
//     }
// });


// Route::get('user/pivot',function(){
//     $user = User::find(1);
//     foreach($user->roles as $role){
//         return $role->pivot->created_at;
//     }
// });

// Route::get("/user/country",function(){
//     $country = Country::find(2);
//     foreach($country->posts as $post){
//         return $post->title;
//     }
// });


// Route::get("/user/photos",function(){
// $user = User::find(1);
// foreach($user->photos as $photo){
//     return $photo->path;
// }
// });

;