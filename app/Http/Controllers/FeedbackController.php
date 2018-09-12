<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function openFeedback(){
        return view(' feedback');
    }
    public function sendFeedback(Request $reg){
        $rating = $reg->input('rating');
        $typeFeedback = $reg->input('typeFeedback');
        $userFeedback = $reg->input('userFeedback');
        $userEmail = $reg->input('userEmail');

        $data = array('rate'=>$rating,'type'=>$typeFeedback,'user_feedback'=>$userFeedback,'email'=>$userEmail);
        DB::table('feedback')->insert($data);
        echo 'Thanks!';
    }
}
