<?php
        header('Content-Type: text/html; charset=utf-8');
        //variaveis
        $peso = ($_POST["peso"]);
        $altura = ($_POST["altura"]);
        $imc = 0;
        $nome = ($_POST["nome"]);


        if (isset($_POST["peso"]) && !empty($_POST["peso"]) && isset($_POST["altura"]) && !empty($_POST["altura"])) {

            echo "<h1> Calculadora </h1>";
            $imc = $peso / ($altura * $altura);

        if ($imc < 16){
            echo "<label style='color: red'>Peso deficiário</label> <br>";
            echo "<br><img src='img/muitoabaixo.jpg'> <br>";
            echo"<br> Peso: " . $peso;
            echo"<br> Altura: " . $altura;
            echo"<br>Nome: " . $nome;
        }
        else if ($imc >= 16 && $imc < 18.5){
            echo "<label style='color: blue'>Abaixo do peso</label> <br>";
            echo "<br><img src='img/abaixodopeso.jpg'><br>";
            echo"<br>Peso: " . $peso;
            echo"<br> Altura: " . $altura;
            echo"<br>Nome: " . $nome;
        }
        else if ($imc >= 18.5 && $imc <=24){
            echo "<label style='color: chocolate'>Peso normal</label> <br>";
            echo "<br><img src='img/pesonormal.jpg'>";
            echo" <br> Peso: " . $peso;
            echo"<br> Altura: " . $altura;
            echo"<br> Nome: " . $nome;
        }
        else if ($imc <=25 && $imc <30){
            echo "<label style='color: darkcyan'>Acima do peso</label>";
            echo "<br><img src='img/acimadopeso.jpg'>";
            echo" <br> Peso: " . $peso;
            echo"<br> Altura: " . $altura;
            echo"<br> Nome: " . $nome;
        }
        else if ($imc >=30 && $imc <35){
            echo "<label style='color: midnightblue'>Obesidade Grau 1</label>";
            echo "<br><img src='img/obesidade1.jpg'>";
            echo" <br> Peso: " . $peso;
            echo" <br> Altura: " . $altura;
            echo"<br> Nome: " . $nome;
        }
        else if($imc >=35 && $imc <40){
            echo "<label style='color: midnightblue'>Obesidade Grau 2</label>";
            echo "<br><img src='img/obesidade2.jpg'>";
            echo"<br>Peso: " . $peso;
            echo"<br>Altura: " . $altura;
            echo"<br>Nome: " . $nome;
        }
        else if($imc <40){
            echo "<label style='color: lightcoral'>Obesidade Grau 3</label>";
            echo "<br><img src='img/obesidade3.jpg'>";
            echo"<br> Peso: " . $peso;
            echo"<br> Altura: " . $altura;
            echo"<br> Nome: " . $nome;

        }
        else {
            echo "Houve um pequeno erro, digite novamente!";
        }


      echo "<br><a href='imc.html'>Voltar</a>";
        }



    ?>