<?php
    class CapiphpController {
        function bemVindo(){
            return json_encode([
                "access" => true,
                "usuarios" => "Seja bem vindo a API do CapiPHP"
            ]);
        }
    }
?>