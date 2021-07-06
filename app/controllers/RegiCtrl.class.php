<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;
use app\forms\RegisterForm;


class RegiCtrl {
	
	private $clogin;
	private $cemail;	
    public function __construct() {
        $this->form = new RegisterForm();
    }	
	
	
public function validate() {
		
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');
		$this->form->email = ParamUtils::getFromRequest('email');
		$this->form->nick = ParamUtils::getFromRequest('nick');
		$this->form->stan = "a";


		
        if (!isset($this->form->login))
            return false;


        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->password)) {
            Utils::addErrorMessage('Nie podano hasła');
        }
		if (empty($this->form->email)) {
            Utils::addErrorMessage('Nie podano emaila');
        }
		if (empty($this->form->nick)) {
            Utils::addErrorMessage('Nie podano nicku');
        }

		

		

        if (App::getMessages()->isError())
            return false;
		try{
				$clogin = App::getDB()->select("user", [
					"login"
				],[
					"login" => $this->form->login,
				]);	
				
				$cemail = App::getDB()->select("user", [
					"email"
				],[
					"email" => $this->form->email,
				]);	
				
				$cnick = App::getDB()->select("user", [
					"nick"
				],[
					"nick" => $this->form->nick,
				]);					

			if($clogin && !$cemail && !$cnick){
				Utils::addErrorMessage('Podany login jest zajęty');
			} 
			else if(!$clogin && !$cnick && $cemail){
				Utils::addErrorMessage('Podany email jest zajęty');
			} 
			else if( $cnick && !$clogin && !$cemail){
				Utils::addErrorMessage('Podany nick jest zajęty');
			} 
			else if($clogin&& $cemail){
				Utils::addErrorMessage('Podany login oraz email są zajęte');
			} 
			else if($clogin&& $cemail && cnick){
				Utils::addErrorMessage('Podany login, nick oraz email są zajęte');
			} 			
			else {
				 App::getDB()->insert("user", [
					"login" => $this->form->login,
					"password" => $this->form->password,
					"email" => $this->form->email,
					"nick" => $this->form->nick,
					"role" => user,
					"rang" => User,
					"stan" => $this->form->stan,
				]);		
			}
		}catch(\PDOException $ex) {
			  getMessages()->addError("DB error:" . $ex->getMessage());
		}

        return !App::getMessages()->isError();
    }

   public function action_register() {
        if ($this->validate()) {

            Utils::addErrorMessage('Poprawnie zarejestrowano');
            App::getRouter()->redirectTo("mains");
        } else {
 
            $this->generateView();
        }
    }	
	
	public function action_regiShow(){
		 $this->generateView();
	}
	
	public function generateView() {
        App::getSmarty()->display('register.tpl');
    }
}