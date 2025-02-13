<?php
    $api = [
        // [METODO, ENDPOINT, CONTROLLER, FUNCTION]
        ['GET','/bemvindo','CapiphpController','bemVindo'],
        ['GET','/usuarios','UsuarioController','buscarTodos'],
        ['GET','/usuario','UsuarioController','buscar'],
        ['POST','/usuario','UsuarioController','criar'],
        ['PUT','/usuario','UsuarioController','editar'],
        ['DELETE','/usuario','UsuarioController','deletar'],
    ];
