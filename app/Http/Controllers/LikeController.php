<?php

namespace App\Http\Controllers;

use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{   
    /**
     * Create a new AuthControl instance
     * 
     */

    public function __construct()
    {
        $this->middleware("JWT");
    }


    public function likeIt(Reply $reply)
    {
       $reply->like()->create([
           'user_id' => '1',
       ]) ;    
    }

    public function unLikeIt(Reply $reply)
    {
        $reply->like()->where('user_id',  '1')->first()->delete();
    }
}
