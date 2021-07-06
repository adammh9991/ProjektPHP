<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\UserSearchForm;

class UsersListCtrl {
	
	private $form;
    private $records; 
	

	
	 public function action_usersList() {



        try {
            $this->records = App::getDB()->select("user", [
                "iduser",
                "email",
                "login",
                "password",
				"nick",
				"rang",
				"favourite",
				"role",
                    ],[
						"stan"=>"a",
					]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }


        App::getSmarty()->assign('user', $this->records);  
        App::getSmarty()->display('adminView.tpl');
    }
	
	public function validateUser() {
        $this->form->iduser = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }
	
	
	
	public function action_userDel(){
		
				if($this->validateUser()){
					try{
						
						App::getDB()->update("user", [
							"stan" => 'u',
						],[
							"iduser" => $this->form->iduser,
						]);					
					}catch (\PDOException $e) {
						Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
						if (App::getConf()->debug)
							Utils::addErrorMessage($e->getMessage());
					}
						
					App::getRouter()->redirectTo("usersList");
				}
		
		
	}
	
}