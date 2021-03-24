
<?php
function renderMenuToHTML($currentPageId, $currentLangage) {
$mymenu = array(
'accueil' => array( 'Accueil', 'Home'),
'CV' => array( 'Cv','Cv'),
'projet' => array('Mes Projets','My projects'),
'info_technique'=> array( 'Contact', 'Contact me plz' )
);

$currentLangageIndex=1;
if($currentLangage =='francais')
    $currentLangageIndex=0;



echo "<nav class=\"menu\">";
foreach($mymenu as $pageId => $pageParameters) {
    echo "<li><a ";
    if ($currentPageId==$pageId)
        echo "class=\"selected\"";
    echo "href=index.php?page=$pageId&lang=$currentLangage>$pageParameters[$currentLangageIndex]</a></li>";
}
echo "</u1></nav>
<nav class=\"langue\">
<ul>
<a href=index.php?page=$currentPageId&lang=english>Anglais</a>;
<a href=index.php?page=$currentPageId&lang=francais>Français</a>
</u1></nav>";
}
?>

