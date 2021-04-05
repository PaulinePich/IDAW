<!doctype html>
<html lang="fr">
    <head>
        <meta charset='utf-8'>
        
        <title>Journal</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
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