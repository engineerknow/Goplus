<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use Illuminate\Support\Facades\File;

class MainController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function Service(){
        return view('service');
    }
    public function Productprocess(){
        if(app()->getLocale()=='th'){
            $process = article::where('type', 'processth')->first();
        }else{
            $process = article::where('type', 'processen')->first();
        }
        $title = 'Article | Go plushealthy';
        
        return view('productprocess', compact('title', 'process'));
    }
    public function Productprocessen(){
        $process = article::where('type', 'processen')->first();
        $title = 'Article | Go plushealthy';
        
        return view('productprocess', compact('title', 'process'));
    }
    public function Product(){
        return view('Product');
    }
    public function Article(){
        $article = article::where('type', 'article')->get();
        $title = 'Article | Go plushealthy';
        return view('article', compact('title', 'article'));
    }
    public function Article_detail($id)
    {
        $Article_detail = article::where('type', 'article')->whereId($id)->first();
        $title = 'Article | Go plushealthy';
        return view('article_detail', compact('title', 'Article_detail'));
    }
    public function news(){
        $news = article::where('type', 'news')->get();
        $title = 'news | Go plushealthy';
        return view('news', compact('title', 'news'));
    }
    public function news_detail($id)
    {
        $news_detail = article::where('type', 'news')->whereId($id)->first();
        $title = 'news | Go plushealthy';
        return view('news_detail', compact('title', 'news_detail'));
    }
    public function contactus(){
        return view('contactus');
    }
    // backend
    public function admin_article(){
        
        $tiny = article::where('type', 'article')->get();
        $title = 'Article';
        return view('admin.article', compact('title', 'tiny'));
    }

    public function admin_article_add(Request $request)
    {
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        $request->image->move(public_path('image/tinymce'), $file_name);
        $tiny = [
            'image' => $file_name,
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'type' => 'article',
        ];
        article::create($tiny);
        return redirect()->back();
    }
    public function admin_article_update(Request $request, $id)
    {
        $tiny = [
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
        ];
        article::where('id', $id)->first()->update($tiny);
        return redirect()->route('admin.article');
    }
    
    public function admin_article_delete(Request $request, $id)
    {
        article::where('id', $id)->delete();
        $destination = 'image/tinymce/' . $request->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        return redirect()->back();
    }
    // admin process
    public function admin_process(){
        
        $tiny = article::where('type', 'like','process%')->get();
        $title = 'process';
        return view('admin.process', compact('title', 'tiny'));
    }

    public function admin_processth_add(Request $request)
    {
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        $request->image->move(public_path('image/tinymce'), $file_name);
        $tiny = [
            'image' => $file_name,
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'type' => 'processth',
        ];
        article::create($tiny);
        return redirect()->back();
    }
    public function admin_processen(){
        
        $tiny = article::where('type', 'processen')->get();
        $title = 'process';
        return view('admin.process', compact('title', 'tiny'));
    }

    public function admin_processen_add(Request $request)
    {
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        $request->image->move(public_path('image/tinymce'), $file_name);
        $tiny = [
            'image' => $file_name,
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'type' => 'processen',
        ];
        article::create($tiny);
        return redirect()->back();
    }
    public function admin_news(){
        
        $tiny = article::where('type', 'news')->get();
        $title = 'news';
        return view('admin.news', compact('title', 'tiny'));
    }

    public function admin_news_add(Request $request)
    {
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        $request->image->move(public_path('image/tinymce'), $file_name);
        $tiny = [
            'image' => $file_name,
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'type' => 'news',
        ];
        article::create($tiny);
        return redirect()->back();
    }
    public function admin_news_update(Request $request, $id)
    {
        $tiny = [
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
        ];
        article::where('id', $id)->first()->update($tiny);
        return redirect()->route('admin.news');
    }
    
    public function admin_news_delete(Request $request, $id)
    {
        article::where('id', $id)->delete();
        $destination = 'image/tinymce/' . $request->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        return redirect()->back();
    }
}
