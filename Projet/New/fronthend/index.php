<!doctype html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        
        
        <script src="js/journal.js" async></script>
        
        <title>Journal</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    

<body>

<?php
  require_once("template_header.php");
  require_once("template_menu.php");
 

  if(isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
  }
  
?>

<?php
  renderMenuToHTML($currentPageId);
?>
<section class="corps">
<?php
  $pageToInclude = $currentPageId . ".php";
  if(is_readable($pageToInclude))
    require_once($pageToInclude);
  else
    require_once("error.php");
?>
</section>

<?php
  require_once("template_footer.php");
?>
</body>

</html>