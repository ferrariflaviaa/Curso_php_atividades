<?php
    trait Objeto{

        public function teste(){
            echo "testando trait de objeto <br>";
        }
    }

    trait Testando{

        public function traiTestando(){
            echo "Metodo testando";
        }
    }

    class Central{

        use Objeto;
        use Testando;
    }

    $s = new Central();
    $s->teste();
    $s->traiTestando();