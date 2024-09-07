<?php
session_start();
    unset($_SESSION['admin']); ?>
    <script type="text/javascript"> window.setTimeout(function() { window.location.href='login.php'; }, 100); </script>
<?php
    ?>