<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bulk SMS Gateway Integration in Codeigniter 3</title>
	<meta name="description" content="Integrate bulk SMS gateway seamlessly with Codeigniter 3 and reach out to your customers in a cost-effective manner. Our step-by-step guide ensures a hassle-free integration process, allowing you to send SMS notifications, alerts, and promotions with ease. Start sending bulk SMS today!">
    <link rel="icon" href="<?php echo base_url();?>assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css">
    <script src="<?php echo base_url();?>assets/js/jquery.slim.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>    
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">		 
          <div class="card card-signin my-5">
		  <?php if($this->session->flashdata('site_session_msg')){echo $this->session->flashdata('site_session_msg');$this->session->unset_userdata('site_session_msg');} ?>
            <div class="card-body">
              <h5 class="card-title text-center">Bulk SMS Gateway Integration in CodeIgniter</h5>
              <form action="<?php echo base_url().''; ?>" method="post" class="form-signin">
                <div class="form-label-group">
                  <label for="route">Route <span style="color: #FF0000">*</span></label>
                  <select name="fromroute" class="form-control" required>
					<option value="normal">Normal</option>
					<option value="priority">Priority</option>
					<option value="transactional">Transactional</option>
					<option value="promotional">Promotional</option>
                  </select>
                </div>                
                <br/>
                <label for="contact">Mobile Number <span style="color: #FF0000">*</span></label>
                <div class="form-label-group">
                  <input type="number" name="contact" class="form-control" placeholder="Mobile Number" required>
                </div>
                <br/>
                <label for="message">Message <span style="color: #FF0000">*</span></label>
                <div class="form-label-group">
                  <textarea name="message" rows="5" class="form-control" placeholder="Message" required></textarea>
                </div>
                <br/>
                <br/>
                <button type="submit" name="sendSMSBtn" class="btn btn-lg btn-warning btn-block text-uppercase" value="Send Now">Send Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>