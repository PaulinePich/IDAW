<?php
function renderMenuToHTML($currentPageId) {
$mymenu = array(
'accueil' => array('Accueil'),
'information' => array('Mes Informations'),
'aliments' => array('Renseigner des aliments'),
'historique'=> array( 'Historique' )
);



echo "<nav class=\"menu\">";
foreach($mymenu as $pageId => $pageParameters) {
    echo "<li><a ";
    if ($currentPageId==$pageId)
        echo "class=\"selected\"";
    echo "href=index2.php?page=$pageId>$pageParameters[0]</a></li>";
}


}
?>

