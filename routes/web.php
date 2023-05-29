<?php

use App\Http\Controllers\Auth\AuthentificationController;
use App\Http\Controllers\Auth\dashboardController;
use App\Http\Controllers\Docs\DocumentController;
use App\Http\Controllers\Errors\errorController;
use App\Http\Controllers\Utilisateur\UtilisateurController;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Route;



// Le Groupe de Route pour L'authentification (pageLogin,La connexion)
Route::controller(AuthentificationController::class)->group(
    function(){
        Route::get('login','pageLogin')->name('PageLogin');
        Route::post('dologin','doLogin');
    }
);

// Le Groupe de Route pour la Page Dashboard de  L'administrateur
Route::controller(dashboardController::class)->group(
    function(){
        Route::get('dashboard','dashboard')->name('dashboard')->middleware('isAdmin');
        Route::delete('logout','logout')->name('logout')->middleware('isAdmin');
       
    }
);


Route::get('visualiser',function(){
    return view('Acceuil.visualiserImage');
})->name('errorPage');


// Le Groupe Groupe Route pour la Page d'ajout de Document
Route::controller(DocumentController::class)->group(
    function(){
        Route::get('addDocument','index')->name('addDocument')->middleware('isAdmin');
        Route::post('upload','uploadDoc')->name('upload');
        Route::get('historiqueDoc','historique')->name('historiqueDoc')->middleware('isAdmin');
        Route::get('/','acceuil')->name("/");
        Route::get('viewID/{id}','viewImageId');
        Route::get('deleteDoc/{id}','deleteDoc')->name("deleteDoc");
        Route::get('viewIdImage/{id}','viewIdImage')->name('');
    }
);

// Le Groupe Groupe Route pour la Page d'ajout D'Utilisateur
Route::controller(UtilisateurController::class)->group(
    function(){
        Route::get('listUtilisteur','index')->name('list-utilisateur');
        Route::get('ajoutUtilisateur','addPage')->name('ajoutUtilisateur');
        Route::post('ajoutUtilisateur','create')->name('addUser');
        Route::get('removeUser/{id}','removeUser')->name('removeUser');
        Route::get('updateID/{id}','updatePage')->name('updateID');
        Route::post('updateUser/{id}','updateUser')->name('updateUser');
    }
);



// Specifier la Page d'erreur

Route::controller(errorController::class)->group(
    function(){
        Route::get("404","index")->name("error404");
        Route::get("500","page500")->name("error500");
    }
);