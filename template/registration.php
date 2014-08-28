<?php 
include('classes/User.php');
if(!empty($_POST)) {
	$user = new User();
	$user->registration($data);
	$result = $user->result;
}
?>
<?php if(isset($result)): ?>
	<h2><?php echo $result; ?></h2>
<?php endif; ?>
<form role="form" method="post">
	<div class="form-group">
		<input type="text" class="form-control" name="email" placeholder="Enter email">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="login" placeholder="Enter login">
	</div>	
	<div class="form-group">
		<input type="password" class="form-control" name="pass" placeholder="Enter password">
	</div>
	<input type="submit" class="btn btn-default">
</form>	