<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="stylesheet" href="logindesign/logindesign.css">
  <title>Login</title>
 	
<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<body>

    <div class="login-wrapper">
    <form id="login-form" class="form" autocomplete="off">
    <img src="pictures/Pililla_logo.png">
    <br>
    <h3><strong><b>SANGGUNIANG BAYAN</b></strong></h3>
    <h4><strong> • LIBRARY SYSTEM • </strong></h4>
    <div class="form-group">
    <input type="text" name="email" id="email" required>
    <label for="email">Email</label>
    </div>
    <div class="form-group">
    <input type="password" name="password" id="password" required>
    <label for="password">Password</label>
    </div>
	<button class="submit-btn"><strong>Login</strong></button>
    </form>
    </div>
	<p style="text-align:center; margin-top: -50px;">Created by SB Department OJT's | 2022</p>

</body>

<script>
	$('#login-form').submit(function(e){
	e.preventDefault()
	$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
	if($(this).find('.alert-danger').length > 0 )
	$(this).find('.alert-danger').remove();
	$.ajax({
	url:'ajax.php?action=login',
	method:'POST',
	data:$(this).serialize(),
	error:err=>{
	console.log(err)
	$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

	},
	success:function(resp){
	if(resp == 1){
	location.href ='index.php?page=home';
	}else{
	$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
	$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
	}
	}
	})
	})
	$('.number').on('input',function(){
    var val = $(this).val()
    val = val.replace(/[^0-9 \,]/, '');
    $(this).val(val)
    })
</script>	
</html>
