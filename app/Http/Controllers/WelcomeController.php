<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;
class WelcomeController extends Controller
{
    public function index(Request $request){
        $fruits = ['a' => 'Apel', 'b' => 'Belimbing', 'c' => 'Cerry'];
        // array_walk($fruits, function ($item, $key) {
        //     echo $key . '. ' . $item ."\n";
        // });



        // array_walk($fruits, function(&$item, $key, $prefix) {
        // echo "$key. $prefix $item\n";
        // }, 'buah');

        // $products = [[2, 1000], [3, 2000], [2, 3000]];
        // $tax = 0.05;
        // $total = 0.00;
        // array_walk($products, function ($product, $key) use ($tax, &$total) {
        //     $qty = $product[0];
        //     $price = $product[1];

        //     $total += ($qty * $price) * ($tax + 1.0);
        // });
        // echo round($total, 2);


        // $status = [1,1,1,1,0,0,0,1,0,1,1,1,1,0,1,0,1,0,1];
        // $statusBefore = 0; 
        // $jumlahBatch = 0; 
        // array_walk($status, function ($item) use (&$statusBefore,&$jumlahBatch) {
        //     if($statusBefore != $item){
        //         if($item != 0){
        //             $jumlahBatch++;
        //         }
        //         $statusBefore = $item;
        //     }
        // });
        // echo $jumlahBatch;

        echo url()->current();
        echo "<br>";
        echo url()->full();
        echo "<br>";
        echo url()->previous();
        echo "<br>";
        echo URL::current();

        return URL::signedRoute('unsubscribe', ['user' => 1]);




        // return View::composer('welcome', 'App\Http\ViewComposers\UserComposer');

        // dd('Hai');
        // return view('welcome');
    }

    public function session(Request $request){



        // $request->session()->flash('status', 'Task was successful!');
        // $request->session()->reflash();

        // $request->session()->keep(['username', 'email']);
        $request->session()->flush();
        $request->session()->regenerate();



        $data = $request->session()->all();
    
        if ($request->session()->has('status')) {
            dd($data);
        }
    }
}
