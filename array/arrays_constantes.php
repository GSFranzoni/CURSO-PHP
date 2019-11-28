<div class="titulo">
    Arrays constantes
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        const FRUTAS = array('Laranja', 'Abacaxi'); //IMUTÁVEL
        print FRUTAS[0]. '<br>';

        const CARROS = array('Fiat' => 'Uno' , 'Ford' => 'Fiesta'); //IMUTÁVEL
        print CARROS['Fiat']. '<br>';

        define ('CIDADES', array('BH', 'Ubá', 'JF'));
        print CIDADES['0']. '<br>';
    ?>
</div>