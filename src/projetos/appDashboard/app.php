<?php

 // classe dashboard
 class Dashboard{
 
    public $data_inicio;
    public $data_fim;
    public $numeroVendas;
    public $totalVendas;


    public function __get($atributo){
        return $this->$atributo;
    } // fim get

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
        return $this;

    } // fim set
 } // fim Dashboard

// Classe conexão com banco
class Conexao{

    private $host   =   "localhost";
    private $dbname =   "dashboard";
    private $user   =   "safeno";
    private $pass   =   "160819";


    public function conectar(){
        try{
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            // Collection 
            $conexao->exec('set charset set utf8');

            return $conexao;

        }catch(PDOException $e){
            echo '<p>'.$e->getMessage()."</p";
        }
    }// Fim Conectar
} // Fim conexão


// classe model
class Bd{
    private $conexao;
    private $dashboard;

    public function __construct(Conexao $conexao, Dashboard $dashboard){
        $this->conexao = $conexao->conectar();
        $this->dashboard = $dashboard;
    }// fim construct 


    public function getNumeroVenda(){
        $query  =   '
                    SELECT
                        COUNT(*) as numero_vendas
                    FROM
                        tb_vendas
                     WHERE
                         data_venda BETWEEN :data_inicio and :data_fim';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindvalue(':data_inicio',$this->dashboard->__get('data_inicio'));
        $stmt->bindvalue(':data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->numero_vendas;
    }// Numero de Vendas


    public function getTotalVendas(){
        $query  =   '
                    SELECT
                        SUM(total) as total_vendas
                    FROM
                        tb_vendas
                     WHERE
                         data_venda BETWEEN :data_inicio and :data_fim';

        $stmt = $this->conexao->prepare($query);
        $stmt->bindvalue(':data_inicio',$this->dashboard->__get('data_inicio'));
        $stmt->bindvalue(':data_fim', $this->dashboard->__get('data_fim'));
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_OBJ)->total_vendas;
    }// Total Vendas


}// Fim bd

$dashboard = new Dashboard();
$conexao = new Conexao();


$competencia = explode('-', $_GET['competencia']);
$ano = $competencia[0];
$mes = $competencia[1];

$dias_do_mes = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);


$dashboard->__set('data_inicio', $ano.'/'.$mes.'-01');
$dashboard->__set('data_fim', $ano.'-'.$mes.'-'.$dias_do_mes);


$bd = new Bd($conexao, $dashboard);


$dashboard->__set('numeroVendas',$bd->getnumeroVenda() );
$dashboard->__set('total_vendas',$bd->getTotalVendas() );
//print_r($dashboard);
echo json_encode($dashboard);




?>