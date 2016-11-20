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
            echo form_open("register/index", $attributes);
          ?>

          <fieldset>
               <legend>Register</legend>
               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="h_no" class="control-label">House Number</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="h_no" name="h_no" placeholder="House Number" type="text"/>
                    <span class="text-danger"><?php echo form_error('h_no'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="fname" class="control-label">First Name</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="fname" name="fname" placeholder="First Name" type="text"/>
                    <span class="text-danger"><?php echo form_error('fname'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="lname" class="control-label">Last Name</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                  <input class="form-control" id="lname" name="lname" placeholder="Last Name" type="text"/>
                  <span class="text-danger"><?php echo form_error('lname'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="fname" class="control-label">Email</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email"/>
                    <span class="text-danger"><?php echo form_error('email'); ?></span>

               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="password" class="control-label">Password</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                    <input class="form-control" id="password" name="password" placeholder="Password" type="password"/>
                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                </div>
               </div>
               </div>

               <div class="form-group">
               <div class="row colbox">
               <div class="col-lg-4 col-sm-4">
                    <label for="pno" class="control-label">Phone Number : +91-</label>
               </div>
               <div class="col-lg-8 col-sm-8">
                     <input class="form-control" id="pno" name="pno" placeholder="Phone Number" type="number"/>
                     <span class="text-danger"><?php echo form_error('pno'); ?></span>
               </div>
               </div>
               </div>

               <div class="form-group">
               <div class="col-lg-12 col-sm-12 text-center">
                    <input id="btn_register" name="btn_register" type="submit" class="btn btn-default" value="Register" />

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
