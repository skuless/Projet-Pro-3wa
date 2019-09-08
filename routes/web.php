<?php

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


// Page d'accueil
Route::get('/', 'HomeController@index' );
Route::get('/home', 'HomeController@index')->name('home');

// Page produits
Route::get('/pergola', 'ProductsController@pergolaView')->name('pergola');
Route::get('/terrasse', 'ProductsController@terrasseView')->name('terrasse');

// Formulaire
Route::get('/formulaire', 'FormController@index')->name('formulaire');
Route::post('/formulaire', 'FormController@validateForm')->name('formulaire.validateForm');

// mention legal
Route::get('/mention', 'HomeController@legalMentionView')->name('mention');

// Les formulaire appelé par les request ajax
Route::get('/formulaire/contact', "FormController@formContact")->name('contact');
Route::get('/formulaire/devis', "FormController@formDevis")->name('devis');
Route::get('/formulaire/sav', "FormController@formSav")->name('sav');

// Page de confirmation
Route::get('/formulaire/confirmation', 'FormController@confirmation')->name('confirmation');

// Ressource permet de créer plusieurs route de base ( destroy, create, show etc..)
Route::resource('sav', 'Form\TableManagement\SavController');
Route::resource('devis', 'Form\TableManagement\DevisController');
Route::resource('contact', 'Form\TableManagement\ContactController');

//  Page d'administration pour les admins
Route::get('management', 'Admin\AdminController@index')->name('management');
Route::get('management/table/devis', 'Form\TableManagement\TableController@showDevisTable')->name('show.table.devis');
Route::get('management/table/contact', 'Form\TableManagement\TableController@showContactTable')->name('show.table.contact');
Route::get('management/table/sav', 'Form\TableManagement\TableController@showSavTable')->name('show.table.sav');

// Seul les admins peuvent accèder aux pages d'administration donc on interdit les inscription et les resets
Auth::routes([
    'register' => false,
    'reset' => false,
  ]);

// Route vers la page login
Route::get('/login', 'HomeController@login')->name('login');

// Logout du compte connecté
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('home');
 })->name('logout');

