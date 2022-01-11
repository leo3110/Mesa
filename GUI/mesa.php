<div class="Mesa">
  <div class="Ficha 💪">
    <div class="Atributos">
      <?php
        include './Class/Ficha.php';
        $ficha = new Ficha();
        $ficha->atrib();
       ?>
    </div>
    <div class="Informacao">
      <h1>
        <span id="nome">Finn - Humano</span>
        <span id="nivel">1</span>
      </h1>
      <div class="💪">
        <?php
          include './Class/Equipamento.php';
          $equipamento = new Equipamento();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
          $equipamento->equip();
         ?>
      </div>
    </div>
  </div>
  <div class="💪 Dados">
    <div class="">
      <button id="dado"  type="button" class="" onclick="D20()">D20</button>
      <button id="dado"  type="button" class="" onclick="D10()">D10</button>
      <button id="dado"  type="button" class="" onclick="D100()">D100</button>
      <button id="dado"  type="button" class="" onclick="D6()">D6</button>
      <button id="dado"  type="button" class="" onclick="Moeda()">Cara ou coroa</button>
    </div>
    <div class="Resultado">
      <span id="resultado">"MESA"</span>
    </div>
  </div>
</body>
</html>
</div>
