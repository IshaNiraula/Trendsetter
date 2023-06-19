<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectCatController;
use App\Http\Controllers\MediaFileController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\CarrierFormController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PageVisitController;
use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\MetaTagsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VisaController;

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

Route::get('/', [PageController::class, 'homePage'])->name('home');
Route::get('/login', [PageController::class, 'loginPage'])->middleware('alreadyLoggedIn');
Route::get('/register', [PageController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'registerAdmin'])->name('register.admin');
Route::post('/login', [AuthController::class, 'loginAdmin'])->name('login.admin');
Route::get('/logout', [AuthController::class, 'logoutAdmin']);
Route::get('service', [PageController::class, 'servicePage'])->name('service');
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/visa/{slug}', [VisaController::class, 'show'])->name('visa.show');
Route::get('/blog', [PageController::class, 'blogPage'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/gallery', [PageController::class, 'galleryPage'])->name('gallery');
Route::get('/gallery/{slug}', [PageController::class, 'galleryImage'])->name('gallery.show');
Route::get('/about', [PageController::class, 'aboutPage'])->name('about');
Route::get('/contact', [PageController::class, 'contactPage'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/career', [PageController::class, 'carrierPage'])->name('carrier');
Route::post('/career', [CarrierFormController::class, 'store'])->name('carrier.upload');
Route::get('/thank-you', [PageController::class, 'thankYouPage']);
Route::get('/length-converter', [PageController::class, 'lengthConverter'])->name('length.converter');
Route::get('/projects', [PageController::class, 'projectPage'])->name('projects');
Route::get('/events', [PageController::class, 'eventPage'])->name('event');
Route::get('/event/{slug}', [PageController::class, 'eventDetailPage'])->name('event.show');
Route::get('/academics', [PageController::class, 'academicPage'])->name('academics');
Route::get('/academic/{slug}', [PageController::class, 'academicDetailPage'])->name('academic.show');

Route::get('/graduate-addmission', [PageController::class, 'graduateAddmissionPage'])->name('graduateAddmission');


Route::middleware('isLoggedIn')->name('admin.')->group(function () {
    Route::get('/admin/dashboard', [PageController::class, 'dashboard']);



    //slider controller
    Route::get('/admin/slider/list', [SliderController::class, 'index'])->name('slider.list');
    Route::get('/admin/slider/add', [SliderController::class, 'create'])->name('slider.add');
    Route::post('/admin/slider/add', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/admin/slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/admin/slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::post('/admin/slider/delete/{id}', [SliderController::class, 'destroy'])->name('slider.delete');


    //service controller
    Route::get('/admin/service/list', [ServiceController::class, 'index'])->name('service.list');
    Route::get('/admin/service/add', [ServiceController::class, 'create'])->name('service.add');
    Route::post('/admin/service/add', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/admin/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('/admin/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::post('/admin/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');
    Route::post('/upload_service_editor_image', [ServiceController::class, 'serviceEditorUpload'])->name('service.editor.upload');

    //visa controller
    Route::get('/admin/visa/list', [VisaController::class, 'index'])->name('visa.list');
    Route::get('/admin/visa/add', [VisaController::class, 'create'])->name('visa.add');
    Route::post('/admin/visa/add', [VisaController::class, 'store'])->name('visa.store');
    Route::get('/admin/visa/edit/{id}', [VisaController::class, 'edit'])->name('visa.edit');
    Route::post('/admin/visa/update/{id}', [VisaController::class, 'update'])->name('visa.update');
    Route::post('/admin/visa/delete/{id}', [VisaController::class, 'destroy'])->name('visa.delete');
    Route::post('/upload_visa_editor_image', [VisaController::class, 'visaEditorUpload'])->name('visa.editor.upload');

    //blog controller
    Route::get('/admin/blog/list', [BlogController::class, 'index'])->name('blog.list');
    Route::get('/admin/blog/add', [BlogController::class, 'create'])->name('blog.add');
    Route::post('/admin/blog/add', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/admin/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/admin/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::post('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
    Route::post('/upload_blog_editor_image', [BlogController::class, 'blogEditorUpload'])->name('blog.editor.upload');

    //gallery controller
    Route::get('/admin/gallery/list', [GalleryController::class, 'index'])->name('gallery.list');
    Route::get('/admin/gallery/image/{album_slug}', [GalleryController::class, 'galleryImage'])->name('gallery.image');
    Route::get('/admin/gallery/add', [GalleryController::class, 'create'])->name('gallery.add');
    Route::post('/admin/gallery/add', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/admin/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/admin/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::post('/admin/gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');
    Route::post('/admin/gallery/image/delete/{id}', [GalleryController::class, 'deleteImage'])->name('gallery.image.delete');
    Route::get('/admin/gallery/add-more/{slug}', [GalleryController::class, 'addMoreImage'])->name('gallery.image.add_more.get');
    Route::post('/admin/gallery/add-more/{album_slug}', [GalleryController::class, 'addMoreImageUpdate'])->name('gallery.image.add_more.update');

    //category controller
    Route::get('/admin/category/list', [ProjectCatController::class, 'index'])->name('category.list');
    Route::get('/admin/category/add', [ProjectCatController::class, 'create'])->name('category.add');
    Route::post('/admin/category/add', [ProjectCatController::class, 'store'])->name('category.store');
    Route::get('/admin/category/edit/{slug}', [ProjectCatController::class, 'edit'])->name('category.edit');
    Route::post('/admin/category/update/{id}', [ProjectCatController::class, 'update'])->name('category.update');
    Route::post('/admin/category/delete/{id}', [ProjectCatController::class, 'destroy'])->name('category.delete');

    Route::get('/admin/media/list', [MediaFileController::class, 'index'])->name('media.list');
    Route::get('/admin/media/add', [MediaFileController::class, 'create'])->name('media.add');
    Route::post('/admin/media/add', [MediaFileController::class, 'store'])->name('media.store');
    Route::get('/admin/media/edit/{slug}', [MediaFileController::class, 'edit'])->name('media.edit');
    Route::post('/admin/media/update/{id}', [MediaFileController::class, 'update'])->name('media.update');
    Route::post('/admin/media/delete/{id}', [MediaFileController::class, 'destroy'])->name('media.delete');

    Route::get('/admin/project/list', [ProjectController::class, 'index'])->name('project.list');
    Route::get('/admin/project/add', [ProjectController::class, 'create'])->name('project.add');
    Route::post('/admin/project/add', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/admin/project/edit/{slug}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/admin/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::post('/admin/project/delete/{id}', [ProjectController::class, 'destroy'])->name('project.delete');
    Route::post('/upload_project_editor_image', [ProjectController::class, 'projectEditorUpload'])->name('project.editor.upload');

    //faq
    Route::get('/admin/faq/list', [FAQController::class, 'index'])->name('faq.list');
    Route::get('/admin/faq/add', [FAQController::class, 'create'])->name('faq.add');
    Route::post('/admin/faq/add', [FAQController::class, 'store'])->name('faq.store');
    Route::get('/admin/faq/edit/{id}', [FAQController::class, 'edit'])->name('faq.edit');
    Route::post('/admin/faq/update/{id}', [FAQController::class, 'update'])->name('faq.update');
    Route::post('/admin/faq/delete/{id}', [FAQController::class, 'destroy'])->name('faq.delete');

    //carrier
    Route::get('/admin/career/list', [CarrierController::class, 'index'])->name('carrier.list');
    Route::get('/admin/career/add', [CarrierController::class, 'create'])->name('carrier.add');
    Route::post('/admin/career/add', [CarrierController::class, 'store'])->name('carrier.store');
    Route::get('/admin/career/edit/{id}', [CarrierController::class, 'edit'])->name('carrier.edit');
    Route::post('/admin/career/update/{id}', [CarrierController::class, 'update'])->name('carrier.update');
    Route::post('/admin/career/delete/{id}', [CarrierController::class, 'destroy'])->name('carrier.delete');

    //testimonial
    Route::get('/admin/testimonial/list', [TestimonialController::class, 'index'])->name('testimonial.list');
    Route::get('/admin/testimonial/add', [TestimonialController::class, 'create'])->name('testimonial.add');
    Route::post('/admin/testimonial/add', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('/admin/testimonial/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/admin/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::post('/admin/testimonial/delete/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.delete');

    //team
    Route::get('/admin/team/list', [TeamController::class, 'index'])->name('team.list');
    Route::get('/admin/team/add', [TeamController::class, 'create'])->name('team.add');
    Route::post('/admin/team/add', [TeamController::class, 'store'])->name('team.store');
    Route::get('/admin/team/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/admin/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::post('/admin/team/delete/{id}', [TeamController::class, 'destroy'])->name('team.delete');

    //career form lists
    Route::get('/admin/career/form/list', [CarrierFormController::class, 'index'])->name('carrier.form.list');
    Route::post('/admin/career/form/delete/{id}', [CarrierFormController::class, 'destroy'])->name('carrier.form.delete');

    //contact form
    Route::get('/admin/contact/list', [ContactController::class, 'index'])->name('contact.list');
    Route::post('/admin/contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');

    //metatags
    Route::get('/admin/metatag/list', [MetaTagsController::class, 'index'])->name('metatag.list');
    Route::get('/admin/metatag/add', [MetaTagsController::class, 'create'])->name('metatag.add');
    Route::post('/admin/metatag/add', [MetaTagsController::class, 'store'])->name('metatag.store');
    Route::get('/admin/metatag/edit/{id}', [MetaTagsController::class, 'edit'])->name('metatag.edit');
    Route::post('/admin/metatag/update/{id}', [MetaTagsController::class, 'update'])->name('metatag.update');
    Route::post('/admin/metatag/delete/{id}', [MetaTagsController::class, 'destroy'])->name('metatag.delete');

    //metatags
    Route::get('/admin/partner/list', [PartnerController::class, 'index'])->name('partner.list');
    Route::get('/admin/partner/add', [PartnerController::class, 'create'])->name('partner.add');
    Route::post('/admin/partner/add', [PartnerController::class, 'store'])->name('partner.store');
    Route::post('/admin/partner/delete/{id}', [PartnerController::class, 'destroy'])->name('partner.delete');

    //events
    Route::get('/admin/event/list', [EventController::class, 'index'])->name('event.list');
    Route::get('/admin/event/add', [EventController::class, 'create'])->name('event.add');
    Route::post('/admin/event/add', [EventController::class, 'store'])->name('event.store');
    Route::get('/admin/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
    Route::post('/admin/event/update/{id}', [EventController::class, 'update'])->name('event.update');
    Route::post('/admin/event/delete/{id}', [EventController::class, 'destroy'])->name('event.delete');
    Route::post('/upload_event_editor_image', [EventController::class, 'eventEditorUpload'])->name('event.editor.upload');
});

Route::post('/page/visit/{page}', [PageVisitController::class, 'store'])->name('page.visit');
Route::post('captcha-validation', [CaptchaController::class, 'capthcaFormValidate']);
Route::get('refresh-captcha', [CaptchaController::class, 'refreshCaptcha'])->name('refreshCaptcha');
