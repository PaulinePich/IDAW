<?php
  require_once("template_header.php");
  require_once("template_menu.php");
  $currentPageId = 'accueil';
  $currentLangage ='francais';


  if(isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
  }
  if(isset($_GET['lang'])) {
    $currentLangage = $_GET['lang'];
  }

?>

<?php
  renderMenuToHTML($currentPageId, $currentLangage);
?>
<section class="corps">
<?php
  $pageToInclude = $currentLangage ."/".$currentPageId . ".php";
  if(is_readable($pageToInclude))
    require_once($pageToInclude);
  else
    require_once("error.php");
?>
</section>

<?php
  require_once("template_footer.php");
?>