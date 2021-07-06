<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\MovieOverWForm;


class MovieOverWCtrl {
	
	private $form;
  
	
	public function __construct() {
        $this->form = new MovieOverWForm();
    }
	
	 public function action_movieOverW() {




				if($this->validateMovie()){
					try{
						
						$record =App::getDB()->get("movie","*",[
							"idmovie" => $this->form->idmovie,
						]);	
						
						$this->form->title = $record['title'];
						$this->form->description = $record['description'];
						$this->form->genre = $record['genre'];
						$this->form->famous_actors = $record['famous_actors'];
						$this->form->length = $record['length'];
								
					}catch (\PDOException $e) {
						Utils::addErrorMessage('Wyst¹pi³ b³¹d podczas odczytu rekordu');
						if (App::getConf()->debug)
							Utils::addErrorMessage($e->getMessage());
					}
					$this->generateView();	
				}
$this->generateView();

    }

	
	    public function validateMovie() {
        $this->form->idmovie = ParamUtils::getFromCleanURL(1, true, 'B³êdne wywo³anie aplikacji');
	   //$this->form->idmovie = SessionUtils::load("idmovie");
        return !App::getMessages()->isError();
    }
	
	public function action_movieCheck() {
		


			
				
				
	}
	
	
	public function generateView() {
        App::getSmarty()->display('movieo.tpl');
    }
}