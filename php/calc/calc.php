<?php

 if (isset($_POST['expr']) && !empty($_POST['expr'])){
      $expr = $_POST['expr'];
      eval("\$result=$expr;");
      echo $result;
 }