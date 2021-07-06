<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('mains'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions


Utils::addRoute('mains', 'MainsController');
Utils::addRoute('regiShow', 'RegiCtrl');
Utils::addRoute('register', 'RegiCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');
Utils::addRoute('movieList',    'MovieListCtrl');
Utils::addRoute('usersList',    'UsersListCtrl', ['admin']);
Utils::addRoute('userDel',    'UsersListCtrl', ['admin']);
Utils::addRoute('movieEditShow',    'MovieEditCtrl', ['mod','admin']);
Utils::addRoute('movieEdit',    'MovieEditCtrl', ['mod','admin']);
Utils::addRoute('movieSave',    'MovieEditCtrl', ['mod','admin']);
Utils::addRoute('movieCheck',        'MovieEditCtrl', ['mod','admin']);
Utils::addRoute('movieDelete',        'MovieEditCtrl', ['mod','admin']);
Utils::addRoute('settShow',        'SettingsCtrl', ['user']);
Utils::addRoute('ChangePass',        'SettingsCtrl', ['user']);
Utils::addRoute('ChangeEmail',        'SettingsCtrl', ['user']);
Utils::addRoute('addmovieShow',        'AddMovieCtrl',  ['mod','admin','user']);
Utils::addRoute('addmovie',        'AddMovieCtrl',  ['mod','admin','user']);
Utils::addRoute('historyList',        'HistoryCtrl', ['user']);
Utils::addRoute('historyAdd',        'HistoryCtrl', ['user']);
Utils::addRoute('movieOverW',        'MovieOverWCtrl', ['user']);
//Utils::addRoute('action_name', 'controller_class_name');