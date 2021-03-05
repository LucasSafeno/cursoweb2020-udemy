<?php
        # importar Scripts
    require "scripts/tarefa.model.php";
    require "scripts/tarefa.service.php";
    require "scripts/conexao.php";


    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
        
 
    if($acao == 'inserir'){

            # Instancia obj Tarefa
            $tarefa = new Tarefa();
            $tarefa->__set('tarefa', $_POST['tarefa']);

            $conexao = new Conexao();

            $tarefaService = new TarefaService($conexao, $tarefa);
            $tarefaService->inserir();


            header("Location: nova_tarefa.php?inclusao=1");
    }else if($acao == 'recuperar'){
        

        # Instancia Tarefa
        $tarefa = new Tarefa();

        #Instancia Conexão
        $conexao = new Conexao();

        #instancia TarefaService
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
        

    }else if ($acao == 'atualizar'){
       
            #Instancia Tarefa
            $tarefa = new Tarefa();
            $tarefa->__set('id', $_POST['id'])
                    ->__set('tarefa', $_POST['tarefa_']);

            #Conexao
            $conexao = new Conexao();

            #TarefaService
            $tarefaService = new TarefaService($conexao, $tarefa);
                 if($tarefaService->atualizar()){
                header("Location: todas_tarefas.php");
                 }

    }else if($acao == 'remover'){
            $tarefa = new Tarefa();
            $tarefa->__set('id', $_GET['id']);

            $conexao = new Conexao();

            $tarefaService = new TarefaService($conexao, $tarefa);
            $tarefaService->remover();
            header("Location: todas_tarefas.php");
    }else if($acao == 'marcarRealizada'){
            $tarefa = new Tarefa();
            $tarefa->__set('id', $_GET['id'])->__set('id_status', 2);

            $conexao = new Conexao();

            $tarefaService = new TarefaService($conexao, $tarefa);
            $tarefaService->marcarRealizada();

            header("Location: todas_tarefas.php");


    }


?>