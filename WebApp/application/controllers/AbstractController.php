<?php
/*
 * Copyright 2010, 2011 Denis FELICELLI for ecoparc
 * 
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
    
abstract class AbstractController extends Zend_Controller_Action
{
    public function  preDispatch() {

        $this->view->translate = Zend_Registry::get('Zend_Translate');
        parent::preDispatch();
    }
}

?>