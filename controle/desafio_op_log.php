<div class="titulo">
    Desafio Operadores Lógicos
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <form action="#" method='post'>
        <div>
            <label for="t1">Trabalho 1 (Terça):</label>
            <select name="t1" id="t1">
                <option value="1">Executado</option>
                <option value="0">Não executado</option>
            </select>
        </div>
        <div>
            <label for="t2">Trabalho 2 (Quinta):</label>
            <select name="t2" id="t2">
                <option value="1">Executado</option>
                <option value="0">Não executado</option>
            </select>
        </div>
        <button>Executar</button>
    </form>
    <?php
        if ($_POST['t1'] and $_POST['t2']) {
            print 'TV 50\' e sorvete!';
        }
        else if ($_POST['t1'] or $_POST['t2']) {
            print 'TV 32\' e sorvete!';
        }
        else {
            print 'Fica em casa mais saudável!';
        }
    ?>
</div>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>