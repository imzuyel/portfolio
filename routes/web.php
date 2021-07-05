<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\HeadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\GineusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FolowerController;
use App\Http\Controllers\ProjestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MyCertificateController;



Route::group(['prefix' => 'imzuyelrana'], function () {
    Route::auth([
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);
});


Route::middleware('auth')->group(function () {
    // Backend
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/clear', [HomeController::class, 'cache'])->name('cache');

    // Head
    Route::get('/header/text', [HeadController::class, 'text_index'])->name('header.text_manage');
    Route::get('/header/resume', [HeadController::class, 'banner_resume'])->name('header.banner_resume');
    Route::post('/header/update', [HeadController::class, 'text_update'])->name('header.text_update');
    Route::get('/header/banner', [HeadController::class, 'banner_image'])->name('header.banner_image');
    Route::post('/header/banner/resume', [HeadController::class, 'resume'])->name('header.resume');
    Route::post('/header/banner/update', [HeadController::class, 'banner_update'])->name('header.banner_update');


    // About
    Route::get('/about/me', [AboutController::class, 'index'])->name('about.index');
    Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');
    Route::post('/about/update', [AboutController::class, 'update'])->name('about.update');

    // Service
    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::post('/service/create/store', [ServiceController::class, 'store'])->name('service.store');
    Route::post('/service/create/update/', [ServiceController::class, 'update'])->name('service.update');
    Route::get('/service/create/unpublished/{id}', [ServiceController::class, 'unpublished'])->name('service.unpublished');
    Route::get('/service/create/published/{id}', [ServiceController::class, 'published'])->name('service.published');

    // Skill
    Route::get('/skill', [SkillController::class, 'index'])->name('skill.index');
    Route::post('/skill/create/store', [SkillController::class, 'store'])->name('skill.store');
    Route::post('/skill/create/update/', [SkillController::class, 'update'])->name('skill.update');
    Route::get('/skill/create/unpublished/{id}', [SkillController::class, 'unpublished'])->name('skill.unpublished');
    Route::get('/skill/create/published/{id}', [SkillController::class, 'published'])->name('skill.published');

    // Education
    Route::get('/education', [EducationController::class, 'index'])->name('education.index');
    Route::post('/education/create/store', [EducationController::class, 'store'])->name('education.store');
    Route::post('/education/create/update/', [EducationController::class, 'update'])->name('education.update');
    Route::get('/education/create/unpublished/{id}', [EducationController::class, 'unpublished'])->name('education.unpublished');
    Route::get('/education/create/published/{id}', [EducationController::class, 'published'])->name('education.published');

    // Experrience
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience.index');
    Route::post('/experience/create/store', [ExperienceController::class, 'store'])->name('experience.store');
    Route::post('/experience/create/update/', [ExperienceController::class, 'update'])->name('experience.update');
    Route::get('/experience/create/unpublished/{id}', [ExperienceController::class, 'unpublished'])->name('experience.unpublished');
    Route::get('/experience/create/published/{id}', [ExperienceController::class, 'published'])->name('experience.published');

    // certificate
    Route::get('/certificate', [MyCertificateController::class, 'index'])->name('certificate.index');
    Route::post('/certificate/create/store', [MyCertificateController::class, 'store'])->name('certificate.store');
    Route::post('/certificate/create/update/', [MyCertificateController::class, 'update'])->name('certificate.update');
    Route::get('/certificate/create/unpublished/{id}', [MyCertificateController::class, 'unpublished'])->name('certificate.unpublished');
    Route::get('/certificate/create/published/{id}', [MyCertificateController::class, 'published'])->name('certificate.published');

    // Project
    Route::get('/project/me', [ProjestController::class, 'index'])->name('project.index');
    Route::post('/project/create/store', [ProjestController::class, 'store'])->name('project.store');
    Route::post('/project/create/update/', [ProjestController::class, 'update'])->name('project.update');
    Route::get('/project/create/unpublished/{id}', [ProjestController::class, 'unpublished'])->name('project.unpublished');
    Route::get('/project/create/published/{id}', [ProjestController::class, 'published'])->name('project.published');
    Route::get('/project/create/delete/{id}', [ProjestController::class, 'delete'])->name('project.delete');

    // Award
    Route::get('/award', [AwardController::class, 'index'])->name('award.index');
    Route::post('/award/create/store', [AwardController::class, 'store'])->name('award.store');
    Route::post('/award/create/update/', [AwardController::class, 'update'])->name('award.update');
    Route::get('/award/create/unpublished/{id}', [AwardController::class, 'unpublished'])->name('award.unpublished');
    Route::get('/award/create/published/{id}', [AwardController::class, 'published'])->name('award.published');

    // Fllow
    Route::get('/flow', [FolowerController::class, 'index'])->name('flow.index');
    Route::post('/flow/create/store', [FolowerController::class, 'store'])->name('flow.store');
    Route::post('/flow/create/update/', [FolowerController::class, 'update'])->name('flow.update');
    Route::get('/flow/create/unpublished/{id}', [FolowerController::class, 'unpublished'])->name('flow.unpublished');
    Route::get('/flow/create/published/{id}', [FolowerController::class, 'published'])->name('flow.published');


    // Contact
    Route::get('/contact/all', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');

    // About
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/setting/update', [SettingController::class, 'update'])->name('setting.update');

    // Testimonial
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::post('/testimonial/create/store', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::post('/testimonial/create/update/', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/testimonial/create/unpublished/{id}', [TestimonialController::class, 'unpublished'])->name('testimonial.unpublished');
    Route::get('/testimonial/create/published/{id}', [TestimonialController::class, 'published'])->name('testimonial.published');

    // Testimonial
    Route::get('/seo', [SeoController::class, 'index'])->name('seo.index');
    Route::post('/seo/create/store', [SeoController::class, 'store'])->name('seo.store');
    Route::post('/seo/create/update/', [SeoController::class, 'update'])->name('seo.update');
});
Route::get('/', [GineusController::class, 'index'])->name('index');
Route::get('/project', [GineusController::class, 'project'])->name('project');
Route::get('/about', [GineusController::class, 'about'])->name('about');
Route::post('/contact/me', [GineusController::class, 'contact'])->name('contact');
