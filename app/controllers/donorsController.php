<?php

class donorsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function create()
	{
		return View::make('frontend.donorForm');
	}

	public function store()
	{
		return 'form submitted';
	}
	

}