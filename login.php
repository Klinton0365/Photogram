<?php include 'libs/load.php'; ?>
<?php
load_template('_head');
?>
<!-- <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }

  .form-signin .checkbox {
    font-weight: 400;
  }

  /* .form-signin .form-floating (focus-within) {
  z-index: 2;
   } */

  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    border-bottom-right-radius: 0;
  }

  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style> -->

<body>
  <?php load_template('_header'); ?>

  <main>
    <?php
    //load_template('_calltoaction');
    ?>

    <?php load_template('_login'); ?>
    <?php
    //load_template('_photogram');
    ?>
  </main>

  <?php load_template('_footer'); ?>

  <script src="/Photogram/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <link href="/Photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</body>

</html>