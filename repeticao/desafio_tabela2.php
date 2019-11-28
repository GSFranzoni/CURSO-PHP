<div class="titulo">
    Desafio Tabela 2
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <form action="#" method="post">
        <label for="linhas">Quantidade de linhas</label>
        <input type="number" name="linhas" id="linhas">
        <label for="colunas">Quantidade de colunas</label>
        <input type="number" name="colunas" id="colunas">
        <button>Gerar tabela</button>
    </form>
    <?php 
        $nlinhas = isset($_POST['linhas'])? $_POST['linhas']: 0;
        $ncolunas = isset($_POST['colunas'])? $_POST['colunas']: 0;
        $valor = 0;
        print '<table>';
        for ($i=0; $i<$nlinhas; $i++) {
            $bgcolor = $i%2==0? "#222": "white";
            $color = $i%2==0? "white": "black";
            print "<tr bgcolor=$bgcolor style='color: $color;'>";
            for ($j=0; $j<$ncolunas; $j++) {
                print "<td> $valor </td>";
                $valor++;
            }
            print '</tr>';
        }
        print '</table>';
    ?>
</div>

<style>
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    form > * {
        width: 100%;
        font-size: 1.2rem;
        margin: 4px;
        padding: 4px;
    }
    button {
        margin: 20px;
    }
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table tr {
        border: 1px solid #444;
    }
    table td {
        padding: 10px 20px;
    }
</style>