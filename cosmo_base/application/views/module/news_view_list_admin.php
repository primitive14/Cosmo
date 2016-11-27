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
</div>
</body>
</html>
