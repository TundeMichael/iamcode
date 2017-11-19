<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Response;

class ApiController extends Controller {

    /**
     * Display a list of experiences (posts) partly based 
     * on the user's current location and randomly.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFeed(Request $request) {
        $data = $request::all();
        $latlong = isset($data['location']) ? $data['location'] : '42.32232,12.31312121';
        $distance = isset($data['distance']) ? $data['distance'] : 1000;
        $categories = Category::with(['posts' => function($query) use ($distance, $latlong) {
                        $query->allPostsNearDestination($distance, $latlong)->take(5);
                    }])->get();
        return Response::json($categories);
    }

    /**
     * Display a list of experiences (posts) partly based 
     * on the user's current location and randomly.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {
        $data = $request::all();
    }

}
