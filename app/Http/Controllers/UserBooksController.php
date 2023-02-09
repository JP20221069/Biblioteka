<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class UserBooksController extends Controller
{
    //
    public function index($id)
    {
        //
        $books = User::find($id)->books;
        return response()->json($books);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$user_id)
    {
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|int',
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        User::find($request->user_id)->books()->sync($request->book_id);

        return response()->json('Rental record inserted successfully.');
    }
}
