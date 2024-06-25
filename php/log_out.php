<?php
session_start();
session_unset();
session_destroy();
header("Location: /BananaSongOficial/index.html");
exit();
?>
<!-- Luis Manuel Reyes Condado -->