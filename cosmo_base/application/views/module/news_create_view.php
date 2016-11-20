<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Create News</title>
     <!--link the bootstrap css file-->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

     <style type="text/css">
     .colbox {
          margin-left: 0px;
          margin-right: 0px;
     }
     </style>
</head>
<body>
<div class="container">
     <div class="row">
          <div class="col-lg-6 col-sm-6">
               <h2>Cosmo: Apartment Management System</h2>
          </div>

     </div>
</div>
<hr/>

<div class="container">
     <div class="row">
          <div class="col-md-6 col-md-offset-3 well">

          <?php
            $attributes = array("class" => "form-horizontal", "id" => "registerform", "name" => "registerform");
            echo form_open("news/createNews", $attributes);
          ?>

          <fieldset>
               <legend>Create News</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="title" class="control-label">Title</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="title" name="title" placeholder="Title" type="text"/>
                    <span class="text-danger"><?php echo form_error('title'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="subject" class="control-label">Subject</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text"/>
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="news" class="control-label">News</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                  <input class="form-control" id="news" name="news" placeholder="News" type="text"/>
                  <span class="text-danger"><?php echo form_error('news'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_news" name="btn_news" type="submit" class="btn btn-default" value="News" />

               </div>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
     </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
