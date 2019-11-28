<div class="titulo">
    $_POST
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <form action="#" method="post">
        <input type="text" name="nome" id="nome">
        <input type="text" name="snome" id="snome">
        <button>Enviar</button>
    </form>
    <?php 
        print_r($_GET);
        print('<br>');
        print_r($_POST);
        
    ?>
</div>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>