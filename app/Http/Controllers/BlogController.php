<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use Log;
use App\Http\Controllers\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$BlogData = new BlogModel;
        $BlogData = BlogModel::all();
        return view('bloglist', compact('BlogData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Log::info($request);
        $info = new BlogModel;
        $info->title = $request->input('ftitle');
        $info->content = $request->input('fcontent');
        

        $info->save();

        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //if (Auth::check()){
            $blog = BlogModel::find($id);
            return view('editblog',[
                'blogView' => $blog
        ]);
        //}
    }   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $info = new BlogModel;
        // $info->title = $request->input('fedittitle');
        // $info->content = $request->input('feditcontent');
        $new_data = BlogModel::find($id);
 
        $new_data->title = $request->input('fedittitle');
        $new_data->content = $request->input('feditcontent');    
        
 
        $new_data->save();
        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = BlogModel::find($id);
        $file->delete();
        return redirect('blog');
        
        
    }
}
