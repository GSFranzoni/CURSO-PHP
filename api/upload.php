<div class="titulo">
    Upload
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        print_r($_FILES);

        if($_FILES && $_FILES['arquivo']) {
            $pastaUpload = '/';
            $nomeArquivo = $_FILES['arquivo']['name'];
            $arquivo = $pastaUpload . $nomeArquivo;
            $temp = $_FILES['arquivo']['tmp_name'];

            if(move_uploaded_file($temp, $arquivo)) {
                print 'Arquivo válido e enviado com sucesso!<br>';
            }
            else {
                print 'Erro no upload do arquivo! <br>';
            }
        }
    ?>

    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <button>Enviar</button>
    </form>
</div>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>