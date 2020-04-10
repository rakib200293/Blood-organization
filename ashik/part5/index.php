<?php

   //Php String
   
   $text = "This is text";
   echo strtoupper("$text");
   echo "<br>";
   echo "<br>";
   echo strtolower("$text");
   echo "<br>";
   echo "<br>";
   echo addcslashes("$text","s");

   
   
   
   //Php File open & Write
   
   $file = fopen("hello.html","w");
   $write= fwrite($file,"Hello How are u???");