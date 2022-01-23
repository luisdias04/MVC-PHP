<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page
{
     /**
     * Método responsável por retornar o conteúdo renderizado de uma view
     * @return string
     */

    public static function getHome(){ 
        //organizatio
        $obOrganization = new Organization;          
        //view da home     
        $content = View::render ('pages/home',
            [
                'name'          => $obOrganization->name,
                'description'   => $obOrganization->description,
                'site'          => $obOrganization->site
            ]    
        );
        //retorna a view da pagina
        return parent::getPage('Canal do Luiz', $content);
    }
}