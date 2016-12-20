<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Complaint Update Form</title>
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
            $attributes = array("class" => "form-horizontal", "id" => "complaintform", "name" => "complaintform");
            echo form_open("complaint/updateTicket", $attributes);
          ?>

          <fieldset>
               <legend>Complaint System</legend>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="c_id" class="control-label">Complaint ID</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="c_id" name="c_id"  type="text" value="<?php echo $vc['c_id']; ?>"/>
                    <span class="text-danger"><?php //echo form_error('c_id'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="h_no" class="control-label">House Number</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="h_no" name="h_no"  type="text" value="<?php echo $vc['h_no']; ?>"/>
                    <span class="text-danger"><?php //echo form_error('h_no'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="status" class="control-label">Status</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="status" name="status"  type="text" value="<?php echo $vc['status']; ?>"/>
                    <span class="text-danger"><?php //echo form_error('c_id'); ?></span>
               </div>
               </div>
               </div>


               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <button id="btn_Ucomplaint" name="btn_Ucomplaint" type="submit" class="btn btn-primary" value="Complaint">Update</button>
               </div>
               </div>
               <div class="form-group">
                 <div class="col-lg-12 col-sm-12 text-center">
                   <?php echo $this->session->flashdata('msg'); ?>
                 </div>
               </div>
               <div class="col-xs-8">
                 <a href="<?php echo base_url().'index.php/admin';?>" class="btn btn-default">Go Back</a>
               </div>
          </fieldset>
          <?php echo form_close(); ?>
          </div>
     </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
