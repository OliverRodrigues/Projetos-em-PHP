<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de sangue</title>
</head>
<body>
    <?php
    $idade = $_POST["idade"];
    $peso = $_POST["peso"];

    function pesoIdeal($peso)
    {
        $pesoIdeal = "";

        if ($peso >= 50) {
            $pesoIdeal = "Seu peso está dentro dos requisitos minimos.";
        } else {
            $pesoIdeal = "Você precisa ter mais de 50kg para ser um doador.";
        }

        return $pesoIdeal;
    }

    function idadeIdeal($idade)
    {
        $idadeIdeal = "";

        if ($idade > 18 && $idade <= 69) {
            $idadeIdeal = "Sua idade está dentro dos requisitos minimos.";
        } 

        else {
            $idadeIdeal = "Você precisa ter entre 18 e 69 anos para ser um doador.";
        }

        return $idadeIdeal;
    }

    function doar ($peso, $idade) 
    {
        $doar = "";

        if($peso <50)
        {   echo "Peso não permitido"; 
        }
        
        elseif($idade < 18 || $idade >69)
        {   echo "Idade não permitida."; 
        }
        
        else{
             echo "Você pode doar sangue!";
            }
        }
    ?>
    
    <div>
        <p>Veja se você pode doar sangue:</p>
        <hr>
    </div>

    <div>
        <p><b>Peso informado: </b><?= $peso ?>Kg | <?= pesoIdeal($peso)  ?></p>
        <p><b>Idade informada: </b><?= $idade ?> anos | <?= idadeIdeal($idade)  ?></p>
        <hr>
        <p><b>Veja se você pode ser um doador</b></p>
        <p><b>Classificação: </b><?= doar ($peso, $idade) ?></p>
    </div>

</body>

</html>