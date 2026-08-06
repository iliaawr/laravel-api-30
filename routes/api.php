<?php
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::apiResource('products', ProductController::class);




// class Mahasiswa{
//     public $name;1
//     public $age;
//     public $adress;
//     public fu nction sapa(){
//         echo "Halo,". $this ->name;
//     }
//     public function data(){  
//         echo "Age :" . $this ->age . "<br>";
//         echo "Adress : " . $this -> adress . "<br>";

//     }
// }

// $mhs1 = new Mahasiswa();
// $mhs1 -> name = "Syafiq";
// $mhs1 -> age = 17;
// $mhs1 -> adress = "Jl.Pandaan";

// $mhs1 -> sapa();
// $mhs1 -> data();