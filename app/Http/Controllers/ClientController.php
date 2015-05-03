<?php namespace App\Http\Controllers;

/**
 * This controller includes pages on client side.
 */
class ClientController extends Controller {
	
	/**
	 * The help & guidelines page.
	 */
	public function Help()
	{
		return view('client/help');
	}
	
	/**
	 * The ship order sign in page.
	 */
	public function Order()
	{
		return view('client/order');
	}
	
	/**
	 * The goods receive status page.
	 */
	public function Packages()
	{
		return view('client/packages');
	}
	
	/**
	 * The goods transfer processing page.
	 */
	public function Process()
	{
		return view('client/process');
	}
	
}
