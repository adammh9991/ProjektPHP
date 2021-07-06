<?php

namespace app\controllers;

use core\App;

class MainsController {
	
	public function action_mains(){
		
		 App::getSmarty()->display("home.tpl");
		 
	}
}