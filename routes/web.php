<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\faqcontroller;
use App\Http\Controllers\Home\TestimonialController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home\aboutcontroller;
use App\Http\Controllers\portfoliocontroller;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
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
    return view('frontend.index');
})->name('home.index');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//Admin Controller
Route::middleware(['auth'])->group(function () {
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','destroy')->name('admin.logout');
    Route::get('/admin/profile','profile')->name('admin.profile');
    Route::get('/edit/profile','editprofile')->name('edit.profile');
    Route::post('/store/profile','storeprofile')->name('store.profile');
    Route::get('/change/password','changepassword')->name('change.password')->middleware('auth');
    Route::post('/update/password','updatepassword')->name('update.password');
});
});


//Testimonial Controller
Route::middleware(['auth'])->group(function () {
Route::controller(TestimonialController::class)->group(function(){
    Route::get('/testimonial/page','TestimonialPage')->name('home.addtestimonial');
    Route::post('/add/testimonial','AddTestimonial')->name('add.testimonial');
    Route::get('/edit/testimonial/{id}','EditTestimonial')->name('edit.testimonial');
    Route::post('/update/testimonial','UpdateTestimonialSlider')->name('update.testimonial');
    Route::get('/view/testimonial','ViewTestimonial')->name('home.viewtestimonial');
    Route::get('/delete/testimonial/{id}','DeleteTestimonial')->name('delete.testimonial');
});   
});

//About Controller
Route::controller(aboutcontroller::class)->group(function(){
    Route::get('/about/page','AboutPage')->name('home.about');
    Route::post('/update/about','UpdateAbout')->name('update.about');
    Route::get('/about','About')->name('frontend.about');
    
});


//Blog Controller

Route::controller(blogcontroller::class)->group(function(){
    Route::get('/blog','BlogPage')->name('frontend.blog');
    Route::get('/add/blogcategory','ShowBlogCategory')->name('add.blogcategory'); 
    Route::post('/store/blogcategory','AddBlogCategory')->name('store.blogcategory');
    Route::get('/view/blogcategory','ViewBlogCategory')->name('view.blogcategory');
    Route::get('/edit/blogcategory/{id}','EditBlogCategory')->name('edit.blogcategory'); 
    Route::post('/update/blogcategory','UpdateBlogCategory')->name('update.blogcategory'); 
    Route::get('/delete/blogcategory/{id}','DeleteBlogCategory')->name('delete.blogcategory');
    Route::get('/view/blog','ViewBlog')->name('view.blog');
    Route::get('/add/blog','AddBlog')->name('add.blog');
    Route::post('/store/blog','StoreBlog')->name('store.blog');
    Route::get('/edit/blog/{id}','EditBlog')->name('edit.blog');
    Route::post('/update/blog','UpdateBlog')->name('update.blog');
    Route::get('/delete/blog/{id}','DeleteBlog')->name('delete.blog');
    Route::get('/blog/details/{id}','ShowBlogDetails')->name('blog.details');
});



//FAQ Controller
Route::controller(faqcontroller::class)->group(function(){
    Route::get('/faq/page','FAQPage')->name('home.faq'); 
    Route::get('/add/faq','ShowFAQ')->name('add.faq'); 
    Route::post('/store/faq','AddFAQ')->name('store.faq');
    Route::get('/edit/faq/{id}','EditFAQ')->name('edit.faq');
    Route::post('/update/faq','UpdateFAQ')->name('update.faq');
    Route::get('/delete/faq/{id}','DeleteFAQ')->name('delete.faq');
    Route::get('/faq','FAQ')->name('frontend.faq');
});

//Portfolio Controller

Route::controller(portfoliocontroller::class)->group(function(){
    Route::get('/portfolio/page','PortfolioPage')->name('home.portfolio');
    Route::get('/portfolio/view','ViewPortfolio')->name('home.viewportfolio');
    Route::post('/add/portfolio','AddPortfolio')->name('add.portfolio');
    Route::get('/edit/portfolio/{id}','EditPortfolio')->name('edit.portfolio');
    Route::post('/store/portfolio/{id}','UpdatePortfolio')->name('store.portfolio');
    Route::get('/delete/portfolio/{id}','DeletePortfolio')->name('delete.portfolio');
    Route::post('/updatemore/portfolio/{id}','UpdateMorePortfolio')->name('update.portfolioimages');
    Route::get('/view/moreportfolio/{id}','ViewMoreImages')->name('view.moreimage');
    Route::get('/addmore/portfolio/{id}','AddMorePortfolio')->name('add.portfolioimages');
    Route::get('/delete/moreimage/{id}','DeleteMoreImages')->name('delete.moreimage');
    Route::get('/portfolio','Portfolio')->name('frontend.portfolio');
});


//Footer Controller
Route::controller(FooterController::class)->group(function(){
    Route::get('/footer/page','FooterPage')->name('home.footer');
    Route::post('/update/footer','UpdateFooter')->name('update.footer');
});

//contact Controller
Route::controller(ContactController::class)->group(function(){
    Route::get('/contact','Contact')->name('home.contact');
    Route::post('/store/message','StoreMessage')->name('store.contact');
    Route::get('/all/contact','ViewContact')->name('viewall.contact');
    Route::get('/delete/contact/{id}','DeleteContact')->name('delete.contact');
   
});

require __DIR__.'/auth.php';
