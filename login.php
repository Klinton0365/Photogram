<?php include 'libs/load.php'; ?>
<?php
load_template('_head');
?>

<body>
  <?php load_template('_header'); ?>

  <main>
    <?php load_template('_login'); ?>
  </main>

  <?php load_template('_footer'); ?>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="/Photogram/assets/dist/js/bootstrap.bundle.min.js"></script>
  <!-- <link href="/Photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->

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
        $("#fingerprint").val(visitorId);
      })
  </script>
</body>

</html>