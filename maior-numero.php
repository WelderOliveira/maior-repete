public function maiorNumero()
{
    $arraySorteado = array();
    while (count($arraySorteado) < 20) {
        array_push($arraySorteado, rand(1, 10));
    }
    $arrayValues = array_count_values($arraySorteado);
    $maior = max($arrayValues);
    $qntRepete = array_search($maior, $arrayValues);

    echo "O número que mais se repete é o {$qntRepete} <br>";
    echo "Ele se repete {$maior} vezes";
}