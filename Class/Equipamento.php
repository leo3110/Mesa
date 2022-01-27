<?php
/**
 *
 */
class Equipamento
{
  private $nome = 'espada magica';
  private $acao = ['ATK'=>'for','DEF'=>'res','APR'=>'des','CJR'=>'int'];
  private $bonus = ['for'=>1,'int'=>1];
  //
  // public function info(){
  //   echo "<div class='Informacao'>
  //           <span id='nome'>Finn - Humano</span>
  //           <span id='nivel'>1</span>
  //         <div class='Flex'>";
  // }
  public function equip(){
    echo "<div class='mx-1'>";
    echo "<div class=''>$this->nome</div>";
    echo "<div class=''>";
        foreach ($this->acao as $key => $value) {
          if (isset($this->bonus["$value"])) {
            echo "<button class='' dado='".$value."' bonus='".$this->bonus["$value"]."'>$key</button>";
          }
          else {
            echo "<button class='' dado='".$value."' bonus='0'>$key</button>";
          }
        }
    echo "</div>";
    echo "</div>";
  }
}
