# Manipulação de Strings e Arrays
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)

 ## Descrição
 Repositório criado para compartilhar minha resolução do teste de manipulação de strings.
 
 O arquivo index.php contém o código que foi desenvolvido.

## Objetivo
O desafio consiste em criar uma função em PHP que receba uma string como entrada, conte a frequência de cada caractere e retorne os caracteres em ordem decrescente de frequência. 

Em caso de empate na frequência, os caracteres devem ser ordenados em ordem alfabética.

### Regras:
A função deve tratar letras maiúsculas e minúsculas de forma igual (todas em minúsculo).

Espaços são considerados caracteres válidos.

Se dois caracteres tiverem a mesma frequência, eles devem ser ordenados em ordem alfabética.

## Detalhes do Teste
### Entrada:
Uma string composta por letras (maiúsculas e minúsculas) e espaços.

### Saída:
Um array associativo onde as chaves são os caracteres e os valores são suas respectivas frequências, ordenados de acordo com as regras mencionadas.

### Exemplo de Entrada e Saída:
````php
$string = "banana apple";

// Saída esperada:
$output = [
  'a' => 4, 
  'n' => 2, 
  'p' => 2, 
  'b' => 1, 
  'e' => 1, 
  'l' => 1, 
  ' ' => 1
];
````
