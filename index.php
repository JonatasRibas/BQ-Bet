
<?php
$mensagem="";
if(isset($_POST['ra'])){
    $ra=$_POST['ra'];
    $bra=$_POST['bra'];
    $ser=$_POST['ser'];
    $impedimento=$_POST['impedimento'];
    $cartao=$_POST['cartao'];
    $falta=$_POST['falta'];

    $con = mysqli_connect('localhost:3399', 'root', '', 'bqbet') or die('CAIUUU IRMÃO');
    $query="INSERT INTO cadastros (ra, bra, ser, impedimento, cartao, falta) VALUES ('$ra', '$bra', '$ser', '$impedimento', '$cartao', '$falta')";
    $result = mysqli_query($con, $query);
    if ($result==false) {
        $mensagem="Houve um erro";
    } else{
        $mensagem="Dados cadastrados";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/football.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>BQBet</title>
</head>
<body>


    <form action="" method="POST">

    <h1>Bolão da Copa <img src="img/world-cup.png" alt=""> </h1>

    <br>

    <div>
        <label for="text1">Digite o seu RA:</label>
        <input type="text" name="ra" required>
    </div>

    <br>

    <div id="play1">
    <h3> <img src="img/brazil-flag.png" alt=""> Brasil x Servia <img src="img/servia.png" alt=""> </h3>
    <br>
    <input type="number" id="inpt1" placeholder="BRA" name="bra" require> x <input type="number" id="inpt2" placeholder="SER" name="ser" required>

    <br><br>

    <p><strong>Impedimentos:</strong></p>
    <input type="number" id="inpt3" placeholder="" name="impedimento"required> 

    <br><br>

    <p><strong>Cartões:</strong></p>
    <input type="number" id="inpt4" placeholder="" name="cartao" required> 
    
    <br><br>

    <p><strong>Faltas:</strong></p>
    <input type="number" id="inpt5" placeholder="" name="falta" required> 
    

    <br><br>
    <input type="submit" value="Tentar a Sorte" name="enviar" class="botao">

    </div>

    <br>

    <?php echo $mensagem; ?>

    </form>
</body>
</html>