<div class="titulo">
    Download
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        session_start();
        $arquivos = $_SESSION['arquivos'] ?? [];
        $pastaUpload = _DIR_ . '/../files/';
        $nomeArquivo = $_FILES['arquivo']['name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        $tmp = $_FILES['arquivo']['tmp_name'];
        if(move_uploaded_file($tmp, $arquivo)) {
            print 'Arquivo válido e enviado com sucesso!<br>';
            $arquivos[] = $nomeArquivo;
            $_SESSION['arquivos'] = $arquivos;
        }
        else {
            print 'Erro no upload de arquivo!<br>';
        }
    ?>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo" id="arquivo">
        <button>Enviar</button>
    </form>
    <ul>
        <?php foreach ($arquivos as $arquivo):?>
            <li>
                <a href="../files/<?= $arquivo ?>">
                    <?= $arquivo ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>