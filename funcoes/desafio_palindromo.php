<div class="titulo">
    Palíndromo
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <form action="#" method="post">
        <label for="palavra1">Palavra 1:</label>
        <input type="text" name="palavra1" id="palavra1">
        <label for="palavra2">Palavra 2:</label>
        <input type="text" name="palavra2" id="palavra2">
        <button>Verificar</button>
    </form>
    <?php

        function palindromo($a, $b) {
            if(strlen($a)!=strlen($b)) return false;
            for($i=0; $i<strlen($a); $i++) {
                if($a[$i]!=$b[strlen($a)-1-$i]) {
                    return false;
                }
            }
            return true;
        }

        $palavra1 = isset($_POST['palavra1'])? $_POST['palavra1']: null;
        $palavra2 = isset($_POST['palavra2'])? $_POST['palavra2']: null;

        if($palavra1 && $palavra2) {
            print palindromo($palavra1, $palavra2)? "São palídromos!": "Não são palídromos!";
        }
    ?>
</div>

<style>
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    form>* {
        width: 100%;
        font-size: 1.2rem;
        margin: 4px;
        padding: 4px;
    }

    button {
        margin: 20px;
    }
</style>