<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\SitemapController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Models\Product;
use Spatie\Sitemap\Tags\Url;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    //Front end routes, User experience
    Route::get('/', function(){
        $products = Product::orderBy('id', 'asc')->get();
        return view("front.landing", compact('products'));
    })->name('frontHome');
    Route::get('/terms', function(){return view("front.terms");})->name('terms');
    Route::get('/products', function(){return view("front.products");})->name('front.products');
    Route::get('/team', function(){return view("front.teamTraining");})->name('front.team');
    Route::get('/contact', function(){return view("front.contact");})->name('front.contact');
    Route::get('/faq', function(){return view("front.faq");})->name('front.faq');
    Route::get('/consulting', function(){return view("front.consulting");})->name('front.consulting');
    Route::get('/verify/certificate', function(){return view("front.verify");})->name('front.verify');
    Route::get('/cookies', function(){return view("front.cookies");})->name('front.cookies');
    Route::get('/product/{product:slug}', [App\Http\Controllers\ProductController::class, 'show'])->name('front.product');
    Route::get('/infoPdf', function(){
      $path = "pdf/info.pdf";
      return response()->download($path, 'info.pdf');
    })->name('infoPdf');


    Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('front.blog');
    Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('front.show.blog');
    Route::post('/verify-certificate', [CertificateController::class, 'verify'])->name('certificate.verify');

require __DIR__ . '/auth.php';
Route::group(['middleware'=>'auth'], function () {
    Route::get('/home', [\App\Http\Controllers\AdminDashboardController::class,'simpleUserIndex'])->name('home');


    Route::get('/profile',[App\Http\Controllers\ProfileController::class,'show'])->name('admin.en.profile');
    Route::put('/profile/store/image',[App\Http\Controllers\ProfileController::class,'storeImage'])->name('store.profileImg');

    Route::get('/cart', [App\Http\Controllers\BasketController::class,'index'])->name('basket.index');
    Route::get('/cart/get', [App\Http\Controllers\BasketController::class,'getCartItems'])->name('basket.get');
    Route::post('/cart/add/', [App\Http\Controllers\BasketController::class,'store'])->name('basket.store');
    Route::delete('/cart/delete/{item}', [App\Http\Controllers\BasketController::class,'destroy'])->name('basket.delete');
    Route::post('/add/cart', [App\Http\Controllers\BasketController::class,'store'])->name('basket.add');
    Route::put('/cart/update/{item}', [App\Http\Controllers\BasketController::class,'update'])->name('update.cart');
    Route::post('/cart/add/discount', [App\Http\Controllers\BasketController::class,'applyDiscount'])->name('add.discount');
    Route::post('/cart/clear/discount', [App\Http\Controllers\BasketController::class,'removeDiscount'])->name('remove.discount');

    Route::get('/packages', [App\Http\Controllers\PackageController::class, 'index'])->name('package.index');
    Route::get('/share/packages/{id}', [App\Http\Controllers\PackageController::class, 'share'])->name('package.share');
    Route::post('/share/package/{id}', [App\Http\Controllers\PackageController::class, 'sharePackage'])->name('package.share.store');
    Route::put('/status/package/{id}', [App\Http\Controllers\PackageController::class, 'changeStatus'])->name('package.status');
    Route::delete('/delete/package/{id}', [App\Http\Controllers\PackageController::class, 'destroy'])->name('package.delete');

    Route::get('/course/{id}', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');
    Route::get('/certificates', [App\Http\Controllers\CertificateController::class, 'index'])->name('certificate.index');
    Route::post('/certificate/create/{id}', [App\Http\Controllers\CertificateController::class, 'store'])->name('certificate.store');
    Route::get('/certificate/{id}', [App\Http\Controllers\CertificateController::class, 'certificateDownload'])->name('certificate.download');
    Route::get('/certificate/practice/{id}', [App\Http\Controllers\CertificateController::class, 'certificateDownloadPractice'])->name('certificate.download.practice');



    Route::get('/controller/payment/management',[App\Http\Controllers\EmployeeController::class,'controller'])->name('controller.payment.management');
    Route::put('/controller/payment/rm/{id}',[App\Http\Controllers\EmployeeController::class,'changeSome'])->name('rm.us');

    Route::post('/payment', [App\Http\Controllers\CheckoutController::class,'setPayment']);

     Route::get('/payment/success', function(){
            return view('pages.back.payment');
        })->name('success.payment');

    Route::put('/password/update/{id}', [App\Http\Controllers\ProfileController::class,'update'])->name('password.dashboard.update');
    Route::get('/search/employees', [App\Http\Controllers\UserController::class,'searchEmployees'])->name('user.search.employees');

    Route::get('/checkout', [App\Http\Controllers\CheckoutController::class,'index'])->name('checkout.index');
    Route::get('/checkout/index', [App\Http\Controllers\CheckoutController::class,'indexS'])->name('checkout.index.secret');


    Route::get('/dashboard/employer', [App\Http\Controllers\EmployeeController::class,'index'])->name('dashboard.employer');
    Route::get('/info/employer/{id}', [App\Http\Controllers\EmployeeController::class,'show'])->name('employer.info');
    Route::get('/info/employer/employee/{id}', [App\Http\Controllers\EmployeeController::class,'showEmployee'])->name('employer.employee');
    Route::delete('/delete/employer/{id}', [App\Http\Controllers\EmployeeController::class,'destroy'])->name('delete.employer');
    Route::get('/employer/consulting', function(){
        return view('pages.back.consulting');
    })->name('admin.consulting');
    Route::get('/register/employee', [App\Http\Controllers\EmployeeController::class,'create'])->name('register.employee');
    Route::post('/register/employee/store', [App\Http\Controllers\EmployeeController::class,'store'])->name('register.employee.store');
    Route::post('/register/employee/to/user/store', [App\Http\Controllers\EmployeeController::class,'storeToUser'])->name('register.employee.storeToUser');
    Route::delete('/delete/employee/{id}', [App\Http\Controllers\EmployeeController::class,'destroy'])->name('employee.delete');

    Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('order.index.user');
    Route::post('/order/items', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
    Route::get('/invoice/{id}', [App\Http\Controllers\InvoiceController::class, 'download'])->name('invoice.download');
    Route::delete('/orders/delete/{id}', [App\Http\Controllers\OrderController::class, 'destroy'])->name('order.delete');

    Route::middleware(['is_admin'])->group(function () {
        Route::get('/admin/dashboard', [\App\Http\Controllers\AdminDashboardController::class,'index'])->name('admin.dashboard');

        Route::get('/search/all/employees', [App\Http\Controllers\UserController::class,'searchAllEmployees'])->name('user.search.all.employees');
        Route::get('/admin/users', [App\Http\Controllers\UserController::class,'index'])->name('users.index');
        Route::get('/admin/search/user', [App\Http\Controllers\UserController::class,'searchUser'])->name('user.search');
        Route::get('/admin/info/user/{id}', [App\Http\Controllers\UserController::class,'show'])->name('user.info');
        Route::delete('/admin/delete/user/{id}', [App\Http\Controllers\UserController::class,'destroy'])->name('user.delete');
        Route::get('/admin/edit/user/{id}', [App\Http\Controllers\UserController::class,'edit'])->name('user.edit');
        Route::put('/admin/update/user/{id}', [App\Http\Controllers\UserController::class,'update'])->name('user.update');
        Route::get('/search/user', [App\Http\Controllers\UserController::class,'searchUser'])->name('user.admin.search');
        Route::post('/admin/existing/employee', [App\Http\Controllers\UserController::class,'addExistingEmployee'])->name('user.admin.exist');

        Route::get('/admin/blogs', [App\Http\Controllers\BlogController::class,'adminIndex'])->name('admin.blogs.index');
        Route::delete('/admin/delete/blogs/{id}', [App\Http\Controllers\BlogController::class,'destroy'])->name('blog.delete');
        Route::get('/admin/edit/blog/{id}', [App\Http\Controllers\BlogController::class,'edit'])->name('blog.edit');
        Route::put('/admin/update/blog/{id}', [App\Http\Controllers\BlogController::class,'update'])->name('blog.update');
        Route::get('/admin/create/blog', [App\Http\Controllers\BlogController::class,'create'])->name('blog.create');
        Route::post('/admin/add/blog', [App\Http\Controllers\BlogController::class,'store'])->name('blog.store');
        Route::get('/admin/info/blog/{id}', [App\Http\Controllers\BlogController::class,'showAdmin'])->name('blog.info');
        Route::get('/admin/search/blog', [App\Http\Controllers\BlogController::class,'searchBlog'])->name('blog.search');

        Route::get('/admin/orders', [App\Http\Controllers\OrderController::class,'allOrders'])->name('orders.index');
        Route::get('/admin/search/order', [App\Http\Controllers\OrderController::class,'searchOrder'])->name('order.search');
        Route::delete('/admin/orders/delete/{id}', [App\Http\Controllers\OrderController::class,'adminDeleteOrder'])->name('order.admin.delete');
        Route::get('/admin/edit/order/{id}', [App\Http\Controllers\OrderController::class,'edit'])->name('order.edit');
        Route::put('/admin/update/order/{id}', [App\Http\Controllers\OrderController::class,'update'])->name('order.update');


        Route::get('/admin/packages', [App\Http\Controllers\PackageController::class,'getAllPackages'])->name('packages.admin.index');
        Route::delete('/admin/packages/delete/{id}', [App\Http\Controllers\PackageController::class,'destroy'])->name('packages.admin.delete');
        Route::post('/admin/add/packages', [App\Http\Controllers\PackageController::class,'store'])->name('packages.admin.add');
        Route::get('/admin/search/packages', [App\Http\Controllers\PackageController::class,'searchPackage'])->name('packages.admin.search');
        Route::get('/admin/edit/package/{id}', [App\Http\Controllers\PackageController::class,'edit'])->name('packages.admin.edit');
        Route::get('/admin/edit/packageOwner/{id}', [App\Http\Controllers\PackageController::class,'editOwner'])->name('packages.admin.owner');
        Route::put('/admin/update/package/{id}', [App\Http\Controllers\PackageController::class,'update'])->name('packages.admin.update');
        Route::put('/admin/updateOwner/package/{id}', [App\Http\Controllers\PackageController::class,'updateOwner'])->name('packages.admin.updateOwner');

        Route::get('/admin/certificates', [App\Http\Controllers\CertificateController::class,'getAllCertificates'])->name('certificates.admin.index');
        Route::delete('/admin/certificate/delete/{id}', [App\Http\Controllers\CertificateController::class,'destroy'])->name('certificates.admin.delete');
        Route::get('/admin/search/certificate', [App\Http\Controllers\CertificateController::class,'searchCertificate'])->name('certificates.admin.search');

        Route::get('/search', [App\Http\Controllers\UserController::class,'search'])->name('user.search');

        Route::get('/add/product', [App\Http\Controllers\ProductController::class,'create'])->name('admin.create.product');
        Route::post('/add/product', [App\Http\Controllers\ProductController::class,'store'])->name('admin.add.product');
        Route::get('/edit/product/{product}', [App\Http\Controllers\ProductController::class, 'edit'])->name('admin.edit.product');
        Route::post('/update/product/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('admin.update.product');

    });

});

Route::get('/inv', function(){return view("pages.invoice");});
Route::get('/buttons', function(){return view("ui.grid");});

use App\Http\Controllers\SocialiteController;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;

Route::get('/login/google', [SocialiteController::class, 'redirectToGoogle'])->name('google');
Route::get('/login/google/callback', [SocialiteController::class, 'handleGoogleCallback']);


Route::get('/generate-sitemap', function () {

    $sitemap = Sitemap::create();

    // Static pages
    $sitemap->add(Url::create(route('frontHome')));
    $sitemap->add(Url::create(route('terms')));
    $sitemap->add(Url::create(route('front.products')));
    $sitemap->add(Url::create(route('front.team')));
    $sitemap->add(Url::create(route('front.contact')));
    $sitemap->add(Url::create(route('front.faq')));
    $sitemap->add(Url::create(route('front.consulting')));
    $sitemap->add(Url::create(route('front.verify')));
    $sitemap->add(Url::create(route('front.cookies')));
    $sitemap->add(Url::create(route('front.blog')));
    $sitemap->add(Url::create('https://www.manualhandling-ireland.com/product/manual-handling'));
//    // Products (dynamic)
//    Product::all()->each(function ($product) use ($sitemap) {
//        $sitemap->add(
//            Url::create(route('front.product', $product->slug))
//                ->setLastModificationDate($product->updated_at)
//        );
//    });

    // Blogs (dynamic)
    Blog::all()->each(function ($blog) use ($sitemap) {
        $sitemap->add(
            Url::create(route('front.show.blog', $blog->slug))
                ->setLastModificationDate($blog->updated_at)
        );
    });

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return '✅ Sitemap generated successfully!';
});
