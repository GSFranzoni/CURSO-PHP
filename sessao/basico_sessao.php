<div class="titulo">
    Básico - sessão
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        error_reporting(E_ERROR);
        session_start();

        print_r($_SESSION). '<br>';

        if(!$_SESSION['nome']) {
            $_SESSION['nome'] = 'Gabriel';
        }

        if(!$_SESSION['email']) {
            $_SESSION['email'] = 'gabriel@email.com';
        }
    ?>

    <p>
        <a href="/Projects/test/sessao/basico_sessao_alterar.php">Alterar sessão</a>
    </p>
</div>