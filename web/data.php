<?php
  /* This wuold try to solve the IE problem, by first accessing a website from the outsite and then printing it out here..

Rapi Castillo
*/
  $url = "https://docs.google.com/spreadsheets/d/1neVOk0KOWskAvRcs1tw9Y040hasulPBMPH87qv1Nx6w/export?gid=0&format=csv";
  $content = file_get_contents($url);
//  $data = json_decode($content);

  echo $content;
?>
