<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Prestacao</title>
</head>
<style>
    body{
    background-color: bisque;
    text-align: center;
    color: rgb(153, 115, 58);
    font-size: 30px;
    padding: 20px;
}
.res{
    padding: 20px;
    color: brown;
    font-size: 15px;
}
.inputR{
    padding: 15px;
    text-align: center;
}
</style>
<body>
    <div class="container">
    <div class="titulo">
        <h1 class="prestacao">Calcule sua Prestação</h1>
  
    </div>
<form  method="POST">
         
            <p class="inputN">
             Valor da prestação<input class="inputR" type="number" name="valor" />
            </p>
            <p class="inputN">
            Juros <input class="inputR" type="number" name="juros" />
            </p>
            <p class="inputN">
            Atraso <input class="inputR" type="number" name="atraso" />
            </p>
         
        <button class="res">Calcular</button> <br>
        
        <?php
      if(isset($_POST['valor']) || isset($_POST['juros'])  || isset($_POST['atraso'])){
        $valor = $_POST['valor'];
        $juros = $_POST['juros'];
        $atraso = $_POST['atraso'];
        $prestacao = $valor + ($valor * ($juros/100)* $atraso);

        echo "<p> O valor da prestação com $atraso dias de atraso será de R$ $prestacao devido
         a taxa de $juros%</p>";
      }
            
         ?>
        </form>
        </div>
</body>
</html>