<?php
function renderMenuToHTML($currentPageId) {
$mymenu = array(
'index' => array('Accueil'),
'profil' => array('Profil'),
'aliments' => array('Aliments'),
'journal'=> array( 'Mon journal' )
);



echo "<nav class=\"menu\">";
foreach($mymenu as $pageId => $pageParameters) {
    echo "<li><a ";
    if ($currentPageId==$pageId)
        echo "class=\"selected\"";
    echo "href=index.php?page=$pageId>$pageParameters[0]</a></li>";
}
}
?>

