<?php

namespace App\Http\Controllers\panel;

use App\Events\NewComment;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{

    public function newComment()
    {
        $validation = Validator::make(\request()->all(), [
            'from_user' => 'required',
            'to_user' => 'required',
            'message' => 'required',
            'step_id' => 'required'
        ]);
        if ($validation->fails()) {
            return response()->json($validation->messages());
        }
        $comment = Comment::create([
            'from_user' => \request('from_user'),
            'to_user' => \request('to_user'),
            'message' => \request('message'),
            'step_id' => \request('step_id'),
        ]);
        broadcast(new NewComment($comment));
        return response()->json($comment);

    }

    public function allComment()
    {
//        return response()->json(\request('step_id'));

        $validation = Validator::make(\request()->all(), [
            'id' => 'required',
            'step_id' => 'required'
        ]);
        $comment = Comment::query()->where('from_user', \request('id'))->orWhere('to_user', \request('id'))->get();
        $co = [];
        foreach ($comment as $com) {
            if ($com['step_id'] == \request('step_id')) {
                array_push($co, $com);
            }
        }
        return response()->json($co);
    }
}
