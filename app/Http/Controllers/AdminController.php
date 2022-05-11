<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller{
    public function admin() {
//        $admin = new Admin();
//dd($reviews);

        return view('admin', ['admins' => Admin::all() ]);
    }
    public function admin_check(Request $request){
//        dd($request);
        $valid = $request->validate([
            'theme' => 'required|min:4|max:50',
            'title' => 'required|min:4|max:50',
            'author' => 'required|min:4|max:100',
            'short_news' => 'required|min:4|max:100',
            'news_subject' => 'required|min:15',
            'image' => 'required',

        ]);

        $admin = new Admin();

        $admin->theme = $request->input('theme');
        $admin->title = $request->input('title');
        $admin->author = $request->input('author');
        $admin->short_news = $request->input('short_news');
        $admin->news_subject = $request->input('news_subject');
        $path = $request->file('image')->store('upload_image', 'public');
        $admin->image =  $path;
//        $path = $request->file('image')->store('upload_image', 'public');
//        dd($path);
        $admin->save();
//        return view('admin', ['path' => $path]);
//        dd($request);
        return view('admin', ['admins' => Admin::all()], )->with('success', 'Новость была добавлена');
    }
    public function show_news($id){
        return view('one-news', ['data' => Admin::find($id)]);
    }
    public function update_news($id){
        return view('update-news', ['data' => Admin::find($id)]);
    }
    public function update_news_submit($id, Request $request){
        $valid = $request->validate([
            'theme' => 'required|min:4|max:50',
            'title' => 'required|min:4|max:50',
            'author' => 'required|min:4|max:100',
            'short_news' => 'required|min:4|max:100',
            'news_subject' => 'required|min:15',
            'image' => 'required',
        ]);
//        dd($request);
        $admin = Admin::find($id);
//        File::delete($admin->image);
//        $admin->image->
        $admin->theme = $request->input('theme');
        $admin->title = $request->input('title');
        $admin->author = $request->input('author');
        $admin->short_news = $request->input('short_news');
        $admin->news_subject = $request->input('news_subject');
        $path = $request->file('image')->store('upload_image', 'public');
        $admin->image =  $path;
//dd($request);
        $admin->save();

        return view('admin', ['admins' => Admin::all()], )->with('success', 'Новость была обновленна');
    }



    public function destroy($id){
        Admin::find($id)->delete();
        return redirect()->route('admin')->with('success', 'Новость была удалена');
    }

}
