<div class="titulo">
    Ler arquivo
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
    $arquivo = fopen('teste.txt', 'r');
    print fread($arquivo, 10). '<br>';
    print fread($arquivo, 10). '<br>';
    print fread($arquivo, 10). '<br>';
    fclose($arquivo);

    print '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    print fread($arquivo, filesize('teste.txt')). '<br>';
    fclose($arquivo);

    print '<hr>';
    $arquivo = fopen('teste.txt', 'r');
    print fgets($arquivo). '<br>';
    print fgets($arquivo). '<br>';
    fclose($arquivo);

    print '<hr>';
    $arquivo = fopen('teste.txt', 'r');
    while(!feof($arquivo)) {
        print fgets($arquivo). '<br>';
    }
    fclose($arquivo);

    print '<hr>';
    $arquivo = fopen('teste.txt', 'r');
    while(!feof($arquivo)) {
        print fgetc($arquivo);
    }
    fclose($arquivo);
    print '<br><hr>';

    $arquivo = fopen('teste.txt', 'r+');
    print fgets($arquivo). '<br>';
    print fgets($arquivo). '<br>';
    fwrite($arquivo, "\nAdicionando conteúdo durante a leitura!");
    fclose($arquivo);

    ?>
</div>