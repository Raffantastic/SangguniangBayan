<?php include('db_connect.php') ?>

<?php if($_SESSION['login_type'] == 1): ?>
  <div class="row">
  <div class="col-12 col-sm-6 col-md-3">
  <div class="info-box">
  <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-folder"></i></span>

  <div class="info-box-content">
  <span class="info-box-text">Total No. of all Documents</span>
  <span class="info-box-number">
  <?php echo $conn->query("SELECT * FROM documents  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
  </span>
  </div>
              
  </div>
            
  </div>
  </div>

<?php else: ?>
	<div class="col-12">
  <div class="card">
  <div class="card-body">
  <script type="text/javascript">
        document.write();
        var day = new Date();
        var hr = day.getHours();
        if (hr >= 0 && hr < 12) {
            document.write("Magandang Umaga");
        } else if (hr == 12) {
            document.write("Magandang Tanghali");
        } else if (hr >= 12 && hr <= 17) {
            document.write("Magandang Hapon");
        } else {
            document.write("Magandang Gabi");
        }
        document.write("</font> Ma'am/ Sir!</center>");
    </script>
  </div>
  </div>
  <div class="row">
  <div class="col-12 col-sm-6 col-md-3">
  <div class="info-box">
  <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-folder"></i></span>

  <div class="info-box-content">
  <span class="info-box-text">Total No. of all Documents</span>
  <span class="info-box-number">
  <?php echo $conn->query("SELECT * FROM documents  where user_id = {$_SESSION['login_id']}")->num_rows; ?>
  </span>
  </div>
             
  </div>
          
  </div>
        
  </div>
          
<?php endif; ?>
