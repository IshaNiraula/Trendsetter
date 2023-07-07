<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the newsletter subscribers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Newsletter::all();
        return view('admin.newsletter.list', compact('subscribers'));
    }

    /**
     * Show the form for creating a new newsletter subscriber.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created newsletter subscriber in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        $subscriber = new Newsletter();
        $subscriber->email = $request->email;
        $subscriber->save();

        return redirect()->route('home')->with('success', 'You have subscribed successfully.');
    }

    /**
     * Display the specified newsletter subscriber.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified newsletter subscriber.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified newsletter subscriber in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified newsletter subscriber from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscriber = Newsletter::find($id);
        $subscriber->delete();

        return redirect()->route('admin.newsletter.list')->with('success', 'Subscriber deleted successfully.');
    }
}
