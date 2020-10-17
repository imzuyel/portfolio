<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GineusController;
use App\Http\Controllers\HeadController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\MyCertificateController;
use App\Http\Controllers\ProjestController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FolowerController;
use App\Http\Controllers\SettingController;

    /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/;

Auth::routes();


Route::middleware('auth')->group(function () {
    // Backend
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Head
    Route::get('/header/text', [HeadController::class, 'text_index'])->name('header.text_manage');
    Route::get('/header/resume', [HeadController::class, 'banner_resume'])->name('header.banner_resume');
    Route::post('/header/update', [HeadController::class, 'text_update'])->name('header.text_update');
    Route::get('/header/banner', [HeadController::class, 'banner_image'])->name('header.banner_image');
    Route::post('/header/banner/update', [HeadController::class, 'banner_update'])->name('header.banner_update');
    Route::get('/header/resume/update/{id}', [HeadController::class, 'resume_update'])->name('header.resume_update');
    Route::post('/header/resume/update/save', [HeadController::class, 'resume_update_save'])->name('header.resume_update_save');

    // About
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::post('/about/update', [AboutController::class, 'update'])->name('about.update');

    // Service
    Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
    Route::post('/service/create/store', [ServiceController::class, 'store'])->name('service.store');
    Route::post('/service/create/update/', [ServiceController::class, 'update'])->name('service.update');
    Route::get('/service/create/unpublished/{id}', [ServiceController::class, 'unpublished'])->name('service.unpublished');
    Route::get('/service/create/published/{id}', [ServiceController::class, 'published'])->name('service.published');

    // Service
    Route::get('/skill', [SkillController::class, 'index'])->name('skill.index');
    Route::post('/skill/create/store', [SkillController::class, 'store'])->name('skill.store');
    Route::post('/skill/create/update/', [SkillController::class, 'update'])->name('skill.update');
    Route::get('/skill/create/unpublished/{id}', [SkillController::class, 'unpublished'])->name('skill.unpublished');
    Route::get('/skill/create/published/{id}', [SkillController::class, 'published'])->name('skill.published');

    // Education
    Route::get('/education', [educationController::class, 'index'])->name('education.index');
    Route::post('/education/create/store', [educationController::class, 'store'])->name('education.store');
    Route::post('/education/create/update/', [educationController::class, 'update'])->name('education.update');
    Route::get('/education/create/unpublished/{id}', [educationController::class, 'unpublished'])->name('education.unpublished');
    Route::get('/education/create/published/{id}', [educationController::class, 'published'])->name('education.published');

    // Experrience
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience.index');
    Route::post('/experience/create/store', [ExperienceController::class, 'store'])->name('experience.store');
    Route::post('/experience/create/update/', [ExperienceController::class, 'update'])->name('experience.update');
    Route::get('/experience/create/unpublished/{id}', [ExperienceController::class, 'unpublished'])->name('experience.unpublished');
    Route::get('/experience/create/published/{id}', [ExperienceController::class, 'published'])->name('experience.published');

    // Experrience
    Route::get('/certificate', [MyCertificateController::class, 'index'])->name('certificate.index');
    Route::post('/certificate/create/store', [MyCertificateController::class, 'store'])->name('certificate.store');
    Route::post('/certificate/create/update/', [MyCertificateController::class, 'update'])->name('certificate.update');
    Route::get('/certificate/create/unpublished/{id}', [MyCertificateController::class, 'unpublished'])->name('certificate.unpublished');
    Route::get('/certificate/create/published/{id}', [MyCertificateController::class, 'published'])->name('certificate.published');

    // Project
    Route::get('/project', [ProjestController::class, 'index'])->name('project.index');
    Route::post('/project/create/store', [ProjestController::class, 'store'])->name('project.store');
    Route::post('/project/create/update/', [ProjestController::class, 'update'])->name('project.update');
    Route::get('/project/create/unpublished/{id}', [ProjestController::class, 'unpublished'])->name('project.unpublished');
    Route::get('/project/create/published/{id}', [ProjestController::class, 'published'])->name('project.published');

    // Award
    Route::get('/award', [AwardController::class, 'index'])->name('award.index');
    Route::post('/award/create/store', [AwardController::class, 'store'])->name('award.store');
    Route::post('/award/create/update/', [AwardController::class, 'update'])->name('award.update');
    Route::get('/award/create/unpublished/{id}', [AwardController::class, 'unpublished'])->name('award.unpublished');
    Route::get('/award/create/published/{id}', [AwardController::class, 'published'])->name('award.published');
    // Award
    Route::get('/flow', [FolowerController::class, 'index'])->name('flow.index');
    Route::post('/flow/create/store', [FolowerController::class, 'store'])->name('flow.store');
    Route::post('/flow/create/update/', [FolowerController::class, 'update'])->name('flow.update');
    Route::get('/flow/create/unpublished/{id}', [FolowerController::class, 'unpublished'])->name('flow.unpublished');
    Route::get('/flow/create/published/{id}', [FolowerController::class, 'published'])->name('flow.published');


    // Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');


    // About
    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/setting/update', [SettingController::class, 'update'])->name('setting.update');
});
Route::get('/', [GineusController::class, 'index'])->name('index');
Route::post('/contact', [GineusController::class, 'contact'])->name('contact');
