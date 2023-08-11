<script>
function myFunction() {
  alert("SYSTEM INFORMATION\n\nThrough this system you can easily:\n• Find Documents.\n• Download Documents.\n• Upload Documents.\n• Print Documents.\n\nMake sure that you're not sabotaging something that has the potential to be fruitful and great.");
}
</script>
<nav class="main-header navbar navbar-expand navbar-primary navbar-dark ">
    
  <ul class="navbar-nav">
  <?php if(isset($_SESSION['login_id'])): ?>
  <li class="nav-item">
  <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
  </li>
  <?php endif; ?>
  <li>
  <a class="nav-link text-white"  href="./" role="button"> <large><b>SANGGUNIANG BAYAN LIBRARY SYSTEM</b></large></a>
  </li>
  </ul>

  <ul class="navbar-nav ml-auto">


  <li class="nav-item">

  <a class="nav-link nav-document_list tree-item" href="creators.html">
  <i title="Creators of this system" class="fa fa-users"></i>
  </a>
  </li>

  <li class="nav-item">

  <a class="nav-link nav-document_list tree-item" href="#">
  <i title="System Information" onclick="myFunction()" class="fa fa-info-circle"></i>
  </a>
  </li>
  
  
  </ul>
  </nav>
 
