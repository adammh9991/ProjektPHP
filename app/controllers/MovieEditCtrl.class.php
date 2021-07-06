<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\MovieSearchForm;


class MovieEditCtrl {
	
	private $form;
    private $records; 
	
	public function __construct() {
        $this->form = new MovieSearchForm();
    }
	
	 public function action_movieEditShow() {


        $search_params = []; 
        if (isset($this->form->title) && strlen($this->form->title) > 0) {
            $search_params['title[~]'] = $this->form->title . '%'; 
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        $where ["ORDER"] = "title";


        try {
            $this->records = App::getDB()->select("movie", [
				"idmovie",
                "famous_actors",
				"description",
				"length",
				"genre",
				"title",
				"checked",
                    ],[
						"checked" => 'n',
					
					], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        

        App::getSmarty()->assign('movie', $this->records);  
        App::getSmarty()->display('modView.tpl');
    }

	
	    public function validateSaveM() {

        $this->form->idmovie = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
	
	public function validateSave() {
		
        $this->form->idmovie = ParamUtils::getFromRequest('idmovie', true, 'Błędne wywołanie aplikacji2' );
        $this->form->title = ParamUtils::getFromRequest('title', true, 'Błędne wywołanie aplikacji2' );
        $this->form->famous_actors = ParamUtils::getFromRequest('famous_actors', true, 'Błędne wywołanie aplikacji3');
		$this->form->description = ParamUtils::getFromRequest('description', true, 'Błędne wywołanie aplikacji4');
		$this->form->length = ParamUtils::getFromRequest('length', true, 'Błędne wywołanie aplikacji5');


        if (App::getMessages()->isError())
            return false;

        if (empty($this->form->title)) {
            Utils::addErrorMessage('Nie podano tytułu');
        }
        if (empty($this->form->famous_actors)) {
            Utils::addErrorMessage('Nie podano aktorów');
        }
		if (empty($this->form->description)) {
            Utils::addErrorMessage('Nie podano opisu');
        }
		
		if (empty($this->form->length)) {
            Utils::addErrorMessage('Nie podano długości');
        }


        if (App::getMessages()->isError())
            return false;

        return !App::getMessages()->isError();
    }
	
    public function action_movieSave() {


        if ($this->validateSave()) {

            


                    App::getDB()->update("movie", [
                        "title" => $this->form->title,
						"famous_actors"=> $this->form->famous_actors,
						"description"=> $this->form->description,
						"length"=> $this->form->length,
						"genre"=> $this->form->genre,
                            ], [
                        "idmovie" => $this->form->idmovie
                    ]);
                

            App::getRouter()->redirectTo('movieEditShow');
        } else {
        
            $this->generateView();
        }
    }	
	
	public function action_movieEdit() {
      
        if ($this->validateSaveM()) {
            try {
            
                $record = App::getDB()->get("movie", "*", [
                    "idmovie" => $this->form->idmovie,
                ]);
               
                $this->form->idmovie = $record['idmovie'];
				$this->form->title = $record['title'];
				$this->form->description = $record['description'];
				$this->form->genre = $record['genre'];
				$this->form->famous_actors = $record['famous_actors'];
				$this->form->length = $record['length'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

       
        $this->generateView();
    }
	
	public function action_movieCheck() {
		

				if($this->validateSaveM()){
					try{
						
						App::getDB()->update("movie", [
							"checked" => 't',
						],[
							"idmovie" => $this->form->idmovie,
						]);					
					}catch (\PDOException $e) {
						Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
						if (App::getConf()->debug)
							Utils::addErrorMessage($e->getMessage());
					}
						
					
				}
			
				
			App::getRouter()->redirectTo("movieEditShow");	
	}
	
		public function action_movieDelete() {
		
				if($this->validateSaveM()){
					try{
						
					App::getDB()->update("movie", [
						"checked" => 'u',
                    ],[
						"idmovie" => $this->form->idmovie,
					]);
									
					}catch (\PDOException $e) {
						Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
						if (App::getConf()->debug)
							Utils::addErrorMessage($e->getMessage());
					}
						
					
				}

			
				
			App::getRouter()->redirectTo("movieEditShow");	
	}
	
	public function generateView() {
        App::getSmarty()->assign('form', $this->form); 
        App::getSmarty()->display('movieEdit.tpl');
    }
}