<?php

namespace App\Http\Controllers;

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
$review = Review::all();
//return $review;
    return view('review.create', compact('review'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

$comment = new Review;
$comment->userCommenet = $request->userCommenet;
$comment->user_id = Auth::id();


$comment->save();
//return redirect('review/show');

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
       $item = Review::find($id);
       return $item;
//return view('review.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
