<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;

class LoginCtrl {
	
	private $form;
	private $logindb;


	
	
	
    public function __construct() {
        $this->form = new LoginForm();
    }
	

	
    public function validate() {
		
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');


        if (!isset($this->form->login))
            return false;


        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->password)) {
            Utils::addErrorMessage('Nie podano hasła');
        }


        if (App::getMessages()->isError())
            return false;
		try{
			$logindb = App::getDB()->select("user", [
				"login",
			],[
			  'login' => $this->form->login,
			  'password' => $this->form->password,
			]);
			

		}catch(\PDOException $ex) {
			  getMessages()->addError("DB error:" . $ex->getMessage());
		}

			

        if ($logindb) {
			
			$getdata= App::getDB()->get("user", [
							"iduser",
							"role",
						],[
							'login' => $this->form->login,
						]); 
				$this->form->iduser = $getdata["iduser"];	
				$this->form->role = $getdata["role"];	
				
				RoleUtils::addRole($this->form->role);
				SessionUtils::store("iduser", $this->form->iduser);			

			
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }

        return !App::getMessages()->isError();
    }	
	
	public function action_loginShow(){
		 $this->generateView();
	}
   public function action_login() {
        if ($this->validate()) {
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
			if(RoleUtils::inRole("admin")){
            App::getRouter()->redirectTo("usersList");
			}
			if(RoleUtils::inRole("mod")){
            App::getRouter()->redirectTo("movieEditShow");
			}
			if(RoleUtils::inRole("user")){
            App::getRouter()->redirectTo("movieList");
			}else{
				$this->generateView();
			}
        } else {
   
            $this->generateView();
        }
    }

    public function action_logout() {
        session_destroy();
        App::getRouter()->redirectTo('mains');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('login.tpl');
    }

}

