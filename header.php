<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="./assets/css/bootstrap.css" rel="stylesheet">
  <link href="./assets/css/fontawesomecss/all.css" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/css/owlcarouselcss/owl.carousel.min.css" rel="stylesheet">
  <link href="./assets/css/owlcarouselcss/owl.theme.default.min.css" rel="stylesheet">
</head>
<body class="h-100 d-flex flex-column">
<?php include('./admin/database.php'); ?>
    <section class="sticky-top">
        <div class="container-fluid themcolor">
          <div class="container ">
            <div class="row text-center">
              <div class="col-lg-12 col-sm-12">
                <div class="nav-container py-4 onlylink border-bottom border-secondary">
                  <div class="header-logo">
                    <a href="index.php" class="header-logo-container sh-table-small">
                      <div class="sh-table-cell">
                      <a class='nav-link' href="welcome.php"><h1 class="">Probitmine</h1></a>
                        <!-- <img class="sh-standard-logo" src="image/news-logo.png" alt="Gillion News Demo"> -->
                      </div>
                    </a>
                  </div>
                </div>
              </div>
        
              <div class="col-lg-12 col-12">
             

<!-- 
              <div class="dropdown p-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="index.php">Home</a></li>
                  <?php

                    if(isset($_GET['cid'])){
                      $cat_id = $_GET['cid'];
                    }
                    
                    $sql = "SELECT * FROM blogcategory  Where show_in_nav = 'yes'  LIMIT 10";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      $active = "";
                    
                      while($row = mysqli_fetch_assoc($result)) {
                        if(isset($_GET['cid'])){
                          if($row['id'] == $cat_id){
                            $active = "active";
                          }else{
                            $active = "";
                          }
                        } ?>
                        <li class="nav-item">
                        <a class='dropdown-item' href='cryptoblog.php?cid=<?php echo $row['id']; ?>'><?php echo $row['category_name']; ?></a>
                      </li>
                        <?php
                      }
                      } ?>
                </ul>
              </div> -->





            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class='nav-link active' aria-current="page" href="index.php">Home</a>
                      </li>

                      <?php

                    if(isset($_GET['cid'])){
                      $cat_id = $_GET['cid'];
                    }
                    
                    $sql = "SELECT * FROM blogcategory  Where show_in_nav = 'yes'  LIMIT 10";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                      $active = "";
                    
                      while($row = mysqli_fetch_assoc($result)) {
                        if(isset($_GET['cid'])){
                          if($row['id'] == $cat_id){
                            $active = "active";
                          }else{
                            $active = "";
                          }
                        } ?>
                        <li class="nav-item">
                        <a class='nav-link' href='cryptoblog.php?cid=<?php echo $row['id']; ?>'><?php echo $row['category_name']; ?></a>
                      </li>
                        <?php
                      }
                      } ?>

                    </ul>
                    <form class="d-flex" id="search" name="search" method="GET" action="./search.php">
                      <input class="form-control me-2" name="s" id="s" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-light" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
                </div>
              </nav>
              </div>
            </div>
          </div>
        </div>
      </section>
