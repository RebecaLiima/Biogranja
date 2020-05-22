<?php


class UsuarioViewModel
{
    private $usuario;

    public function loadUsuarios()
    {
      $this->usuario = new Usuario();
      $usuarios = $this->usuario->getUsuarios();

      return $usuarios;

    }

    public function cadastrarUsuarios($nome, $login, $senha, $tipo)
    {
        $user = $this->usuario->addUsuario($login, $nome, $senha, $tipo);

        return $user;
    }

}