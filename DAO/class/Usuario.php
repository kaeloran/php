<?php
class Usuario
{
    private $id;
    private $login;
    private $senha;
    private $dtcadastro;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }


    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($value)
    {
        $this->login = $value;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($value)
    {
        $this->senha = $value;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($value)
    {
        $this->dtcadastro = $value;
    }

    public function loadById($id)
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE id = :ID", array(
            ":ID" => $id
        ));


        if (count($result) > 0) {
            $this->setData($result[0]);
        }
    }

    public function getList()
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios ORDER BY login");
        return $result;
    }

    public function login($login, $password)
    {
        $result = $this->rowByUsuarioSenha($login, $password);

        if (count($result) > 0) {
            $this->setData($result[0]);
        } else {
            throw new Exception("Login e/ou senha inválidos");
        }
    }

    public function insert($login, $password)
    {
        $result = $this->rowByUsuarioSenha($login, $password);

        if (count($result) == 0) {
            $sql = new Sql();
            $sql->query("INSERT INTO tb_usuarios (login, senha) VALUE(:LOGIN, :SENHA)", array(
                ":LOGIN" => $login,
                ":SENHA" => $password
            ));
        }
    }

    public function __toString()
    {
        return json_encode(array(
            "id" => $this->getId(),
            "login" => $this->getLogin(),
            "senha" => $this->getSenha(),
            "dt_cadastro" => $this->getDtcadastro()
        ));
    }

    private function rowByUsuarioSenha($login, $password) : array
    {
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_usuarios WHERE login = :LOGIN AND senha = :SENHA", array(
            ":LOGIN" => $login,
            ":SENHA" => $password
        ));

        return $result;
    }

    private function setData($row)
    {
        $this->setId($row["id"]);
        $this->setLogin($row["login"]);
        $this->setSenha($row["senha"]);
        $this->setDtcadastro($row["dt_cadastro"]);
    }
}

?>