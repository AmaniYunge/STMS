<?php

class DriverController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('driver.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store()
    {
        $driver = Driver::create(array(
                    "fname"=>Input::get("first_name"),
                    "mname"=>Input::get("middle_name"),
                    "lname"=>Input::get("last_name"),
                    "phone"=>Input::get("phone"),
                    "gender"=>Input::get("gender"),
                    "resident_area"=>Input::get("resident_area")
                ));
        $name = $driver->fname." ".$driver->mname." ".$driver->lname;

        Logs::create(array(
                    "user_id"=>  Auth::user()->id,

                    "action"  =>"Add driver named ".$name

                ));
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

    public function listDriver(){
        return View::make('driver.list');
    }



    /**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
