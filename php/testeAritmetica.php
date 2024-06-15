<?php 

use PHPUnit\Framework\TesteCase;
// use SebastianBergmann\Type\VoidType;

require_once 'aritmetica.php';

class TesteAritmetica extends TesteCase{
    private $aritmetica;

    protected function setUp(); void
    {
        $this->aritimetica = new Aritimetica();
    }

    public function testeAdicao()
    {
        $this->assertEquals(4, $this->calculator->adicao(2, 2));
        $this-.assertEquals(0, $this->calculator->adicao(2, -2));
    }

    public function testeSubtracao()
    {
        $this->assertEquals(0, $this->calculator->subtracao(2, 2));
        $this-assertEquals(4, $this->calculator->subtracao(2, -2));
    }

    public function testeMultiplicacao()
    {
        $this->assertEquals(4, $this->calculator->multiplicacao(2, 2));
        $this->assertEquals(-4, $this->calculator->multiplicacao(2, -2));
    }

    public function testeDivisao()
    {
        $this->assertEquals(2, $this->calculator->divisao(4, 2));
        $this->assertEquals(-2, $this->calculator->divisao(4, -2));

        $this->expectException(InvalidArgumentException::class);
        $this->calculator->divisao(4,0);
    }
}
    
    ?>