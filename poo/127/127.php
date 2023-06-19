<?php
class Retangulo{
    private $ladoMaior;
    private $ladoMenor;

    public function setLadoMaior($maior){
        $this->ladoMaior = $maior;
    }

    public function setLadoMenor($menor){
        $this->ladoMenor = $menor;
    }

    public function calculaArea(){
        return $this->ladoMaior *  $this->ladoMenor;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $largura = $_POST['largura'];
    $altura = $_POST['altura'];

    $retangulo = new Retangulo();
    $retangulo->setLadoMaior($largura);
    $retangulo->setLadoMenor($altura);
}
?>
<h2>Retângulo</h2>
<p>A área é: <?php echo $retangulo->calculaArea(); ?></p>