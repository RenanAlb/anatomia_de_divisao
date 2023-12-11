<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anatomia de uma divisão</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <section class="card">
      <h1>Anatomia de uma Divisão</h1>
      <form action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="div">Dividendo</label>
        <input type="number" name="div" required value="0">
        <label for="divs">Divisor</label>
        <input type="number" name="divs" required value="0">
        <button type="submit">Calcular</button>
      </form>
    </section>
    <section class="card">
      <h1>Estrutura da divisão</h1>
      <?php
      $dividendo = $_GET["div"] ?? 0;
      $divisor = $_GET["divs"] ?? 1;
      $res = floor($dividendo / $divisor);
      $sobra = $dividendo % $divisor;

      echo "
      <div class=\"divisao\">
        <div>
          $dividendo
        </div>
        <div class=\"two\">
          $divisor
        </div>
        <div>
          $sobra
        </div>
        <div class=\"four\">
          $res
        </div>
      </div>
      ";
      ?>
    </section>
  </main>
</body>

</html>