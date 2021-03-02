<?php
        # importar Scripts
    require "scripts/tarefa.model.php";
    require "scripts/tarefa.service.php";
    require "scripts/conexao.php";



    # Instancia obj Tarefa
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->inserir();


    header("Location: nova_tarefa.php?inclusao=1");


?>