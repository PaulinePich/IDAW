<?php
 
add_action("wp_footer", "mfp_Add_Text");
 

function mfp_Add_Text()
{
  echo "<p style='color: blue;'>Ceci est un plugin créé et codé par Pauline Pichon </p><br>
  Plugin footer";
}