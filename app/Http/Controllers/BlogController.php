<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all(['id','titulo','contenido']);
        return response()->json($blogs);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $blog = Blog::create($request->post());
        return response()->json([           
            'blog'=>$blog
        ]);
    }


    public function show(Blog $blog)
    {
        return response()->json($blog);
    }


    public function edit(Blog $blog)
    {
        //
    }


    public function update(Request $request, Blog $blog)
    {
        $blog->fill($request->post())->save();
        return response()->json([            
            'blog'=>$blog
        ]);
    }


    public function destroy(Blog $blog)
    {
        $blog->delete();
        return response()->json([
            'mensaje'=>'¡Registro eliminado correctamente!'
        ]);
    }
}
