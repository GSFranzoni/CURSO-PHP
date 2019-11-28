<div class="titulo">
    Desafio Tabela
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $matrix = [
            ['01', '02', '03', '04', '05', '06'],
            ['07', '08', '09', '10', '11', '12'],
            ['13', '14', '15', '16', '17', '18'],
            ['19', '20', '21', '22', '23', '24']
        ];
        print '<table>';
        foreach ($matrix as $key => $linha) {
            $bgcolor = $key%2==0? "#222": "white";
            $color = $key%2==0? "white": "black";
            print "<tr bgcolor=$bgcolor style='color: $color;'>";
            foreach ($linha as $dado) {
                print "<td> $dado </td>";
            }
            print '</tr>';
        }
        print '</table>';
    ?>
</div>

<style>
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