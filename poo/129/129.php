<?php
class Sequencia{
    private $inicio;
    private $fim;

    public function setInicio($inicio){
        $this->inicio = $inicio;
    }

    public function setFim($fim){
        $this->fim = $fim;
    }

    public function exibirTodosNumeros(){
        $resultado = "";
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            $resultado .= $i . " ";
        }
        return $resultado;
    }

    public function exibirPares(){
        $resultado = "";
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 == 0) {
                $resultado .= $i . " ";
            }
        }
        return $resultado;
    }

    public function exibirImpares(){
        $resultado = "";
        for ($i = $this->inicio; $i <= $this->fim; $i++) {
            if ($i % 2 != 0) {
                $resultado .= $i . " ";
            }
        }
        return $resultado;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inicio = $_POST['inicial'];
    $fim = $_POST['final'];
    $mostrar = $_POST['mostrar'];

    $sequencia = new Sequencia();
    $sequencia->setInicio($inicio);
    $sequencia->setFim($fim);

    $resultado = "";

    if ($mostrar == "all") {
        $resultado = $sequencia->exibirTodosNumeros();
    } elseif ($mostrar == "par") {
        $resultado = $sequencia->exibirPares();
    } elseif ($mostrar == "imp") {
        $resultado = $sequencia->exibirImpares();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Sequência</title>
</head>

<body>
    <h2>Resultado da Sequência</h2>
    <p><?php echo $resultado; ?></p>
</body>

</html>
