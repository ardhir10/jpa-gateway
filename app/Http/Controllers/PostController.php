<?php

namespace App\Http\Controllers;
use App\Post;
use App\Device;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Contracts\Session\Session;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Policies\PostPolicy;

class PostController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        Log::debug('An informational message.');
        Log::emergency('The system is down!');
        
        return view('post.create',['name'=>'<p style="color:red">Ardhi Ramadhan</p>','array'=>array('rama','john','sarah')]);
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(StoreBlogPost  $request)
    {

        // get current logged in user
        $user = Auth::user();


        if ($user->can('deletedevicess')) {
            echo 'Current logged in user is allowed to create new posts.';
        } else {
            echo 'Not Authorized';
        }

       
        $validated = $request->validated();
        dd($validated);
        return json_encode([]);
    }
    
}



 // $response =  Gate::authorize('edit-settings', $request);

        // if ($response->allowed()) {
        //     dd("Authorized");
        // } else {
        //     echo $response->message();
        // }

        
        // if (Gate::forUser(Auth::user())->allows('update-post', $request)) {
        //     // The user can update the post...
        //     dd("GATE 11");
        // }
        // if (Gate::allows('update-post', $request)) {
        //    dd("GATE");
        // }
        // if (Gate::denies('update-post', $request)) {
        //             dd("GATE");
        // }
        // $validatedData = $request->validate([
        //     'title' => ['required','max:255'],
        //     'body' => ['required'],
        //     'publish_at' => [ 'required','date'],
        // ]);