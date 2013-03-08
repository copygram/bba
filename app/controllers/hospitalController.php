<?php

class hospitalController extends BaseController {



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('frontend.hospitalSignup');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Input::all();
		var_dump($inputs);
	}

	

}