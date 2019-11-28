<div class="titulo">
    Desafio Sorteio
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        $nomes = [
            "Elza", "Rapunzel", "Branca de neve", "Cinderela"
        ];
        print '<div center><h1>'. $nomes[array_rand($nomes)]. '</h1></div>';
    ?>
</div>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>