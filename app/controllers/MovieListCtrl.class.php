<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use app\forms\MovieSearchForm;

class MovieListCtrl {
	
	private $form;
    private $records; 
	

    public function __construct() {
        $this->form = new MovieSearchForm();
    }
	
	

    
	
	 public function action_movieList() {



        $search_params = []; 
        if (isset($this->form->title) && strlen($this->form->title) > 0) {
            $search_params['title[~]'] = $this->form->title.'%'; 
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
                "rate",
                "popular",
                "famous_actors",
				"description",
				"length",
				"genre",
				"title",
				"checked",
                    ],[
						"checked" => 't',
						//'LIMIT' => [0, 5],
					], $where);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        App::getSmarty()->assign('searchForm', $this->form); 
        App::getSmarty()->assign('movie', $this->records); 
        App::getSmarty()->display('movielist.tpl');
    }
}