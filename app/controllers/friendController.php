<?php

namespace App\Controllers;

use App\Models\Friend;
use Core\Foundation\Controller;
use Core\Http\Request;

class friendController extends Controller
{
    public function index()
    {
        $friends = Friend::all('desc');
        $this->render('index', [
            'friends' => $friends
        ]);
    }

    public function create()
    {
        $this->render('create');
    }

    public function store(Request $request)
    {
        $this->validate([
            $request->input('name') => 'required|string',
            $request->input('surname') => 'required|string',
            $request->input('email') => 'required|email',
            $request->input('phone') => 'required|number',
            $request->input('twitter') => 'required'
        ]);
        Friend::insert($request->all());
        $this->redirect('/app/')->withSuccess('Friend added successfully');
    }

    public function edit(Request $request)
    {
        $friend = Friend::find(['id' => $request->input('id')]);
        $this->render('edit', [
            'friend' => $friend
        ]);
    }

    public function update(Request $request)
    {
        $this->validate([
            $request->input('id') => 'required|number',
            $request->input('name') => 'required|string',
            $request->input('surname') => 'required|string',
            $request->input('email') => 'required|email',
            $request->input('phone') => 'required|number',
            $request->input('twitter') => 'required'
        ]);
        Friend::update($request->except('id'))->where(['id' => $request->input('id')]);
        $this->redirect('/app/')->withSuccess('Friend updated successfully');
    }

    public function destroy(Request $request)
    {
        $friend = Friend::find(['id' => $request->input('id')]);
        Friend::delete(['id' => $request->input('id')]);
        $this->back()->withSuccess("{$friend->name} {$friend->surname} is no longer your friend");
    }

    public function find(Request $request)
    {
        $this->validate([$request->input('search') => 'required|string']);
        $friends = Friend::findAllOrFail([
            'name' => "%{$request->input('search')}%",
            'surname' => "%{$request->input('search')}%",
            'email' => "%{$request->input('search')}%",
            'twitter' => "%{$request->input('search')}%"
        ], 'LIKE');
        $this->render('index', [
            'friends' => $friends
        ]);
    }
}
