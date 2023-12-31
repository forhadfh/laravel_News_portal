<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function StoreReview(Request $request){

        $news = $request->news_id;

        $request->validate([
            'comment' => 'required',
        ]);

        Review::insert([

            'news_id' => $news,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'created_at' => Carbon::now(), 
        ]);

        return back()->with("status","Review Will Approve By Admin");
    } // End Method

        public function PendingReview(){

        $review = Review::where('status',0)->orderBy('id','DESC')->get();
        return view('backend.review.pending_review',compact('review'));

    }// End Method

    public function ReviewApprove($id){

        Review::where('id',$id)->update(['status' => 1]);

         $notification = array(
            'message' => 'Review Approved Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);


    }// End Method

         public function ApproveReview(){

        $review = Review::where('status',1)->orderBy('id','DESC')->get();
        return view('backend.review.approve_review',compact('review'));

    }// End Method



    public function DeleteReview($id){

        Review::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Review Deleted Successfully',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);


    }// End Method
}
