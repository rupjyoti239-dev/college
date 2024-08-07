<?php

use App\Http\Controllers\Admin\Banner\BannerController;
use App\Http\Controllers\Admin\Contact\ContactController;
use App\Http\Controllers\Admin\Department\DepartmentController;
use App\Http\Controllers\Admin\Faculty\FacultyController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\Subject\SubjectController;
use App\Http\Controllers\Home\HomeController;
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




//? FrontEnd side

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/faculties',[HomeController::class,'faculties'])->name('faculties');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');




// ?   Admin

Route::get('/admin/login',[LoginController::class,'form'])->name('admin.login.form');
Route::post('/admin/login',[LoginController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/dashboard',[LoginController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/logout',[LoginController::class,'logout'])->name('admin.logout');



#department
Route::get('/admin/departments',[DepartmentController::class,'index'])->name('admin.department.list');
Route::get('/admin/department/add',[DepartmentController::class,'add'])->name('admin.department.add');
Route::post('/admin/department/store',[DepartmentController::class,'store'])->name('admin.department.store');
Route::get('/admin/department/{id}/edit',[DepartmentController::class,'edit'])->name('admin.department.edit');
Route::put('/admin/department/{id}/update',[DepartmentController::class,'update'])->name('admin.department.update');
Route::delete('/admin/department/{id}/delete',[DepartmentController::class,'delete'])->name('admin.department.delete');




#subjects
Route::get('/admin/subjects', [SubjectController::class, 'index'])->name('admin.subject.list');
Route::get('/admin/subject/add', [SubjectController::class, 'add'])->name('admin.subject.add');
Route::post('/admin/subject/store', [SubjectController::class, 'store'])->name('admin.subject.store');
Route::get('/admin/subject/{id}/edit', [SubjectController::class, 'edit'])->name('admin.subject.edit');
Route::put('/admin/subject/{id}/update', [SubjectController::class, 'update'])->name('admin.subject.update');
Route::delete('/admin/subject/{id}/delete', [SubjectController::class, 'delete'])->name('admin.subject.delete');




#faculty
Route::get('/admin/faculties', [FacultyController::class, 'index'])->name('admin.faculty.list');
Route::get('/admin/faculty/add', [FacultyController::class, 'add'])->name('admin.faculty.add');
Route::post('/admin/faculty/store', [FacultyController::class, 'store'])->name('admin.faculty.store');
Route::get('/admin/faculty/{id}/edit', [FacultyController::class, 'edit'])->name('admin.faculty.edit');
Route::put('/admin/faculty/{id}/update', [FacultyController::class, 'update'])->name('admin.faculty.update');
Route::delete('/admin/faculty/{id}/delete', [FacultyController::class, 'delete'])->name('admin.faculty.delete');



#banner
Route::get('/admin/banners', [BannerController::class, 'index'])->name('admin.banner.list');
Route::get('/admin/banner/add', [BannerController::class, 'add'])->name('admin.banner.add');
Route::post('/admin/banner/store', [BannerController::class, 'store'])->name('admin.banner.store');
Route::delete('/admin/banner/{id}/delete', [BannerController::class, 'delete'])->name('admin.banner.delete');
Route::get('/admin/banner/{id}/status',[BannerController::class,'status'])->name('admin.banner.status');


#contact
Route::get('/admin/contact',[ContactController::class,'index'])->name('admin.contact.list');
Route::get('/admin/contact/{id}/delete',[ContactController::class,'delete'])->name('admin.contact.delete');