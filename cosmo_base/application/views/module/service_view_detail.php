<!DOCTYPE html>
<html>
<head>
  <?php include 'assests/menu/nav.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <div class="content-wrapper">
      <section class="content-header">
        <h1>
          <?php echo $service_detail['s_id']; ?>
        </h1>
      </section>
      <section class="content">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo $service_detail['type']; ?></h3>
          </div>
          <div class="box-body">
            <?php echo $service_detail['description']; ?>
          </div>
          <div class="box-body">
            <?php
            if($service_detail['status']== 0)
            {
              echo '<font size="2" color="red">Service Under Review</font>';
            } else if($service_detail['status']==1){
              echo '<font size="2" color="blue">Service Reviewed</font>';
            }else if($service_detail['status']==2)
            {
              echo '<font size="2" color="green">Service Request  Closed</font>';
            }
            ?>
          </div>

        </div>
      </section>
  </div>

</body>
</html>
