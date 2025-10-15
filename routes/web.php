<?php

use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

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

// Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

Route::get('/botman', [BotManController::class, 'handle']);
Route::post('/botman', [BotManController::class, 'handle']);

Route::get('/ads.txt', function () {
    return view('ads');
});

// Route::get('/adsusual', function () {
//     $content = view('ads');
//     return response($content, 200)
//         ->header('content-Type', 'text');
// });


Route::get('/migrate-fresh', function () {
    // Artisan::call('vendor:publish');
    Artisan::call('optimize:clear');
    Artisan::call('config:clear');
    Artisan::call('migrate:fresh', ['--seed' => true]);

    return 'Migration and seeding has been succeed, click <a href="/">here</a> to return to home page';
});

Route::get('/xdown/{view}', function ($view) {
    Artisan::call('down', ['--secret' => 'devmode', '--render' => 'errors.' . $view]);

    return 'Web Down with command view: ' . $view;
});




Route::get('/xup', function () {
    Artisan::call('up');
    return 'Web Up';
});

Route::group(['middleware' => ['web']], function () {
    // your routes here

    Route::get('/visitor', [App\Http\Controllers\Visitor\DashboardController::class, 'index'])->name('visitor.index');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing.index');

    Route::get('/contact', function () {
        return view('landing.contact', [
            'title' => 'Contact - Pandan View Mandeh',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919'
        ]);
    });


    Route::get('/privacy-policy', function () {
        return view('landing.privacypolicy', [
            'title' => 'Privacy Policy - Pandan View Mandeh',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919'
        ]);
    });

    Route::get('/gallery', function () {

        $galleries = \App\Models\Gallery::all();

        // return $galleries;
        $galleries = $galleries->shuffle();

        $filterTags = $galleries->pluck('filter_tag')->unique();
        return view('landing.gallery', [
            'title' => 'Gallery Pandan View Mandeh',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'galleries' =>  $galleries,
            'filterTags' =>  $filterTags,
        ]);
    });

    Route::get('/aboutus', function () {

        return view('landing.aboutus', [
            'title' => 'Pandan View Mandeh - About Us',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919'
        ]);
    });

    Route::get('/service/{slug}', function ($slug) {

        $service = \App\Models\Services::where('slug', $slug)->first();
        $products = \App\Models\Products::where('id_service', $service->id_service)->get();

        return view('landing.service-detail', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'service' =>  $service,
            'products' =>  $products
        ]);
    });

    Route::get('/all-services', function () {
        $services = \App\Models\Services::where('listed', 'yes')->get();

        return view('landing.all-services', [
            'title' => 'Pandan View Mandeh - Semua Layanan',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'services' =>  $services
        ]);
    });

    Route::get('/blog', function (Request $request) {

        if ($request->has('search')) {
            $search = $request->input('search');
            $posts = \App\Models\Post::where('title', 'LIKE', "%{$search}%")
                ->orWhere('desc', 'LIKE', "%{$search}%")->orderBy('created_at', 'DESC')->paginate(4);
        } elseif ($request->has('category')) {
            $search = $request->input('category');
            $posts = \App\Models\Post::whereHas('category', function($q) use($search) {
                $q->where('slug', $search);
            })->orderBy('created_at', 'DESC')->paginate(4);
        } elseif ($request->has('tag')) {
            $search = $request->input('tag');
            $posts = \App\Models\Post::whereHas('tags', function($q) use($search) {
                $q->where('slug', $search);
            })->orderBy('created_at', 'DESC')->paginate(4);
        }else {
            $posts = \App\Models\Post::orderBy('created_at', 'DESC')->paginate(4);
        }

        $categories = \App\Models\Category::withCount('posts')->get();
        $tags = \App\Models\Tag::all();

        $recent_posts = \App\Models\Post::orderBy('created_at', 'DESC')->take(5)->get();

        return view('landing.blog', [
            'title' => 'Blog Pandan View Mandeh',
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'categories' =>  $categories,
            'posts' => $posts,
            'recent_posts' => $recent_posts,
            'tags' => $tags
        ]);
    });

    Route::get('post/{slug}', function(Request $request, $slug) {
        $post = \App\Models\Post::where('slug', $slug)->first();

        $cookie_name = (\Str::replace('.','',($request->ip())).'-'. $post->id);

        $cookie = \Cookie::get($cookie_name);
        if($cookie == ''){//check if cookie is set
            $cookie = cookie($cookie_name, '1', 60);//set the cookie
            $post->incrementReadCount();//count the view
        } 

        if($post->showPost()){// this will test if the user viwed the post or not
            // return $post;
        } else {
            \App\Models\PostView::createViewLog($post);
        }

        $categories = \App\Models\Category::withCount('posts')->get();
        $tags = \App\Models\Tag::all();
        $recent_posts = \App\Models\Post::take(5)->get();
        return view('landing.post', [
            'accountfb' => 'pandanviewmandeh',
            'account' => 'pandanviewmandeh',
            'channel' =>  '@pandanviewmandehofficial4919',
            'categories' =>  $categories,
            'recent_posts' => $recent_posts,
            'tags' => $tags,
            'post' => $post
        ])->withCookie($cookie);//store the cookie;

    });

    Route::get('/lang/home', [App\Http\Controllers\LangController::class, 'index']);
    Route::get('/lang/change', [App\Http\Controllers\LangController::class, 'change'])->name('changeLang');

    Route::post('/messages/store', [\App\Http\Controllers\Visitor\MessageController::class, 'store'])->name('messages.store');;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

Route::get('/information/services', [\App\Http\Controllers\Admin\ServicesController::class, 'index'])->name('services.index');
Route::post('/information/services/store', [\App\Http\Controllers\Admin\ServicesController::class, 'store']);

Route::get('/information/products', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('products.index');
Route::post('/information/products/store', [\App\Http\Controllers\Admin\ProductController::class, 'store']);

Route::get('/information/galleries', [\App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('galleries.index');
Route::post('/information/galleries/store', [\App\Http\Controllers\Admin\GalleryController::class, 'store']);

Route::get('/information/carousels', [\App\Http\Controllers\Admin\CarouselController::class, 'index'])->name('carousels.index');
Route::post('/information/carousels/store', [\App\Http\Controllers\Admin\CarouselController::class, 'store']);

Route::get('/information/testimonies', [\App\Http\Controllers\Admin\TestimonyController::class, 'index'])->name('testimonies.index');
Route::post('/information/testimonies/store', [\App\Http\Controllers\Admin\TestimonyController::class, 'store']);




Route::get('/data/messages', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('messages.admin.index');

Route::get('/data/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');
Route::post('/data/users/store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('users.store');
Route::delete('/data/users/{id}/destroy', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('users.destroy');

Route::get('/data/roles', [\App\Http\Controllers\Admin\RoleController::class, 'index'])->name('roles.index');
Route::post('/data/roles/store', [\App\Http\Controllers\Admin\RoleController::class, 'store'])->name('roles.store');
Route::delete('/data/roles/{id}/destroy', [\App\Http\Controllers\Admin\RoleController::class, 'destroy'])->name('roles.destroy');



Route::resource('/blog/categories', App\Http\Controllers\CategoryController::class);
Route::resource('/blog/tags', App\Http\Controllers\TagController::class);
// Manage Posts
Route::get('/blog/posts/trash', [App\Http\Controllers\PostController::class, 'trash'])->name('posts.trash');
Route::post('/blog/posts/trash/{id}/restore', [App\Http\Controllers\PostController::class, 'restore'])->name('posts.restore');
Route::delete('blog/posts/{id}/delete-permanent', [App\Http\Controllers\PostController::class, 'deletePermanent'])->name('posts.deletePermanent');
Route::resource('/blog/posts', App\Http\Controllers\PostController::class);
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');

// Route::resource('reservations', App\Http\Controllers\Admin\ReservationController::class);

Route::get('/reservations/{yearMonth?}', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('reservations.index');
Route::post('/reservations/store', [\App\Http\Controllers\Admin\ReservationController::class, 'store'])->name('reservations.store');
Route::delete('/reservations/destroy/{id_reservation}', [\App\Http\Controllers\Admin\ReservationController::class, 'destroy'])->name('reservations.destroy');

Route::get('/deleted-reservations/{yearMonth?}', [\App\Http\Controllers\Admin\ReservationController::class, 'deleted'])->name('reservations.deleted');
Route::delete('/reservations/restore/{id_reservation}', [\App\Http\Controllers\Admin\ReservationController::class, 'restore'])->name('reservations.restore');


Route::get('/reservation/audits/{id_reservation}', function ($id_reservation) {
    $res = \App\Models\Reservation::where('id_reservation', $id_reservation)->withTrashed()->first();
    $all = $res->audits()->with('user')->get();
    return $all;
});



Route::get('/audits', [\App\Http\Controllers\Admin\AuditController::class, 'index'])->name('audits.index');
Route::get('/audits/fetch/{id_reservation}', [\App\Http\Controllers\Admin\AuditController::class, 'fetch'])->name('audits.fetch');
