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
            echo "<br>"."<br>";            
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
            echo "<br>"."<br>"; 
            
            $arreglo = array (2, "Hola", 5);
            print_r($arreglo);

            //echo 'arreglo' [1];
            
        ?>
        </h1>
        <pre>
            <h2>
                <?php
                    var_dump($arreglo);
                    //echo 'Esta es otra sección';
                    echo "<br>"."<br>"; 
                    $arreglo[] = "Python";
                    var_dump($arreglo);
                    
                    $usuarios = array ('nombre' => 'Juan', "Apellido" => "Zabala", "Cedula" => 1234);
                    echo "<h1>".$usuarios['nombre']."</h1>";
                        
                ?>
            </h2>
            
        </pre>
    </body>
</html>
