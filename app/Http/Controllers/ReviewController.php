<?php

namespace App\Http\Controllers;
use App\Http\Requests\PhonebookRequest;
use App\model\Review;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
// return '<h1>From review</h1>';
$reviews = Review::all();
//return $review;
    return view('review.review', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$review = Review::all();
return view('review.create', compact('review'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(PhonebookRequest $request)
    {      

$comment = new Review;
$comment->user_id = Auth::user()->id;
$comment->user_name = Auth::user()->name;
$comment->userCommenet = $request->userCommenet;
$comment->save();
return redirect('review');

    }

    /**
     * Display the specified resource.
     *
    * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
   // public function show(Review $review)
    public function show($id)
    {
       $user = Review::find($id);
//return $user;
return view('review.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
$review = Review::find($id);
//pr($review);
//return $review;
return view('review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
$comment = Review::find($id);
$comment->userCommenet = $request->userCommenet;
$comment->save();
//session()->flash('messege', 'Updated Successfully');
return redirect('review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
$comment = Review::find($id);
$comment->delete();
session()->flash('messege', 'Deleted Successfully');
return redirect('review');
    }
}
