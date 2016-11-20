<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Register Form</title>
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
            echo form_open("complaint/updateTicket", $attributes);
          ?>

          <fieldset>
               <legend>Complaint System</legend>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="type" class="control-label">Complaint ID</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="c_id" name="c_id"  type="text"/><?php echo $vc['c_id'];
                    <!--<span class="text-danger"><?php //echo form_error('type'); ?></span>-->
               </div>
               </div>
               </div>



               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_Ucomplaint" name="btn_Ucomplaint" type="submit" class="btn btn-default" value="U_Complaint" />
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
