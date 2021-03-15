
<?php
function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
$mymenu = array(
// idPage titre
'accueil' => array( 'Accueil' ),
'CV' => array( 'Cv' ),
'projet' => array('Mes Projets'),
'info_technique'=> array( 'Contact' )
);




echo "<nav class=\"menu\">";

foreach($mymenu as $pageId => $pageParameters) {
echo "<u1>
        <li><a href=index.php?page=$pageId>$pageParameters[0]</a></li>
    </u1>";

}
echo "</nav>";
}
?>

