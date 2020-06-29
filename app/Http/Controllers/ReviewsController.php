<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Review;

class ReviewsController extends Controller
{
    public function allReviews(){
        $allReviews = Review::all();
        return json_encode($allReviews);
    }
    public function specificCar($id){
        $car = Car::where('id', '=', $id)->get();
        return view('pages.reviews', ['cars' => $car]);
    }
    public function specificReview($id){
        $review = Review::where('id', '=', $id)->get();
        return $review;
    }
    
}
