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
          <div class="box-body">
            <?php
            if($complaint_detail['status']== 0)
            {
              echo '<font size="2" color="red">Complaint Under Review</font>';
            } else if($complaint_detail['status']==1){
              echo '<font size="2" color="blue">Complaint Reviewed</font>';
            }else if($complaint_detail['status']==2)
            {
              echo '<font size="2" color="green">Complaint Closed</font>';
            }
            ?>
          </div>

        </div>
      </section>
  </div>

</body>
</html>
