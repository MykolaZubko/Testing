<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller{

    public function home() {


        return view('home', ['admins' => Admin::paginate(3)]);
    }
    public function about() {
         return view('about');
    }
    public function details_news($id,Request $request){
//       dd(view('details-news', ['data' => Admin::find($id)]));
        return view('details-news', ['admins' => Admin::find($id)]);
    }
    public function review() {
        $reviews = new Contact();

         return view('review', ['reviews' => $reviews->all()]);
    }
    public function review_check(Request $request) {
     $valid = $request->validate([
        'mail' => 'required|min:4|max:50',
        'subject' => 'required|min:4|max:100',
        'message' => 'required|min:15|max:500',
     ]);

     $review = new Contact();
     $review->mail = $request->input('mail');
     $review->subject = $request->input('subject');
     $review->message = $request->input('message');

     $review->save();

     return redirect()->route('home');
    }
//    public function admin(Request $request){
//        $valid = $request->validate([
//            'title' => 'required|min:4|max:50',
//            'author' => 'required|min:4|max:100',
//            'news_subject' => 'required|min:15|max:500',
//        ]);
//
//        $review = new Contact();
//        $review->title = $request->input('title');
//        $review->author = $request->input('author');
//        $review->news_subject = $request->input('news_subject');
//
//        $review->save();
//
//        return redirect()->route('home');
//    }

}
