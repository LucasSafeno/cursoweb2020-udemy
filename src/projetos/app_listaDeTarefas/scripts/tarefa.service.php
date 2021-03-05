<?php

    class TarefaService{

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao,Tarefa $tarefa){
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }


        public function inserir(){ // create

            # Query
            $query = "INSERT INTO php_pdo.tb_tarefas (tarefa)  VALUES (:tarefa)";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa')); 
            $stmt->execute();


        }

        public function recuperar(){ // read
            # Query
            $query = 'SELECT
                         t.id,s.status, t.tarefa
                      FROM
                         php_pdo.tb_tarefas as t
                         LEFT JOIN php_pdo.tb_status as s on (t.id_status = s.id)';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);


        }


        public function atualizar(){ // update

           #Query
           $query = "UPDATE php_pdo.tb_tarefas set tarefa = ? WHERE id = ?";
           $stmt = $this->conexao->prepare($query);
           $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
           $stmt->bindValue(2, $this->tarefa->__get('id'));
           if($stmt->execute()){
                if(isset($_GET['pag']) &&  $_GET['pag'] == 'index'){
                header("Location: index.php");
            }else {
                header("Location: todas_tarefas.php");
            }
           }

        }

        public function remover(){ // delete

            $query = 'DELETE FROM php_pdo.tb_tarefas WHERE id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            $stmt->execute();
            if(isset($_GET['pag']) &&  $_GET['pag'] == 'index'){
                header("Location: index.php");
            }else {
                header("Location: todas_tarefas.php");
            }

        }



        public function marcarRealizada(){ // update

            #Query
            $query = "UPDATE php_pdo.tb_tarefas SET id_status = ? WHERE id = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id_status'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            if($stmt->execute()){
                if(isset($_GET['pag']) &&  $_GET['pag'] == 'index'){
                    header("Location: index.php");
                }else {
                    header("Location: todas_tarefas.php");
                }
            }
        }


        public function recuperarTarefasPendentes(){
              # Query
              $query = 'SELECT
              t.id,s.status, t.tarefa
           FROM
              php_pdo.tb_tarefas as t
              LEFT JOIN php_pdo.tb_status as s on (t.id_status = s.id)
              WHERE 
                t.id_status = :id_status';
                $stmt = $this->conexao->prepare($query);
                $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_OBJ);


        }
 

    } # //TarefaService




?>