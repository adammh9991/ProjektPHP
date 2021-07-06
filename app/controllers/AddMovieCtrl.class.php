<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;
use app\forms\AddMovieForm;

class AddMovieCtrl {
	
    public function __construct() {
        $this->form = new AddMovieForm();
    }	
	
	public function validate() {
		
        $this->form->title = ParamUtils::getFromRequest('title');
        $this->form->famous_actors = ParamUtils::getFromRequest('famous_actors');
		$this->form->description = ParamUtils::getFromRequest('description');
		$this->form->length = ParamUtils::getFromRequest('length');
		$this->form->genre = ParamUtils::getFromRequest('genre');
		$this->form->checked = 'n';

        if (!isset($this->form->title))
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
		if (empty($this->form->genre)) {
            Utils::addErrorMessage('Nie wybrano gatunku');
        }		

        if (App::getMessages()->isError())
            return false;
		

			
				 App::getDB()->insert("movie", [
					"title" => $this->form->title,
					"famous_actors" => $this->form->famous_actors,
					"description" => $this->form->description,
					"length" => $this->form->length,
					"genre" =>	$this->form->genre,
					"checked" => $this->form->checked,
				]);		



        return !App::getMessages()->isError();
    }

   public function action_addmovie() {
        if ($this->validate()) {
    
            Utils::addErrorMessage('Poprawnie dodano film');
            App::getRouter()->redirectTo("movieList");
        } else {

            $this->generateView();
        }
    }	
	
	public function action_addmovieShow(){
		 $this->generateView();
	}
	
	public function generateView() {
        App::getSmarty()->display('addmovie.tpl');
    }
}