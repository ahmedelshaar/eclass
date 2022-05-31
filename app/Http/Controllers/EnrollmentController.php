<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Course;
use Session;
use App\User;

class EnrollmentController extends Controller
{

    public function enroll(Request $request,$id)
    {
        $course = Course::where('id', $id)->first();

        DB::table('orders')->insert(
            array(
                'user_id' => Auth::User()->id,
                'instructor_id' => $course->user_id,
                'course_id' => $id,
                'total_amount' => 'Free',
                'created_at'  => \Carbon\Carbon::now()->toDateTimeString(),
            )
        );

        return back()->with('success',trans('flash.EnrolledSuccessfully'));
    }

    public function buynow(Request $request)
    {
        $user_id = 0;
        $course_id = 0;
        $category_id = 0;
        if(isset($request->user_id)){
            Session::put('buynow', [
                'category_id' => $request->category_id,
                'user_id' => $request->user_id,
                'course_id' => $request->course_id,
            ]);
            $user_id = $request->user_id;
            $course_id = $request->course_id;
            $category_id = $request->category_id;
        }else{
            $category_id = Session::get('buynow')['category_id'];
            $user_id = Session::get('buynow')['user_id'];
            $course_id = Session::get('buynow')['course_id'];
        }

        $user_check = User::where('id', $user_id)->first();
        $course = Course::where('id', $course_id)->first();

        // $course = Course::all();
        $cart = $course;

        $price_total = 0;
        $offer_total = 0;


        if ($course->discount_price != 0)
        {
            $offer_total += app('App\Http\Controllers\CartController')->coupon($course);
        }
        else
        {
            $offer_total += app('App\Http\Controllers\CartController')->coupon($course);
        }

        $price_total = $price_total + $course->price;

        //for offer percent
        $offer_amount  = $price_total - ($offer_total);
        $value         =  $offer_amount / $price_total;
        $offer_percent = $value * 100;

        $cart_total = $offer_total;

        $one_course = 1;



        Session::put('one_order_course', $course_id);

        Session::put('one_order_user', $user_id);

        return view('front.checkout',compact('course', 'cart', 'price_total','offer_total', 'offer_percent', 'cart_total', 'one_course'));
    }




    public function freeenroll(Request $request,$price)
    {

        $txn_id = uniqid();

        $payment_method = 'Free Enroll';

        $checkout = new OrderStoreController;

        return $checkout->orderstore($txn_id, $payment_method);

    }
}
   