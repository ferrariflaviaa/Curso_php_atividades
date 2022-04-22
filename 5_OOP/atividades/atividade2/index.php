<?php 

    trait Geral {
        function contaM($soma1, $soma2){
            echo $soma1 + $soma2;
        }
    }
    class Usuario{
        public $nome;
        public $codigo;
        public $idade;

        function __construct($nome, $codigo, $idade) {
            $this->nome = $nome;
            $this->codigo = $codigo;
            $this->idade = $idade;
        }

        function mostra(){
            echo "O nome é $this->nome e o codigo é $this->codigo e a idade é $this->idade <br>";
        }
    }

    class PessoaF extends Usuario{
        use Geral;
    }

    $eu = new PessoaF("Flávia", 23193, 20);
    $eu->mostra();
    $eu->contaM(2,2);