<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return '<a href="https://www.educastudio.com/contact-us">Contact Us</a>';
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $_request
     * @return \Illumintae\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
	* Show the form for editing the specified resource
	*
	* @param int $id
	* @return \Illuminate\http\Response
	*/

	public function edit($id)
	{
		//
	}

	/**
	* Update the specified resource in storage.
	*
	* @return \Illuminate\http\Request $request
	* @param int $id
	* @return \Illuminate\http\Response
	*/

	public function update(Request $request, $id)
	{
		//
	}

	/**
	*Remove the specified resource from storage.
	*
	* @param int $id
	* @return \Illuminate\http\Response
	*/
	public function destroy($id)
	{
		//
	}

}
