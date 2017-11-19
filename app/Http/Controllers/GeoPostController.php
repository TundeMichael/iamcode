<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Response;

class GeoPostController extends Controller
{
    public function postsNearDestination(Request $request){
        $latlong = $_GET['location'];//42.32232,12.31312121
        $distance = $_GET['distance'];
        return Response::json(Post::allPostsNearDestination($distance, $latlong)->get());
    }
}
