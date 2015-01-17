<?php

class BeerController extends BaseController {

	public function getIndex()
	{
		return View::make('home');
	}

}
