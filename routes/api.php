<?php
    $api = [
        // [METODO, ENDPOINT, CONTROLLER, FUNCTION]
        ['GET','/usuarios','UsuarioController','buscarTodos'],
        ['GET','/usuario','UsuarioController','buscar'],
        ['POST','/usuario','UsuarioController','criar'],
        ['PUT','/usuario','UsuarioController','editar'],
        ['DELETE','/usuario','UsuarioController','deletar'],
    ];
