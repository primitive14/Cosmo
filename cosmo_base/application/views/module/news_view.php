<?php

echo $vn['title'];

echo $vn['subject'];

echo $vn['news'];
?>
<!DOCTYPE html>
<html>
<head>
  <?php include 'assests/menu/nav.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">

      <!-- Main content -->
      <section class="content">
        <h1>
          <?php echo $vn['title']; ?>
        </h1>
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $vn['subject']; ?></h3>
          </div>
          <div class="box-body">
            <?php echo $vn['news']; ?>
          </div>
        </div>

</body>
</html>
