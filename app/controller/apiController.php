<?php

class NerdController extends \BaseController {

public function index()
	{
		// get all the nerds
		$api = Api::all();

		// load the view and pass the nerds
		return View::make('api')
			->with('api', $api);
	}


}
