<div class="titulo">
    Desafio Switch
</div>

<div style='padding: 20px; font-size: 1.4rem;'>
    <form action="#" method="post">
        <input placeholder="Digite o valor a ser convertido" type="text" name="param" id="param">
        <select name="conversao" id="conversao">
            <option value="km-milha">Km > Milha</option>
            <option value="milha-km">Milha > Km</option>
            <option value="metro-km">Metros > Km</option>
            <option value="km-metro">Km > Metros</option>
            <option value="celsius-fah">Celsius > Fahrenheit</option>
            <option value="fah-celsius">Fahrenheit > Celsius</option>
        </select>
        <button>Calcular</button>
    </form>
    <?php  
        $param = $_POST['param'];
        switch($_POST['conversao']) {
            case 'km-milha':
                print 'Resultado: '. ($param*0.62137);
            break;
            case 'milha-km':
                print 'Resultado: '. ($param/0.62137);
            break;
            case 'metro-km':
                print 'Resultado: '. ($param/1000);
            break;
            case 'km-metro':
                print 'Resultado: '. ($param*1000);
            break;
            case 'celsius-fah':
                print 'Resultado: '. (($param*1.8)+32);
            break;
            case 'fah-celsius':
                print 'Resultado: '. (($param-32)/1.8);
            break;
        }
    ?>
</div>

<style>
    form > * {
        font-size: 1.8rem;
        width: 100%;
        margin: 5px;
        padding: 5px;
    }
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>