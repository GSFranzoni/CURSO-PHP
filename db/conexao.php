<?php 

    function novaConexao($banco = 'cursophp') {
        $host = '127.0.0.1:3308';
        $user = 'franzoni';
        $password = '123456';

        $connection = new mysqli($host, $user, $password, $banco);

        if($connection->connect_error) {
            die('Erro: '. $connection->connect_error);
        }

        return $connection;
    }

?>