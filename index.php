<?php
include 'libs/load.php';
?>

<!doctype html>
<html lang="en">

<?php load_template('_head'); ?>

<body>

  <?php load_template('_header'); ?>

  <main>
    <?php load_template('_calltoaction'); ?>

    <?php
    // load_template('_login');
    load_template('_photogram');
    ?>
  </main>

  <?php load_template('_footer'); ?>

  <script src="/Photogram/assets/dist/js/bootstrap.bundle.min.js">
  </script>
  <script>
    // Initialize the agent at application startup.
    const fpPromise = import('https://openfpcdn.io/fingerprintjs/v4')
      .then(FingerprintJS => FingerprintJS.load())

    // Get the visitor identifier when you need it.
    fpPromise
      .then(fp => fp.get())
      .then(result => {
        // This is the visitor identifier:
        const visitorId = result.visitorId
        console.log(visitorId)
        //alert(visitorId)
      })
  </script>

</body>

</html>