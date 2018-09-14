<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
        <?php
        //Esto e sun comentario
        $PrimeraVariable = "5";
        $SegundaVariable = "5";
        $lenguaje = "Javascript";    
        
            echo "<br>";            
            echo $PrimeraVariable*$SegundaVariable."<br>"."<br>";
            
            //Estructuras de control
            
            if ($PrimeraVariable < 1 && $SegundaVariable < 2 == 5)
            {
                echo 'Soy menos';                
            }
            else {
                echo 'Soy mayor';
            }
            
            Switch($lenguaje){
                case "Php":
                    echo 'Php';
                    break;
                case "Javascript":
                    echo 'Javascript';
                    break;
                case "Html":
                    echo 'Html';
                    break;
            }
            
            
            
        ?>
        </h1>
        <p>
            <h2>
                <?php
                    echo 'Esta es otra sección';
                ?>
            </h2>
            
        </p>
    </body>
</html>
