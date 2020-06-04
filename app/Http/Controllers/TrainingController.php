<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Collect;

class TrainingController extends Controller
{
    public function encrypt()
    {
        $encrypted = Crypt::encryptString('Hello world.');
        // $decrypted = Crypt::decryptString($encrypted);
      
        try {
            $decrypted = decrypt($encrypted);
        } catch (DecryptException $e) {
            dd('ERROR');
        }
    }
    public function hashing()
    {
        $hash = Hash::make('Hello world.');

        $hashed = Hash::make('password', [
            'memory' => 1024,
            'time' => 2,
            'threads' => 2,
        ]);

        // if (Hash::check('password', $hashed)) {
        //    dd("PASSWORD TRUE");
        // }

        if (Hash::needsRehash($hashed)) {
            $hashed = Hash::make('plain-text');
            dd("PASSWORD TRUE");

        }


        echo $hash;
        echo '<br>';
        echo $hashed;
    }

    public function broadcast(){
        return view('broadcast');
    }

    public function cache(){

        // Cache::store('database')->put('key', 'ramadhan', 600); // 10 Minutes
        // $value = Cache::get('key');
        // dd($value);
        // if (Cache::has('key')) {
        //     dd('has');
        //     //
        // }

        // $value = Cache::get('key', function () {
        //     return DB::table('users')->get();
        // });

        $value = Cache::remember('users', 60, function () {
            return DB::table('users')->get();
        });
        
        if (Cache::has('users')) {
            $value = Cache::get('users');
            dd($value);
        }

    }

    function collection(){
       

        $collection = collect([1, 2, 3, 4, 5, 6, 7]);

        $chunks = $collection->chunk(4);

        $chunks->toArray();

        print_r($chunks);
        
    }
}
