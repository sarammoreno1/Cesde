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
        <!--<h1>
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
                    echo "hola"."<br>";
                    $existe = in_array("Juan", array_values($usuarios));
                    var_dump($existe);
                    //Recorriendo un arreglo con foreach
                    foreach ($usuarios as $user){
                        echo"<li>".$user."</li>";
                    }
                                        
                ?>
                <ul>
                    <?php
                    //Utilizando  foreach  para  mostrar  indice  y  valor  del  arreglo  
                        foreach ($usuarios as $user){
                            echo "<li>".$user."</li>";
                        }
                        
                        foreach ($usuarios as $key => $user){
                            
                            echo "<li>".$key." ".$user."</li>";
                        }
                    //Ciclo for
                        for ($i = 0; $i < 4; $i++){
                            echo $i;
                        }
                    //while
                        $cont = 0;
                        while ($cont < 5){
                            if ($cont ==3){
                                break;
                            }
                        }
                        $cont++;
                        
                    ?>
                    
                    
                </ul>
                
            </h2>

        </pre>
        <pre>
        //Arreglos indexados en php
            <?php
            //Los arreglos empiezan desde la posición cero
            $lenguaje = ['Html', 'CSS', 'Javascript'];
            print_r($leguaje);
            //Se agrega un nuevo elemento
            $lenguaje [] = "Python";
            //Borrar el último elemento de array y pone en una variable
            $Python = array_pop ($lenguaje);
            echo $python;
            echo "<br>";
            //Borrar primer elemento 
            unset ($lenguaje[0]);
            //Remover primer elemento y asignarlo a una variable 
            $CSS = array_shift($lenguaje);
            
            echo $css;
            ?>
        </pre>-->
        
        //Funciones en php
        <?php
            function saludar() 
            {
                echo "<h2>". "Hola a todos". "</h2>. "<br>";                   
            }
          saludar (); //Aquí llamo la función 
          echo "<br>";

          //Con parametros
          function usuario($nombre, $tel) 
            {
              echo 'Nombre: '.$nombre;
              echo 'Teléfono: '.$tel;
            }
            usuario ("Juan",3485212);

        ?>
        
        
    </body>
</html>
