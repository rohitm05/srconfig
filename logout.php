<?php
session_start();
session_destroy();
header('location:silog.html');
?>