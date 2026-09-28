<?php

use App\Http\Controllers\testController;
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

// // Route::get('/contact','PostController@contact');
// Route::get('/contact', function () {
//     return view('contact');
// });
// use Illuminate\Support\Facades\DB;
// Route::get('/insert', function () {
//     DB::insert(
//         'insert into posts (title, body, user_id, omar, admin) values (?, ?, ?, ?, ?)',
//         ['php with laravel', 'my content', 1, 'omar', 0]
//     );

//     return 'inserted';
// });



use App\Post;

// Route::get('/posts', function () {

//     // كل الـ posts
//     $posts = Post::all();

//     foreach ($posts as $post) {
//         echo $post->title;
//     }

//   $posts = Post::where('id',2)->get()->orderBy('id','desc');
//   return $posts;

// // $posts = Post::where('count','<','100')->first();
// return $posts;
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

//  Route::get('/basicupdate20', function () {
//  $post = Post::find(1);
//  $post->body = 'Eloquent is really cool20';
//  $post->save();
//  return 'Post updated';
//  });

Route::get('/create', function () {
    $post = Post::create([
        'title' => 'Eloquent title insert',
        'body' => 'im learning form edwineducation',
        'user_id' => 2,
        'omar' => 'elmowafy',
        'admin' => 0,
    ]);
    return 'ok';
});

Post::where("id",1)->where('admin',0)->update([
    'title' => 'Eloquent title update2',
    'body'=>'Eloquent is really cool update2',
]);