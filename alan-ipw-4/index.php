<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
 <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Eu amo PHP</title>
  </head>
  <body>
    <header class="d-flex">
      <div class="container align-items-center">
        <h1>Denicreydsson - IPW 3 MENDES</h1>
      </div>
      
    </header>
    <section class="container">
      <div class="row p-2">
        <main class="col">
			<?php 
				echo $_GET['dir'];
				echo $_GET['file'];
			?>
          <div class="row">
            <div class="col-md-4">
              <div class="modulo verde-escuro">
                <h3>PHP INTRODUÇÃO</h3>
                <ul>
                  <li><a href="?dir=1_introducao&file=1_echo">1_echo</a></li>
                  <li><a href="2_comentario.php">2_comentario</a></li>
                </ul>
            </div>
            </div>
          </div>
        </main>
      </div>
    </section>
    <footer>
      <div class=" container row">
        Copyright <?php echo date('y'); ?> - CTI Mendes Sub
      </div>
    </footer>
  </body>
</html>





