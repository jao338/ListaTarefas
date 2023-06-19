<?php

    class tarefa {

        function insert_task ($titulo, $descricao, $data, $id){

            $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
            mysqli_select_db($conexao, "ListaTarefas");
    
            $retorno = false;
    
            $res = mysqli_query($conexao, "INSERT INTO `tarefa` (`Titulo`, `Status`, `Descricao`, `Data`) VALUES ('$titulo', '0', '$descricao', '$data', '$id')");
    
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
            <th scope='row'>$vetor[1]</th>
            <td>$vetor[0]</td>
            <td>$vetor[2]</td>
            <td>$vetor[3]</td>
            <td><button type='button' id='btn-view' class='btn btn-glass' data-bs-toggle='modal' data-bs-target='#EditModal'><img src='img-icon/edit/512x512.png' alt='icon' width='24' height='24' class='icon-view'></button></td>
            <td><button type='button' id='btn-view' class='btn btn-glass' data-bs-toggle='modal' data-bs-target='#RemoveModal'><img src='img-icon/remove/512x512.png' alt='icon' width='24' height='24' class='icon-view'></button></td>
            <td><button type='button' id='btn-view' class='btn btn-glass' data-bs-toggle='modal' data-bs-target='#ViewModal'><img src='img-icon/view/512x512.png' alt='icon' width='24' height='24' class='icon-view'></button></td>

            <tr>";

            }

        }

        function select_task ($titulo){

            $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
            mysqli_select_db($conexao, "ListaTarefas");
    
            $retorno = "";
    
            $res = mysqli_query($conexao, "SELECT * FROM `tarefa` WHERE `Titulo` LIKE 'Titulo'");
    
            while ($vetor = mysqli_fetch_array($res)) {
               
            $retorno .= ($vetor["Titulo"] . $vetor["Status"] . $vetor["Descricao"]. $vetor["Data"]);
    
            }
            
        return $retorno;
    
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

        function edit_task ($titulo, $new_titulo, $descricao, $data){
    
            $retorno = false;
    
            $n1 = $this->remove_task($titulo);
            $n2 = $this->insert_task($new_titulo, $descricao, $data);

            if($n1 && $n2){
                $retorno = true;
            }

        return $retorno;
    
        }

        function edit_status ($titulo, $status){
    
            $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
            mysqli_select_db($conexao, "ListaTarefas");
    
            $retorno = false;
    
            if($status == 0){
                $res = mysqli_query($conexao, "UPDATE `tarefa` SET `Status` = '1' WHERE `tarefa`.`Titulo` = '$titulo'");
            }else if($status == 1){
                $res = mysqli_query($conexao, "UPDATE `tarefa` SET `Status` = '0' WHERE `tarefa`.`Titulo` = '$titulo'");
            }

            if($res != null){
                $retorno = true;
            }

        return $retorno;
    
        }
        
    }
 
?>
