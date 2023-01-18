<?php
$page = isset($_GET["page"]) ? $_GET["page"] : "homepage.php" ;
?>


<?php include 'template-parts/header.php'; ?>

  <div id="main" class="container" style="margin-top:100px">
    <div class="row">
      <div class="col-9">
        <?php include './pages/' . $page; ?>
      </div>

      <?php include 'template-parts/sidebar.php'; ?>
    </div>


  </div>

  <?php include 'template-parts/footer.php'; ?>



