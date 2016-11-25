<!DOCTYPE html>
<html>
<head>
  <?php include 'assests/menu/nav.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <div class="content-wrapper">
      <section class="content-header">
        <h1>
          <?php echo $vn['title']; ?>
        </h1>
      </section>
      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $vn['subject']; ?></h3>
          </div>
          <div class="box-body">
            <?php echo $vn['news']; ?>
          </div>
        </div>
      </section>
  </div>

</body>
</html>
