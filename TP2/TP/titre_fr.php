<div class="header">
        <h1 >Mon Site Professionel</h1>
        <?php 
        $currentPageId = 'accueil';
        if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];}
        echo "<button><a href='index.php?page=$currentPageId</a></button>"
      ?>
      </div>