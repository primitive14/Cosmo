<!DOCTYPE html>
<html>
<head>
  <?php include 'assests/menu/adminnav.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h4>Profile</h4>

            </div>
            <div class="icon">
              <i></i>
            </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h4>Complaints</h4>
            </div>
            <div class="icon">
              <i></i>
            </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4>Services</h4>


            </div>
            <div class="icon">
              <i></i>
            </div>

          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
            <h4>Visitors</h4>

          </div>
        <!-- ./col -->
      </div>
 </div>

</div>

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">News</h3>
  </div>
  <div class="box-body">
    <ul class="products-list product-list-in-box">

      <?php foreach ($news as $news_item): ?>
                <!-- timeline time label -->
              <?php echo '<li class="item">';?>
              <?php echo '<a href="'?><?php echo base_url().'index.php/news/viewENews/'.$news_item['n_id'];?><?php echo '" class="product-title">'?><?php echo $news_item['title']; ?>

                <?php echo'<span class="label label-primary pull-right">';?> <?php echo $news_item['date']; ?><?php echo'</span></a>';?>
                <?php echo '<span class="label pull-right"><a href="';?><?php echo base_url().'index.php/news/viewNews/'.$news_item['n_id'];?><?php echo'" jhclass="btn btn-default"><i class="fa fa-edit"></i> Edit</a></span>';?>
              <?php echo '</li>'; ?>
                <?php endforeach; ?>
    </ul>
  </div>

  </div>

</body>
</html>
