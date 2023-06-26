<?php 
    session_start();
    $login = "Daniel";
    $psw = "DanielAdmin2023";
    if (isset($_SESSION["adminLogin"])) {
     
      if ($_SESSION["adminLogin"] == $login && $_SESSION["adminPsw"] == $psw) {
        header("location:admin.php");
      }
    }
    if (isset($_POST["ok"])) {
      $l = $_POST["login"];
      $p = $_POST["pass"];
      if ($l == $login && $p == $psw) {
        $_SESSION["adminLogin"] = $l;
        $_SESSION["adminPsw"] = $p;
        header("location:admin.php");
      }
    }
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Катталуу баракча Megaline</title>
    <link href="../img/favicon.jpg" rel="icon" type="image/x-png">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    

<link href="./css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./css/main.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <script src="http://cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    <main class="">
      <div class="container p-3" style=" min-height: 100vh; display: flex; justify-content:center; width: 100%; align-items: center;">
        <form method="post" class=" form-control shadow rounded border" style=" display: flex; justify-content: :center; width: 100%; align-items: center; gap:20px; flex-direction: column;">
          <br>
          <h5 class="text-center">Катталуу үчүн керектүү боштуктарды толтуруңуз</h5>
          <input class="form-control w-50" name="login" placeholder="Login" required="">
          <input type="password" name="pass" class="form-control w-50" placeholder="Password" required="">
          <input type="submit" name="ok" class="form-control w-50 btn btn-success" value="Жиберүү">
          <br>
        </form>
      </div>
    </main>
  </div>
</div>

<script src="https://getbootstrap.com//docs/5.3/assets/js/color-modes.js"></script>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
    <script src="./js/dashboard.js"></script>
      </body>
</html>
