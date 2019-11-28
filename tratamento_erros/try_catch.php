<div class="titulo">
    Try/Catch
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        try {
            intdiv(10, 0);
        }
        catch(Error $e) {
            print 'Divisão por zero!<br>';
        }
        finally {
            print 'Executado depois!<br>';
        }

        try {
            throw new Exception("Erro desconhecido!");
            intdiv(10, 0);
        }
        catch(Throwable $x) {
            print $x->getMessage(). "<br>";
        }
        catch(DivisionByZeroError $e) {
            print 'Divisão por zero!<br>';
        }
        finally {
            print 'Executado depois!<br>';
        }
    ?>
</div>