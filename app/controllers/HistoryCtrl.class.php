<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\HistoryForm;
use core\SessionUtils;

class HistoryCtrl {
	
	private $form;
    private $records; 
	

	public function __construct() {

        $this->form = new HistoryForm();
    }
	 public function action_historyList() {



		$this->form->iduser = SessionUtils::load("iduser",true);

        try {
            $this->records = App::getDB()->select("history",[
			"[>]movie" => "idmovie",
			],[
						"title",
						"hdate",
			],
			[
						"iduser" => $this->form->iduser ,
					]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

  

        App::getSmarty()->assign('history', $this->records);
        App::getSmarty()->display('history.tpl');
    }
	
	public function action_historyAdd() {
		
		$this->form->idmovie = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
		$this->form->iduser = SessionUtils::load("iduser",true);
		SessionUtils::store("idmovie", $this->form->idmovie);
             App::getDB()->insert("history", [
                "idmovie" =>$this->form->idmovie,
				"iduser" =>$this->form->iduser,
				"hdate" => date("Y-m-d H:i:s"),
                    ]);

		App::getRouter()->redirectTo("historyList");
    }
	
	
}