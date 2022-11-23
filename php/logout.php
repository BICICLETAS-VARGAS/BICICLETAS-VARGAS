<?php
session_start();
session_destroy();
print "<script>window.location='/HTML/Inicio.html';</script>";
?>