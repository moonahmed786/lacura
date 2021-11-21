<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comment;
use App\CommentVote;
use App\CommentSpam;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function saveComments(Request $request)
    {
      $user = Auth::user();
      if($user){
        $this->validate($request, [
        'comment' => 'required',
        'reply_id' => 'filled',
        'page_id' => 'required',
        'users_id' => 'required',
        ]);
        $error = '';


      $comment = Comment::create($request->all());
      if($comment)
        $error = '<label class="text-success">Comment Added Successfully! Comment Will Be Displayed After Approval.</label>';
      else
        $error = '<label class="text-success">Something Went Wrong!</label>';

      $data = array(
       'error'  => $error
      );

      echo json_encode($data);
    }else{

      $error = '<label class="text-danger">Please Login First!</label>';
      $data = array(
       'error'  => $error
      );
      echo json_encode($data);
    }
    }

    public function update(Request $request, $commentId,$type)
    {
        if($type == "vote"){
           $this->validate($request, [
           'vote' => 'required',
           'users_id' => 'required',
           ]);
            $comments = Comment::find($commentId);
            $data = [
               "comment_id" => $commentId,
               'vote' => $request->vote,
               'user_id' => $request->users_id,
            ];
            if($request->vote == "up"){
               $comment = $comments->first();
               $vote = $comment->votes;
               $vote++;
               $comments->votes = $vote;
               $comments->save();
            }
            if($request->vote == "down"){
               $comment = $comments->first();
               $vote = $comment->votes;
               $vote--;
               $comments->votes = $vote;
               $comments->save();
            }
            if(CommentVote::create($data))
               return "true";
        }
       if($type == "spam"){

           $this->validate($request, [
               'users_id' => 'required',
           ]);
           $comments = Comment::find($commentId);
           $comment = $comments->first();
           $spam = $comment->spam;
           $spam++;
           $comments->spam = $spam;
           $comments->save();
           $data = [
               "comment_id" => $commentId,
               'user_id' => $request->users_id,
           ];
           if(CommentSpam::create($data))
               return "true";
        }
    }
    public function index($pageId)
    {
      $comments = Comment::join('users','users.id','=','comments.users_id')->selectRaw('users.name, comments.*')->where('page_id',$pageId)->where('comments.status',1)->where('is_deleted',0)->get();
      $commentsData = '';

      foreach($comments as $row){

           $commentsData .= '
           <div class="card card-default card-comments">
            <div class="card-header"><i>'.$row["created_at"].'</i></div>
            <div class="card-body">'.$row["comment"].'</div>
            <div class="card-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["id"].'">Reply</button><div class="reply-box"></div></div>
           </div>
           ';
         $commentsData .= $this->get_reply_comment($row["id"]);
      }

      echo $commentsData;

    }
    public function get_reply_comment($parent_id = 0, $marginleft = 0){
      $comments = Comment::join('users','users.id','=','comments.users_id')->selectRaw('users.name, comments.*')->where('reply_id',$parent_id)->where('comments.status',1)->where('is_deleted',0)->get();
      // $comments = Comment::where('reply_id',$parent_id)->get();
      // // $replies = [];
      $replies = '';

      $count =  $comments->count();

      if($parent_id == 0){
        $marginleft = 0;
      }
      else{
        $marginleft = $marginleft + 48;
      }
      if($count > 0){

        foreach($comments as $row){

          $replies .= '
           <div class="card card-default card-comments" style="margin-left:'.$marginleft.'px">
            <div class="card-header"><i>'.$row["created_at"].'</i></div>
            <div class="card-body">'.$row["comment"].'</div>

           </div>
          ';
        // $replies .= $this->get_reply_comment($row["id"], $marginleft);
      }
    }

     return $replies;
    }
    protected function replies($commentId)
    {
       $comments = Comment::where('reply_id',$commentId)->get();
       $replies = [];
        foreach ($comments as $key) {
           $user = User::find($key->users_id);
           $name = $user->name;
           $photo = $user->first()->photo_url;
           $vote = 0;
           $voteStatus = 0;
           $spam = 0;
            if(Auth::user()){
               $voteByUser = CommentVote::where('comment_id',$key->id)->where('user_id',Auth::user()->id)->first();
               $spamComment = CommentSpam::where('comment_id',$key->id)->where('user_id',Auth::user()->id)->first();
               if($voteByUser){
                   $vote = 1;
                   $voteStatus = $voteByUser->vote;
               }
               if($spamComment){
                   $spam = 1;
               }
            }
            if(!$spam){
               array_push($replies,[
                   "name" => $name,
                   "photo_url" => $photo,
                   "commentid" => $key->id,
                   "comment" => $key->comment,
                   "votes" => $key->votes,
                   "votedByUser" => $vote,
                   "vote" => $voteStatus,
                   "spam" => $spam,
                   "date" => $key->created_at->toDateTimeString()
               ]);
            }
        }
       $collection = collect($replies);
       return $collection->sortBy('votes');
    }
    public function ChangeStatus(Request $request,$id)
    {
      $chStatcomment = Comment::find($id);
      $chStatcomment->status = $request->selectStatus;
      $chStatcomment->update();
      return back()->with('message', __('Update Successfully'));
    }
    public function DeleteComment($id)
    {
      $delComment = Comment::find($id);
      $delComment->is_deleted= 1;
      $delComment->update();
       return back()->with('message', 'Deleted Successfully');
    }
}
