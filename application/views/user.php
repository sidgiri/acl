<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'bootstrap/css/bootstrap.css' ;?>">
</head>
<body>
<div class="navbar navbar-dark bg-dark">
	<div class="container">
		<a href="#" class="navbar-brand">Crud </a>
	</div>
</div>
<div class="container" style="padding-top: 10px;">
	<h1> Create User</h1>
	<hr>
	<div class="row">
		<form method="post" action="<?php echo base_url().'user/create'; ?>">
		<div class="col-lg-12">
			<div class="form-group">
				<label> Name</label>
				<input type="text" name="name" placeholder="Name" class="form-control" value="<?php echo set_value('name');?>>
				<?php echo form_error('name');?>
			</div>
			<div class="form-group">
				<label> Username</label>
				<input type="text" name="username" placeholder="Username" class="form-control"value="<?php echo set_value('usernmae');?>" >
				<?php echo form_error('username');?>
			</div>
			<div class="form-group">
				<label> Password</label>
				<input type="text" name="password" placeholder="Password" class="form-control" value="<?php echo set_value('password');?>">
				<?php echo form_error('password');?>
			</div>
			<div class="form-group">
				<button class="btn btn-primary"> Create</button>
				<a href=" " class="btn-secondary"> Cancel</a>
			</div>
		</div>
		</form>
	</div>
</div>

</body>
</html>
