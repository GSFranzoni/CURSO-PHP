<div class="titulo">
    Escrever arquivo
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $arquivo = fopen('teste.txt', 'w');
        fwrite($arquivo, "Valor inicial\n");
        fwrite($arquivo, "Segunda linha\n");
        fclose($arquivo);

        $arquivo = fopen('teste.txt', 'w');
        fwrite($arquivo, "Novo conteúdo");
        fclose($arquivo);

        $arquivo = fopen('teste.txt', 'a');
        fwrite($arquivo, " com novos valores\n");
        fclose($arquivo);

        // x -> warning se arquivo já existir
        $arquivo = fopen('teste2.txt', 'x');
        fwrite($arquivo, "Arquivo novo\n");
        fclose($arquivo);
    ?>
</div>