<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request) {
        $request->validate([
            'content' => 'required',
            'article_id' => 'required'
        ]);
        $comment = new Comment();
        $comment->article_id = $request->article_id;
        $comment->content = $request->content;
        $comment->user_id = Auth::id();
        $comment->save();
        
        return back();
    }

    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return back();
    }
}
