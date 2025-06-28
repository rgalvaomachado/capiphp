<?php
    class UsuarioController {
        function buscarTodos(){
            $Usuario = new Usuario();
            $Usuarios = $Usuario->read();
            return json_encode([
                "access" => true,
                "usuarios" => $Usuarios
            ]);
        }

        function buscar($post){
            $Usuario = new Usuario();
            $buscarUsuario = $Usuario->readFirst([
                'id' => $post['id']
            ]);

            if(!empty($buscarUsuario)){
                return json_encode([
                    "access" => true,
                    "usuario" => $buscarUsuario,
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Usuario não encontrado"
                ]);
            }
        }

        function criar($post){
            $Usuario = new Usuario();
            $id = $Usuario->create([
                'nome' => $post['nome'],
                'email' => $post['email'],
                'senha' => $post['senha'],
            ]);

            if ($id > 0){
                return json_encode([
                    "access" => true,
                    "message" => "Criado com sucesso"
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Erro no cadastro"
                ]);
            }
            
        }

        function editar($post){
            $Usuario = new Usuario();
            $atualizado = $Usuario->update([
                    'nome' => $post['nome'],
                    'email' => $post['email'],
                    'senha' => $post['senha'],
                ],
                [
                    'id' => $post['id'],
                ]
            );
            if ($atualizado > 0) {
                return json_encode([
                    "access" => true,
                    "message" => "Editado com sucesso"
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Erro na edição"
                ]);
            }
        }

        function deletar($post){
            $Usuario = new Usuario();
            $deletado = $Usuario->delete([
                'id' => $post['id']
            ]);
            if ($deletado){
                return json_encode([
                    "access" => true,
                    "message" => "Deletado com sucesso"
                ]);
            } else {
                return json_encode([
                    "access" => false,
                    "message" => "Erro na exclusão"
                ]);
            }  
        }
    }
?>