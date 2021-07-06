<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\SettingsForm;

class SettingsCtrl {
	private $form;


    public function __construct() {
        $this->form = new SettingsForm();
    }
	
	public function validatePass(){
		        $this->form->password = ParamUtils::getFromRequest('password');
				$this->form->newpassword = ParamUtils::getFromRequest('newpassword');

				
				if (App::getMessages()->isError())
					return false;
		
				if (empty(trim($this->form->password))) {
					Utils::addErrorMessage('Wprowadź Stare Hasło');
				}	
				if (empty(trim($this->form->newpassword))) {
					Utils::addErrorMessage('Wprowadź Nowe Hasło');
				}	
				
				if (App::getMessages()->isError())
					return false;
						
				$chpassword = App::getDB()->get("user", [
					"password"
				],[
					"iduser" => $this->form->iduser,
				]);	
				
				if($chpassword == null){
					Utils::addErrorMessage('Podano niepoprawne hasło');				
				}	
		 return !App::getMessages()->isError();	
	}	
	public function validateEmail(){
				$this->form->email = ParamUtils::getFromRequest('email', true, 'Błędne wywołanie aplikacji');
				$this->form->newemail = ParamUtils::getFromRequest('newemail', true, 'Błędne wywołanie aplikacji');
				$this->form->iduser = SessionUtils::load("iduser",true);	
				
				if (App::getMessages()->isError())
					return false;
		
				if (empty(trim($this->form->email))) {
					Utils::addErrorMessage('Wprowadź Stary Email');
				}

				if (empty(trim($this->form->newemail))) {
					Utils::addErrorMessage('Wprowadź Nowe Email');
				}
				
				if (App::getMessages()->isError())
					return false;
						

				$chemail = App::getDB()->get("user", [
					"email" 
				],[
					"iduser" => $this->form->iduser,

				]);
				

				if($chemail == null){
					Utils::addErrorMessage('Podano niepoprawny email');					
				}
       return !App::getMessages()->isError();				
	}	
	public function action_ChangePass(){

			$this->form->iduser = SessionUtils::load("iduser",true);
			if($this->validatePass()){
				App::getDB()->update("user", [
						"password" => $this->form->newpassword,
					],[
					"iduser" => $this->form->iduser,
					]);	
					
            Utils::addErrorMessage('Poprawnie zmieniono hasło');
            App::getRouter()->redirectTo("settShow");					
			}else{	
			$this->generateView();			
			}		
				

	}
	
	public function action_ChangeEmail(){

	
			if($this->validateEmail()){
				App::getDB()->update("user", [
						"email" => $this->form->newemail,
					],[
					"iduser" => $this->form->iduser,
					]);	
					
            Utils::addErrorMessage('Poprawnie zmieniono email');
            App::getRouter()->redirectTo("settShow");					
			}else{
				$this->generateView();
			}		
				

	}
	
	public function action_settShow(){
		 $this->generateView();
	}
	
	public function generateView() {
        App::getSmarty()->display('settings.tpl');
    }
}