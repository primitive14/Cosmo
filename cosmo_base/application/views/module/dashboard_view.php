<!DOCTYPE html>
<html>
<head>
  <?php include 'assests/menu/nav.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <section class="content">
              <div class="row">

                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <div style='text-align:left'><h2>User<br>Profile</h2>
                        </div>
                    </div>
                    <div class="icon">
                      <i class="ion ion-happy"></i>
                    </div>
                    <a href="#" class="small-box-footer">Update Profile <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <div style='text-align:left'><h2>Service<br>System</h2>

                      </div>


                    </div>
                    <div class="icon">
                      <i class="ion ion-chatbubble-working"></i>
                    </div>
                    <a href="#" class="small-box-footer">Book a Service <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <div style='text-align:left'><h2>Complaint<br>System</h2>

                      </div>


                    </div>
                    <div class="icon">
                      <i class="ion ion-flag"></i>
                    </div>
                    <a href="#" class="small-box-footer">Book a Complaint <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-red">
                    <div class="inner">
                      <div style='text-align:left'><h2>Visitor<br>System</h2>

                      </div>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-stalker"></i>
                    </div>
                    <a href="#" class="small-box-footer">Add Visitors <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                <!-- ./col -->
              </div>
              <!--./row-->
          </section>

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
              <?php echo '<a href="'?><?php echo base_url().'index.php/news/viewENews/'.$news_item['n_id'];?><?php echo '" class="product-title">';?><?php echo $news_item['title']; ?>
                <?php echo'<span class="label label-success pull-right">';?> <?php echo $news_item['date']; ?><?php echo'</span></a>';?>
              <?php echo '<span class="product-description">';?>
                <?php echo $news_item['subject']; ?>
              <?php echo '</span>';?>
              <?php echo '</li>'; ?>
                <?php endforeach; ?>
    </ul>
  </div>
  </div>
</section>
</div>
</body>
</html>
