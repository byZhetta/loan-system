<?php

    class vistasModelo {
        /*--------- Modelo obtener vistas ---------*/
        protected static function obtener_vistas_modelo($vistas){
            $listaBlanca = ["client-list", "client-new", "client-search", "client-update",
            "company", "home", "item-list", "item-new", "item-search", "item-update",
            "reservation-list", "reservation-new", "reservation-pending", "reservation-reservation",
            "reservation-search", "reservation-update", "user-list", "user-new", "user-search",
            "user-update"];
            if(in_array($vistas, $listaBlanca)){
                if(is_file("./views/contenidos/".$vistas."-view.php")){
                    $contenido = "./views/contenidos/".$vistas."-view.php";
                } else {
                    $contenido = "404";
                }
            } else if($vistas == "login" || $vistas == "index"){
                $contenido = "login";
            } else {
                $contenido = "404";
            }
            return $contenido;
        }

    }

?>