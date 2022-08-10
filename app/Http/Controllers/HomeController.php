<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\StoreFileRequest;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = DB::table('article')->get();
        return view('home', ['article'=> $article]);
    }

    public function storearticle(Request $request){
        $fileName =uniqid().'_'. time() . '.'. $request->file->extension();
        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();
        $request->file->move(public_path('file'), $fileName);
        $id= uniqid('ARTICLE',8);
        DB::table("article")->insert([
            "title"=>$request->input('titre'),                
            "description"=>$request->input('description'),
            "image"=>$fileName,
            "liked_number"=>0,
            "unliked_number"=>0,
            "created_at"=>Carbon::now()
        ]);
        return back();
    }
}
