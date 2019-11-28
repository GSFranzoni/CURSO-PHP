<?php  
    namespace Nome\Bem\Grande;

    const constante1 = 123;

    print constante1. '<br>';

    function soma($a, $b) {
        return $a+$b;
    }

    class Classe {
        public $var;

        function func() {
            print __NAMESPACE__. ' -> '. __CLASS__ . ' -> '. __METHOD__. '<br>';
        }
    }
?>