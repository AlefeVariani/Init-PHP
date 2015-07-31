<title>algoColoração</title>
<meta charset="utf8">
<?php

$matriz = [
'RS' => [
'ligacao' => ['SC'],
'ligacoes' => 1
],
'SC' => [
'ligacao' => ['RS', 'PR'],
'ligacoes' => 2
],
'PR' => [
'ligacao' => ['SC', 'SP', 'MS'],
'ligacoes' => 3
],
'SP' => [
'ligacao' => ['PR', 'RJ', 'MG', 'MS'],
'ligacoes' => 4
],
'RJ' => [
'ligacao' => ['SP', 'ES', 'MG'],
'ligacoes' => 3
],
'ES' => [
'ligacao' => ['RJ', 'MG', 'BA'],
'ligacoes' => 3
],
'MG' => [
'ligacao' => ['SP', 'RJ', 'ES', 'MS', 'GO', 'BA'],
'ligacoes' => 6
],
'MS' => [
'ligacao' => ['PR', 'SP', 'MG', 'GO', 'MT'],
'ligacoes' => 5
],
'GO' => [
'ligacao' => ['MG', 'MS', 'BA', 'TO', 'MT'],
'ligacoes' => 5
],
'BA' => [
'ligacao' => ['ES', 'MG', 'GO', 'SE', 'AL', 'PE', 'PI', 'TO'],
'ligacoes' => 8
],
'SE' => [
'ligacao' => ['BA', 'AL'],
'ligacoes' => 2
],
'AL' => [
'ligacao' => ['BA', 'SE', 'PE'],
'ligacoes' => 3
],
'PE' => [
'ligacao' => ['BA', 'AL', 'PI', 'CE', 'PB'],
'ligacoes' => 5
],
'PI' => [
'ligacao' => ['BA', 'PE', 'TO', 'MA', 'CE'],
'ligacoes' => 5
],
'TO' => [
'ligacao' => ['GO', 'BA', 'PI', 'MT', 'PA', 'MA'],
'ligacoes' => 6
],
'MT' => [
'ligacao' => ['MS', 'GO', 'TO', 'RO', 'AM', 'PA'],
'ligacoes' => 6
],
'RO' => [
'ligacao' => ['MT', 'AC', 'AM'],
'ligacoes' => 3
],
'AC' => [
'ligacao' => ['RO', 'AM'],
'ligacoes' => 2
],
'AM' => [
'ligacao' => ['MT', 'RO', 'AC', 'PA', 'RR'],
'ligacoes' => 5
],
'PA' => [
'ligacao' => ['TO', 'MT', 'AM', 'MA', 'AP', 'RR'],
'ligacoes' => 6
],
'MA' => [
'ligacao' => ['PI', 'TO', 'PA'],
'ligacoes' => 3
],
'CE' => [
'ligacao' => ['PE', 'PI', 'PB', 'RN'],
'ligacoes' => 4
],
'PB' => [
'ligacao' => ['PE', 'CE', 'RM'],
'ligacoes' => 3
],
'RN' => [
'ligacao' => ['CE', 'PB'],
'ligacoes' => 2
],
'AP' => [
'ligacao' => ['PA'],
'ligacoes' => 1
],
'RR' => [
'ligacao' => ['AM', 'PA'],
'ligacoes' => 2
]
];

function imprime($array) {
    echo implode(', ', $array);
}

function ordenaVetor($array) {
    
    $vetor = [];
    $cont = count($array);
    
    for ($i = 0; $i < $cont; $i++) {
        $maiorLigacao = 0;
        $posicao = 0;
        $vertice = [];
        
        foreach ($array as $chave => $no) {
            if ($no['ligacoes'] > $maiorLigacao) {
                $maiorLigacao = $no['ligacoes'];
                $vertice = $no;
                $posicao = $chave;
            }
        }

        $vetor[$posicao] = $vertice;
        unset($array[$posicao]);
    }
    
    return $vetor;
}

function separavertices($array) {
    
    $T = [];
    $i = 1;
    
    while (!empty($array)) {
        
        $arrayLigacoes = [];
        foreach ($array as $vertice => $valor) {
            if (!in_array($vertice, $arrayLigacoes)) {
                $T[$i][] = $vertice;
                unset($array[$vertice]);
                
                $arrayLigacoes = array_values(
                   array_unique(
                      array_merge($arrayLigacoes, $valor['ligacao'])
                      )
                   );
            }
        }
        $i++;
    }
    
    return $T;
}

$arrayOrdenado = ordenaVetor($matriz);

echo "Lista = { ";
imprime(array_keys($arrayOrdenado));
echo " }<br><br>";

$T = separavertices($arrayOrdenado);

foreach ($T as $k => $t) {
    echo "T$k = { ";
    imprime($t);
    echo " }<br>";
}
