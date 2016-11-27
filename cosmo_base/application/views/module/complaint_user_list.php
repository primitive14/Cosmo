<!DOCTYPE html>
<html>
<head>
  <?php include 'assests/menu/nav.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Complaints</h3>
  </div>
  <div class="box-body">
    <ul class="products-list product-list-in-box">

      <?php
              if(isset($complaint_user_list) && $complaint_user_list != 'No Complaints Logged For the Moment')
              {?>
              <?php
              foreach ($complaint_user_list as $complaint_item): ?>
                <!-- timeline time label -->
              <?php echo '<li class="item">';?>
              <?php echo '<a href="'?><?php echo base_url().'index.php/complaint/viewComplaintUser/'.$complaint_item['c_id'];?><?php echo '" class="product-title">'?><?php echo $complaint_item['c_id']; ?>
                <?php echo'<span class="label label-success pull-right">';?> <?php echo $complaint_item['date']; ?><?php echo'</span></a>';?>
              <?php echo '</li>'; ?>
                <?php endforeach; ?>
              <?php
            }
            else{
                  echo $complaint_user_list;
              }?>
    </ul>
  </div>

  </div>
</div>
</body>
</html>
