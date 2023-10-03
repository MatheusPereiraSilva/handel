<?php

    //adicionar novo menu

    function handel_custom_menu($menu_links) {
        $menu_links = array_slice($menu_links, 0, 5, true) + ['certificados' => 'Certificados'] + array_slice($menu_links, 5, NULL, true);

        //remove um item
        unset($menu_links['edit-address']);


        return $menu_links;
    }




?>