<?php
/*
 * Copyright 2010, 2011 Denis FELICELLI for ecoparc
 * Controller qui doit etre mere de tous les controller des pages internes
 * verifie que l'utlisateur est auth, sinon redirige vers l'index
 */
//
//This file is part of Ecoparc.
//
//Ecoparc is free software: you can redistribute it and/or modify
//it under the terms of the GNU General Public License as published by
//the Free Software Foundation, either version 3 of the License, or
//(at your option) any later version.
//
//Ecoparc is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.
//
//You should have received a copy of the GNU General Public License
//along with Ecoparc.  If not, see <http://www.gnu.org/licenses/>.
//
    require_once '../application/controllers/AbstractController.php';
    require_once '../application/utils/utilsUsers.php';

    class IntController extends AbstractController
    {
        public function  preDispatch()
        {
            if (!Zend_Auth::getInstance ()->hasIdentity ()) {
                $this->_helper->redirector('index', 'index');
            }

            $this->view->username = utilsUser::getUserName();
            $this->view->type = utilsUser::getUserType();
            $this->view->title = "Ecoparc Webapp";
            $this->view->actualView = Zend_Controller_Front::getInstance()->getRequest()->getControllerName();

            parent::preDispatch();
        }
        
    }
    
?>