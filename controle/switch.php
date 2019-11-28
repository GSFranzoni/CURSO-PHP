<div class="titulo">
    Switch
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $categoria = 'Luxo';

        switch($categoria) {
            case 'Luxo':
                $carro = 'Mercedes';
                $preco = 250000;
                break;
            case 'suv':
            case 'SUV':
                $carro = 'Renegade';
                $preco = 80000;
                break;
            case 'sedan':
                $carro = 'Etios';
                $preco = 55000;
                break;
            default:
                $carro = 'Mobi';
                $preco = 33000;
                break;
        }

        print "Carro: ". $carro. '<br>'. "Preço: R$". number_format($preco, 2, ',', '.');
    ?>
</div>