<?php

    class tarefa {

        function insert_task ($titulo, $descricao, $data, $id){

            $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
            mysqli_select_db($conexao, "ListaTarefas");
    
            $retorno = false;
    
            $res = mysqli_query($conexao, "INSERT INTO `tarefa` (`Titulo`, `Descricao`, `Data`, `Id`) VALUES ('$titulo', '$descricao', '$data', '$id')");
    
            if($res != null){
                $retorno = true;
            }
    
        return $retorno;
    
        }

        function select_all ($id){

            $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
            mysqli_select_db($conexao, "ListaTarefas");
    
            $res = mysqli_query($conexao, "SELECT * FROM `tarefa` WHERE Id = '$id';");
    
            while ($vetor = mysqli_fetch_array($res)) {

            echo"<tr onclick='getIndex(this)'>
            <td>$vetor[0]</td>
            <td>$vetor[1]</td>
            <td>$vetor[2]</td>
            <tr>";

            }

        }

        function select_task ($titulo){

            $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
            mysqli_select_db($conexao, "ListaTarefas");
    
            $res = mysqli_query($conexao, "SELECT * FROM `tarefa` WHERE `Titulo` LIKE '$titulo'");
    
            while ($vetor = mysqli_fetch_array($res)) {

            echo"<tr onclick='getIndex(this)'>
            <td>$vetor[0]</td>
            <td>$vetor[1]</td>
            <td>$vetor[2]</td>

            
            <tr>";

            }

        }

        function select_data ($titulo){

            $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
            mysqli_select_db($conexao, "ListaTarefas");
    

            $res = mysqli_query($conexao, "SELECT * FROM `tarefa` WHERE Titulo = '$titulo';");
    
            while ($vetor = mysqli_fetch_array($res)) {

            echo $vetor[2];

            }

        }

        function select_desc ($titulo){

            $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
            mysqli_select_db($conexao, "ListaTarefas");
    

            $res = mysqli_query($conexao, "SELECT * FROM `tarefa` WHERE Titulo = '$titulo';");
    
            while ($vetor = mysqli_fetch_array($res)) {

            echo $vetor[1];

            }

        }


        function remove_task ($titulo){

            $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
            mysqli_select_db($conexao, "ListaTarefas");
    
            $retorno = false;
    
            $res = mysqli_query($conexao, "DELETE FROM tarefa WHERE `tarefa`.`Titulo` = '$titulo'");
    
            if($res != null){
                $retorno = true;
            }

        return $retorno;
    
        }

        function edit_task ($titulo, $new_titulo, $descricao, $data, $id){
    
            $retorno = false;
    
            $n1 = $this->remove_task($titulo);
            $n2 = $this->insert_task($new_titulo, $descricao, $data, $id);

            if($n1 && $n2){
                $retorno = true;
            }

        return $retorno;
    
        }

        
    }
 
?>
