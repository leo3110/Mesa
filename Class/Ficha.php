<?php
  /**
   *
   */
  class Ficha {
    private $nome = "Finn";
    private $raca = "Humano";
    private $nivel = 1;
    private $atrib = ['Vig'=>99,'For'=>99,'Des'=>99,'Agi'=>99,'Res'=>99,'Int'=>99,'Con'=>99];
    private $equip = ['espada1','espada2'];

    function atrib(){
      echo "<div class=''>Vid: <span id='vidaT'>20</span>/<span id='vidaM'>20</span></span></div>";
      echo "<div class=''>Man: <span id='manaT'>20</span>/<span id='manaM'>20</span>  </span></div>";
      foreach ($this->atrib as $key => $value) {
        echo "<div class=''>$key:$value <i atrib='$key' value='$value' class='fas fa-dice-d20'></i></div>";
      }
    }
    function testAtrib(){
    }
  }
