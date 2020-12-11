<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class CharController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
	return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
	    'name'=>'required',
	    'race'=>'required',
	    'class'=>'required',
	    'level'=>'required',
	]);

	$contact = new Contact([
	    'name' => $request->get('name'),
	    'race' => $request->get('race'),
	    'class' => $request->get('class'),
	    'level' => $request->get('level'),
	    'hp' => $request->get('hp'),
	    'ac' => $request->get('ac'),
	    'str' => $request->get('str'),
	    'dex' => $request->get('dex'),
	    'con' => $request->get('con'),
	    'int' => $request->get('int'),
	    'wis' => $request->get('wis'),
	    'cha' => $request->get('cha'),
	    'skills' => $request->get('skills'),
	    'weapons' => $request->get('weapons'),
	    'equipment' => $request->get('equipment'),
	    'spells' => $request->get('spells')
	]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
	return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
	    'name'=>'required',
	    'race'=>'required',
	    'class'=>'required',
	    'level'=>'required'
	]);
	$contact = Contact::find($id);
	$contact->name = $request->get('name');
	$contact->race = $request->get('race');
	$contact->class = $request->get('class');
	$contact->level = $request->get('level');
        $contact->hp => $request->get('hp'),
        $contact->ac => $request->get('ac'),
        $contact->str => $request->get('str'),
        $contact->dex => $request->get('dex'),
        $contact->con => $request->get('con'),
        $contact->int => $request->get('int'),
        $contact->wis => $request->get('wis'),
        $contact->cha => $request->get('cha'),
        $contact->skills => $request->get('skills'),
        $contact->weapons => $request->get('weapons'),
        $contact->equipment => $request->get('equipment'),
        $contact->spells => $request->get('spells')

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
	$contact->delete();
	return redirect('/contacts')->with('success', 'Character deleted!');
    }
}
