<?php 
/**
* ini adalah controller Home
*/
class HomeController extends Controller
{
	
	public function index() {
		$this->view('welcome');
	}
}
 ?>