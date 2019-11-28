<div class="titulo">
    Interface
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <?php 
        interface Animal {
            public function respirar();
        }

        interface Mamifero {
            public function mamar();
        }

        interface Canino extends Animal, Mamifero {
            public function latir();
        }
        
        interface Felino extends Animal, Mamifero {
            public function miar();
        }

        class Cachorro implements Canino {
            public function latir() {
                return 'Cachorro latindo! <br>';
            }

            public function respirar() {
                return 'Cachorro respirando! <br>';
            }

            public function mamar() {
                return 'Cachorro mamando! <br>';
            }
        }

        $dog = new Cachorro();
        print $dog->respirar();

        var_dump($dog instanceof Cachorro);
        var_dump($dog instanceof Animal);
        var_dump($dog instanceof Mamifero);
        var_dump($dog instanceof Canino);
        var_dump($dog instanceof Felino);
    ?>
</div>