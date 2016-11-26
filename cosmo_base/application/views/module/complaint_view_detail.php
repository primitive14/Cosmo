<!DOCTYPE html>
<html>
<head>
  <?php include 'assests/menu/nav.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <div class="content-wrapper">
      <section class="content-header">
        <h1>
          <?php echo $complaint_detail['c_id']; ?>
        </h1>
      </section>
      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $complaint_detail['type']; ?></h3>
          </div>
          <div class="box-body">
            <?php echo $complaint_detail['description']; ?>
          </div>
        </div>
      </section>
  </div>

</body>
</html>
