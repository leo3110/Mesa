<main class="m-1 border rounded">
  <div id="Cima" class="">
    <div id="Ident" class="border-bottom Flex JCC">
      <span id="nome" class="mx-auto">Finn - Humano 1</span>
    </div>
    <div class="Flex row">
      <div class="Flex Col JCSA CentroY col-2 mx-auto">
        <?php
        include './Class/Ficha.php';
        $ficha = new Ficha();
        $ficha->atrib();
        ?>
      </div>
      <div class="col">
        <div class="Flex Wrap">
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
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="Baixo">
    <div id="resultado">dsadssa    </div>
  </div>
</main>
<!-- <div class="Dados Flex SAround">
  <div class="Flex SAround">
    <button id="dado"  type="button" class="" onclick="D20()">D20</button>
    <button id="dado"  type="button" class="" onclick="D10()">D10</button>
    <button id="dado"  type="button" class="" onclick="D100()">D100</button>
    <button id="dado"  type="button" class="" onclick="D6()">D6</button>
    <button id="dado"  type="button" class="" onclick="Moeda()">Cara ou coroa</button>
  </div>
  <div class="Resultado">
    <span id="resultado">"MESA"</span>
  </div>
</div> -->
