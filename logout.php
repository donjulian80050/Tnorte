<?php
session_start();
session_destroy();
echo 'Ha salido de la sesión';
?>
<script>location.href="indexlogin.php"; </script>

