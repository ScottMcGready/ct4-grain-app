<?php
  // time now
  $date = new DateTime();

  // game day start + 1 hr
  $deadline = new DateTime("2021-05-17 14:30:00");

?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>Grain DB Management System</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column bg">
      <header class="masthead mb-auto">
        <div class="inner">

        </div>
      </header>

      <main role="main" class="inner cover">
        <div class="imgbox">
        <img src="loading.gif"/>
        </div>
        <?php
          if ($date > $deadline) {
        ?>
        <h1 class="cover-heading">Processing fault!</h1>
        <h1 class="cover-heading">Database corrupted</h1>
        <?php
          }else{
        ?>
        <h1 class="cover-heading">Processing grain transactions</h1>
        <?php
          }
        ?>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">

        </div>
      </footer>
    </div>
  </body>
</html>