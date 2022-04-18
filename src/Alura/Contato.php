<?php

namespace App\Alura;

class Contato
{

    private $email;

    public function __construct(string $email)
    {
        if ($this->validaEmail($email) != false) {
            $this->email = $email;
        }else{
            $this->email = "E-mail inválido";
        }
    }

    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, '@');

        if ($posicaoArroba === false) {
            return "Usuário inválido";
        }

        return substr($this->email, 0, $posicaoArroba);
    }

    private function validaEmail(string $email): string
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
