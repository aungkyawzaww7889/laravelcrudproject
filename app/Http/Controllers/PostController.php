<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postresults = Post::all();
        // $postresults = Post::paginate(5);
        return view('post/index',compact('postresults'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("Hay");

        $request->validate([
            'title'=> "required",
            'content'=> "required"
        ]);

        Post::create([
            'title' => $request->title,
            'content'=> $request->content 
        ]);

        return redirect('post')->with('successAltet',"You have scuccessfully created.");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('post/show',['id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $postresult = Post::find($id);
        // dd($postresult);
        return view('post/edit',['id'=>$id, 'postresult'=>$postresult]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd("update success");

        $request->validate([
            'title'=> "required",
            'content'=> "required"
        ]);

        Post::find($id)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('post')->with('successAltet',"You have scuccessfully updated.");
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd("success");

        Post::find($id)->delete();
        return redirect('post')->with('successAltet',"You have scuccessfully deleted.");

    }
}
