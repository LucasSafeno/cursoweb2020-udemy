<?php
    namespace App\Models;

    class Produto{

        protected $db;

        public function __construct(\PDO $db){
            $this->db = $db;
        } # [/Construct ()]

        public function getProdutos(){
            

            $query = "SELECT id, descricao, preco FROM tb_produtos";
            return $this->db->query($query)->fetchAll(FECTH_ASSOC);

        }# [/getProdutos()]

    } # [/Produto]

?>