 <?php
    $caracteres = [];                                           // Array que irá conter a contagem dos caracteres
    
    function ordenarCaracteres($palavra)   
    {    
        global $caracteres;
        $palavra = strtolower($palavra);                        // Convertendo a string para minúsculas
        $n = strlen($palavra);                                  //Tamanho da string para iterar sobre os caracteres


        for($i = 0; $i < $n; $i++)                              //Laço que itera sobre cada caractere da string
        {
            if(array_key_exists($palavra[$i], $caracteres))     //Condição que verifica se o caractere já foi contado no array
                {                                               //Se a chave ja existir a contagem é incrementada
                    $caracteres[$palavra[$i]]++;
                }
                else
                {
                    $caracteres[$palavra[$i]] = 1;              //Senão inicia a contagem do caractere como 1
                }     
        }
       
        function comparar($chave1, $chave2)                     //Função que compara os caracteres para ordenar
        {
            global $caracteres;                                 
            
            if($caracteres[$chave1] == $caracteres[$chave2])    //Se a contagem dos caracteres for igual ordena alfabeticamente
            {
                if ($chave1 === ' ') return 1;                                       
                if ($chave2 === ' ') return -1;                 //Move os espaços para o final da string
                
                if($chave1 < $chave2)                          
                {
                    return -1;                                  //Retorna -1 se a chave1 vem antes da chave2 na ordem alfabética                              
                }
                elseif($chave1 > $chave2)
                {
                    return 1;                                  //Retorna 1 se a chave1 vem depois da chave2 na ordem alfabética       
                }
            }
            else                                               //Se a contagem dos caracteres for diferente, ordena pela contagem
            {
                if($caracteres[$chave1] < $caracteres[$chave2])
                {
                    return 1;                                  //Retorna 1 para indicar que a chave2 deve vir antes
                }
                else
                {
                    return -1;                                //Retorna -1 para indicar que a chave1 deve vir antes
                } 
            }
            
        }
       
        uksort($caracteres, "comparar");                    //Ordena o array usando a função de comparação "comparar"
        
       return $caracteres;                                  //Retorna o array ordenado 
    }

    //Testando a função
    $palavra = "Banana Apple";
    $resultado = ordenarCaracteres($palavra);
    print_r($resultado);
?>