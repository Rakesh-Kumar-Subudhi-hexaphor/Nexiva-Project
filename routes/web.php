<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\BreadcrumbController;
use App\Http\Controllers\admin\CareerInquiryController;
use App\Http\Controllers\admin\CasestudyController;
use App\Http\Controllers\admin\CertificationController;
use App\Http\Controllers\admin\CollaboratorController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\IndustryServeController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\NewsletterController;
use App\Http\Controllers\admin\PolicyController;
use App\Http\Controllers\admin\SeoController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\SolutionController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/career-post-store', [CareerInquiryController::class, 'store'])->name('career.post.store');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/detail/{slug}', [PageController::class, 'blogDetail'])->name('blog.detail');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/service/detail/{slug}', [PageController::class, 'serviceDetail'])->name('service.detail');
Route::get('/solution', [PageController::class, 'solution'])->name('solution');
Route::get('/solution/detail/{slug}', [PageController::class, 'solutionDetail'])->name('solution.detail');
Route::get('/casestudy', [PageController::class, 'casestudy'])->name('casestudy');
Route::get('/casestudy/detail/{slug}', [PageController::class, 'casestudyDetail'])->name('casestudy.detail');
Route::get('/job', [PageController::class, 'job'])->name('job');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/policy/{slug}', [PageController::class, 'policy'])->name('policy');
Route::get('/industry-serve', [PageController::class, 'industryServe'])->name('industry-serve');
Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletter.subscribe');


Route::get('/admin/login', [AuthController::class, 'loginView'])->name('admin.login');
Route::post('admin/login', [AuthController::class, 'adminLogin']);
Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

    //admin
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/create', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');


    Route::get('/admin/role', [RoleController::class, 'index'])->name('admin.role')->middleware('permission:role_view');
    Route::post('/admin/role/store', [RoleController::class, 'store'])->name('admin.role.store')->middleware('permission:role_create');
    Route::get('/admin/permission/{id}', [RoleController::class, 'permissionView'])->name('admin.permissions')->middleware('permission:role_permission');
    Route::post('/admin/permission/update/{id}', [RoleController::class, 'update'])->name('admin.permissions.update')->middleware('permission:role_permission');
    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user')->middleware('permission:user_view');
    Route::get('/admin/user/create', [UserController::class, 'create'])->name('admin.user.create')->middleware('permission:user_create');
    Route::post('/admin/user/store', [UserController::class, 'store'])->name('admin.user.store')->middleware('permission:user_create');
    Route::get('/admin/user/edit/{admin}', [UserController::class, 'edit'])->name('admin.user.edit')->middleware('permission:user_edit');
    Route::post('/admin/user/update/{admin}', [UserController::class, 'update'])->name('admin.user.update')->middleware('permission:user_edit');

    //Breadcrumb
    Route::get('/admin/breadcrumb', [BreadcrumbController::class, 'index'])->name('admin.breadcrumb');
    Route::get('/admin/breadcrumb/create', [BreadcrumbController::class, 'create'])->name('admin.breadcrumb.create');
    Route::post('/admin/breadcrumb/store', [BreadcrumbController::class, 'store'])->name('admin.breadcrumb.store');
    Route::get('/admin/breadcrumb/edit/{id}', [BreadcrumbController::class, 'show'])->name('admin.breadcrumb.edit');
    Route::post('/admin/breadcrumb/update/{id}', [BreadcrumbController::class, 'update'])->name('admin.breadcrumb.update');
    Route::get('/admin/breadcrumb/delete/{id}', [BreadcrumbController::class, 'destroy'])->name('admin.breadcrumb.delete');

    //Seo
    Route::get('/admin/seo', [SeoController::class, 'index'])->name('admin.seo');
    Route::get('/admin/seo/create', [SeoController::class, 'create'])->name('admin.seo.create');
    Route::post('/admin/seo/store', [SeoController::class, 'store'])->name('admin.seo.store');
    Route::get('/admin/seo/edit/{id}', [SeoController::class, 'show'])->name('admin.seo.edit');
    Route::post('/admin/seo/update/{id}', [SeoController::class, 'update'])->name('admin.seo.update');
    Route::get('/admin/seo/delete/{id}', [SeoController::class, 'destroy'])->name('admin.seo.delete');

    //Policy
    Route::get('/admin/policy', [PolicyController::class, 'index'])->name('admin.policy');
    Route::get('/admin/policy/create', [PolicyController::class, 'create'])->name('admin.policy.create');
    Route::post('/admin/policy/store', [PolicyController::class, 'store'])->name('admin.policy.store');
    Route::get('/admin/policy/edit/{id}', [PolicyController::class, 'show'])->name('admin.policy.edit');
    Route::post('/admin/policy/update/{id}', [PolicyController::class, 'update'])->name('admin.policy.update');
    Route::get('/admin/policy/delete/{id}', [PolicyController::class, 'destroy'])->name('admin.policy.delete');

    //Job
    Route::get('/admin/job', [JobController::class, 'index'])->name('admin.job');
    Route::get('/admin/job/create', [JobController::class, 'create'])->name('admin.job.create');
    Route::post('/admin/job/store', [JobController::class, 'store'])->name('admin.job.store');
    Route::get('/admin/job/edit/{id}', [JobController::class, 'show'])->name('admin.job.edit');
    Route::post('/admin/job/update/{id}', [JobController::class, 'update'])->name('admin.job.update');
    Route::get('/admin/job/delete/{id}', [JobController::class, 'delete'])->name('admin.job.delete');

    Route::patch('/admin/job/status/{id}', [JobController::class, 'changeStatus'])->name('admin.job.status');

    //CareerInquiry
    Route::get('/admin/career-inquiry', [CareerInquiryController::class, 'index'])->name('admin.career-inquiry');
    Route::get('/admin/career-inquiry/create', [CareerInquiryController::class, 'create'])->name('admin.career-inquiry.create');
    Route::get('/admin/career-inquiry/edit/{id}', [CareerInquiryController::class, 'show'])->name('admin.career-inquiry.edit');
    Route::post('/admin/career-inquiry/update/{id}', [CareerInquiryController::class, 'update'])->name('admin.career-inquiry.update');
    Route::get('/admin/career-inquiry/delete/{id}', [CareerInquiryController::class, 'delete'])->name('admin.career-inquiry.delete');

    // Collaborator
    Route::get('/admin/collaborator', [CollaboratorController::class, 'index'])->name('admin.collaborator');
    Route::get('/admin/create/collaborator', [CollaboratorController::class, 'create'])->name('admin.collaborator.create');
    Route::post('/admin/store/collaborator', [CollaboratorController::class, 'store'])->name('admin.collaborator.store');
    Route::get('/admin/delete/collaborator/{id}', [CollaboratorController::class, 'destroy'])->name('admin.collaborator.delete');
    Route::get('/admin/collaborator/edit/{id}', [CollaboratorController::class, 'show'])->name('admin.collaborator.edit');
    Route::post('/admin/collaborator/update/{id}', [CollaboratorController::class, 'update'])->name('admin.collaborator.update');

    // Testimonial
    Route::get('/admin/testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial');
    Route::get('/admin/create/testimonial', [TestimonialController::class, 'create'])->name('admin.create.testimonial');
    Route::post('/admin/store/testimonial', [TestimonialController::class, 'store'])->name('admin.store.testimonial');
    Route::get('/admin/delete/testimonial/{id}', [TestimonialController::class, 'destroy'])->name('admin.delete.testimonial');
    Route::get('/admin/testimonial/edit/{id}', [TestimonialController::class, 'show'])->name('admin.testimonial.edit');
    Route::post('/admin/testimonial/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonial.update');

    //Contact
    Route::get('/admin/contact', [ContactController::class, 'contact'])->name('admin.contact');
    Route::get('/admin/contact/delete/{id}', [ContactController::class, 'delete'])->name('admin.contact.delete');

    //Slider
    Route::get('/admin/slider', [SliderController::class, 'index'])->name('admin.slider');
    Route::get('/admin/slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
    Route::post('/admin/slider/store', [SliderController::class, 'store'])->name('admin.slider.store');
    Route::get('/admin/slider/delete/{id}', [SliderController::class, 'delete'])->name('admin.slider.delete');

    //Blog
    Route::get('/admin/blog', [BlogController::class, 'index'])->name('admin.blog');
    Route::get('/admin/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/admin/blog/edit/{id}', [BlogController::class, 'show'])->name('admin.blog.edit');
    Route::post('/admin/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::get('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');

    //FAQ
    Route::get('/admin/faq', [FaqController::class, 'index'])->name('admin.faq');
    Route::get('/admin/faq/create', [FaqController::class, 'create'])->name('admin.faq.create');
    Route::post('/admin/faq/store', [FaqController::class, 'store'])->name('admin.faq.store');
    Route::get('/admin/faq/edit/{id}', [FaqController::class, 'show'])->name('admin.faq.edit');
    Route::post('/admin/faq/update/{id}', [FaqController::class, 'update'])->name('admin.faq.update');
    Route::get('/admin/faq/delete/{id}', [FaqController::class, 'destroy'])->name('admin.faq.delete');

    //Solution
    Route::get('/admin/solution', [SolutionController::class, 'index'])->name('admin.solution');
    Route::get('/admin/solution/create', [SolutionController::class, 'create'])->name('admin.solution.create');
    Route::post('/admin/solution/store', [SolutionController::class, 'store'])->name('admin.solution.store');
    Route::get('/admin/solution/edit/{id}', [SolutionController::class, 'show'])->name('admin.solution.edit');
    Route::post('/admin/solution/update/{id}', [SolutionController::class, 'update'])->name('admin.solution.update');
    Route::get('/admin/solution/delete/{id}', [SolutionController::class, 'destroy'])->name('admin.solution.delete');

    //Service
    Route::get('/admin/service', [ServiceController::class, 'index'])->name('admin.service');
    Route::get('/admin/service/create', [ServiceController::class, 'create'])->name('admin.service.create');
    Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('admin.service.store');
    Route::get('/admin/service/edit/{id}', [ServiceController::class, 'show'])->name('admin.service.edit');
    Route::post('/admin/service/update/{id}', [ServiceController::class, 'update'])->name('admin.service.update');
    Route::get('/admin/service/delete/{id}', [ServiceController::class, 'destroy'])->name('admin.service.delete');

    //Newsletter
    Route::get('/admin/newsletter', [NewsletterController::class, 'index'])->name('admin.newsletter');
    Route::get('/admin/newsletter/create', [NewsletterController::class, 'create'])->name('admin.newsletter.create');
    Route::get('/admin/newsletter/edit/{id}', [NewsletterController::class, 'show'])->name('admin.newsletter.edit');
    Route::post('/admin/newsletter/update/{id}', [NewsletterController::class, 'update'])->name('admin.newsletter.update');
    Route::get('/admin/newsletter/delete/{id}', [NewsletterController::class, 'destroy'])->name('admin.newsletter.delete');

    //Team
    Route::get('/admin/team', [TeamController::class, 'index'])->name('admin.team');
    Route::get('/admin/team/create', [TeamController::class, 'create'])->name('admin.team.create');
    Route::post('/admin/team/store', [TeamController::class, 'store'])->name('admin.team.store');
    Route::get('/admin/team/edit/{id}', [TeamController::class, 'show'])->name('admin.team.edit');
    Route::post('/admin/team/update/{id}', [TeamController::class, 'update'])->name('admin.team.update');
    Route::get('/admin/team/delete/{id}', [TeamController::class, 'destroy'])->name('admin.team.delete');

    //Certification
    Route::get('/admin/certification', [CertificationController::class, 'index'])->name('admin.certification');
    Route::get('/admin/certification/create', [CertificationController::class, 'create'])->name('admin.certification.create');
    Route::post('/admin/certification/store', [CertificationController::class, 'store'])->name('admin.certification.store');
    Route::get('/admin/certification/edit/{id}', [CertificationController::class, 'show'])->name('admin.certification.edit');
    Route::post('/admin/certification/update/{id}', [CertificationController::class, 'update'])->name('admin.certification.update');
    Route::get('/admin/certification/delete/{id}', [CertificationController::class, 'destroy'])->name('admin.certification.delete');

    //Industryserve
    Route::get('/admin/industry-serve', [IndustryServeController::class, 'index'])->name('admin.industry-serve');
    Route::get('/admin/industry-serve/create', [IndustryServeController::class, 'create'])->name('admin.industry-serve.create');
    Route::post('/admin/industry-serve/store', [IndustryServeController::class, 'store'])->name('admin.industry-serve.store');
    Route::get('/admin/industry-serve/edit/{id}', [IndustryServeController::class, 'show'])->name('admin.industry-serve.edit');
    Route::post('/admin/industry-serve/update/{id}', [IndustryServeController::class, 'update'])->name('admin.industry-serve.update');
    Route::get('/admin/industry-serve/delete/{id}', [IndustryServeController::class, 'destroy'])->name('admin.industry-serve.delete');

    //Casestudy
    Route::get('/admin/casestudy', [CasestudyController::class, 'index'])->name('admin.casestudy');
    Route::get('/admin/casestudy/create', [CasestudyController::class, 'create'])->name('admin.casestudy.create');
    Route::post('/admin/casestudy/store', [CasestudyController::class, 'store'])->name('admin.casestudy.store');
    Route::get('/admin/casestudy/edit/{id}', [CasestudyController::class, 'show'])->name('admin.casestudy.edit');
    Route::post('/admin/casestudy/update/{id}', [CasestudyController::class, 'update'])->name('admin.casestudy.update');
    Route::get('/admin/casestudy/delete/{id}', [CasestudyController::class, 'destroy'])->name('admin.casestudy.delete');
});
