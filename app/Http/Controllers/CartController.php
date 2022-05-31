<?php

namespace App\Http\Controllers;

use App\BundleCourse;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Cart;
use App\Course;
use App\Wishlist;
use Session;
use App\Coupon;
use Illuminate\Support\Facades\App;
use App\Adsense;

class CartController extends Controller
{
    public function index()
    {
        //
    }

    public function destroy($id)
    {
        $cart = Cart::findorfail($id);
        $cart->delete();

        return back()->with('delete',trans('flash.CartRemoved'));
    }

    public function addtocart(Request $request)
    {

        $cart = Cart::where('user_id', Auth::User()->id)->where('course_id', $request->course_id)->first();

        if(!empty($cart)){

            return back()->with('delete',trans('flash.CartAlready'));
        }
        else {
            
            DB::table('carts')->insert(
            array(

            'user_id' => Auth::User()->id,
            'course_id' => $request->course_id,
            'category_id' => $request->category_id,
            'created_at'  => \Carbon\Carbon::now()->toDateTimeString(),

            )
        );


        return back()->with('success',trans('flash.CartAdded'));
        }

    	
    }

    public function removefromcart($id)
    {
        $cart = Cart::findorfail($id);
        $cart->delete();

        return back()->with('delete',trans('flash.CartRemoved'));
    }

    public function cartpage(Request $request)
    {
        $course = Course::all();
        $ad = Adsense::first();

        $item = Cart::where('user_id', Auth::User()->id)->get();
        $carts = Cart::where('user_id', Auth::User()->id)->with('courses','bundle')->get();

        $wishlist = Wishlist::all();
        $price_total = 0;
        $offer_total = 0;
        $cpn_discount = 0;
        $cart_total = 0;
        $offer_percent = 0;

        if(isset($item))
        {
            if(isset($item))
            {
                foreach ($item as $item1) {

                    if($item1->course_id != null) {
                        $c = Course::where('id', $item1->course_id)->where('status', '1')->first();
                    }else{
                        $c = BundleCourse::where('id', $item1->bundle_id)->where('status', '1')->first();
                    }
                    if ($c->discount_price != 0)
                    {
                        $offer_total += $this->coupon($c);
                    }
                    else
                    {
                        $offer_total += $this->coupon($c,);
                    }


                    $price_total = $price_total + $c->price;
                    $cart_total = $offer_total;
                    $offer_amount  = $price_total - $offer_total;
                    $value         = $offer_amount / $price_total;
                    $offer_percent = $value * 100;
                }

            }
        }
        else{

            $item = NULL;
            $carts = NULL;
        }

        return view('front.cart', compact('course', 'carts', 'wishlist','offer_total','price_total', 'offer_percent', 'cart_total', 'cpn_discount', 'ad', 'item'));
       
    }

    public function calc(){
        $course = Course::all();
        $ad = Adsense::first();

        $item = Cart::where('user_id', Auth::User()->id)->get();
        $carts = Cart::where('user_id', Auth::User()->id)->with('courses','bundle')->get();

        $wishlist = Wishlist::all();
        $price_total = 0;
        $offer_total = 0;
        $cpn_discount = 0;
        $cart_total = 0;
        $offer_percent = 0;

        if(isset($item))
        {
            if(isset($item))
            {
                foreach ($item as $item1) {

                    if($item1->course_id != null) {
                        $c = Course::where('id', $item1->course_id)->where('status', '1')->first();
                    }else{
                        $c = BundleCourse::where('id', $item1->bundle_id)->where('status', '1')->first();
                    }
                    if ($c->discount_price != 0)
                    {
                        $offer_total += $this->coupon($c);
                    }
                    else
                    {
                        $offer_total += $this->coupon($c,);
                    }


                    $price_total = $price_total + $c->price;
                    $cart_total = $offer_total;
                    $offer_amount  = $price_total - $offer_total;
                    $value         = $offer_amount / $price_total;
                    $offer_percent = $value * 100;
                }

            }
        }
        else{

            $item = NULL;
            $carts = NULL;
        }
        return [
            "price_total"=> $price_total,
            "offer_total"=> $offer_total,
            "offer_percent"=> $offer_percent,
            "cart_total"=> $cart_total
        ];
    }

    public function coupon($c){
        $coupanapplieds = Session::get('coupanapplied');
        if(!isset($coupanapplieds['code'])){
            $x = $c->discount_price;

            if($c->discount_price == 0){
                $x = $c->price;
            }
            return $x;
        }
        $coupon = Coupon::where('code', $coupanapplieds['code'])->first();
        $x = $c->discount_price;

        if($c->discount_price == 0){
            $x = $c->price;
        }


        if($coupon->link_by == 'bundle' && is_array($c->course_id)){
            if($coupon->bundle_id == null || $coupon->bundle_id == $c->id){
                if($coupon->distype == "per"){
                    $x *= ($coupon->amount / 100);
                }else{
                    $x -= $coupon->amount;
                }
            }

        }else if($coupon->link_by == 'course' && !is_array($c->course_id)){
            if($coupon->course_id == null || $coupon->course_id == $c->id){
                if($coupon->distype == "per"){
                    $x *= ($coupon->amount / 100);
                }else{
                    $x -= $coupon->amount;
                }
            }
        }else if($coupon->link_by == 'category' && !is_array($c->course_id)){
            if($coupon->category_id == null || $coupon->category_id == $c->category_id){
                if($coupon->distype == "per"){
                    $x *= ($coupon->amount / 100);
                }else{
                    $x -= $coupon->amount;
                }
            }
        }else if($coupon->link_by == 'cart'){
            if($coupon->distype == "per"){
                $x *= ($coupon->amount / 100);
            }else{
                $x -= $coupon->amount;
            }
        }
        return $x;
    }
    
}
