<?php
/**
 *
 */
class Equipamento
{
  private $nome = 'espada magica';
  private $acao = ['atacar'=>'for','defender'=>'res','aparar'=>'des','conjurar'=>'int'];
  private $bonus = ['for'=>1,'int'=>1];

  public function info(){
    echo "<div class='Informacao'>
    <span id='nome'>Finn - Humano</span>
    <span id='nivel'>1</span>
    <div class='💪'>";
  }
  public function equip(){
    echo "<div class='Equipamento'>";
    echo "<div class=''>$this->nome</div>";
    echo "<div class='Botoes'>";
        foreach ($this->acao as $key => $value) {
          if (isset($this->bonus["$value"])) {
            echo "<button class='Funcao' dado='".$value."' bonus='".$this->bonus["$value"]."'>$key</button>";
          }
          else {
            echo "<button class='Funcao' dado='".$value."' bonus='0'>$key</button>";
          }
        }
    echo "</div>";
    echo "</div>";
  }
}
