<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="alert-alert-danger" role="alert">
                  <?php echo e($error); ?>

</div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<form action="/insert" method="POST">
<?php echo e(csrf_field()); ?>


	<h1>Application Form</h1>
	<table>
		<tr>
			<td>User Id</td>
			<td><input type="text" name="uid"></td>

		</tr>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fname"></td>

		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>

		</tr>

	</table>
		<input type="submit" name="send Application">
		<input type="reset" name="reset"><br>
	</form>

		##############view DATABASE#################################<br>
		<form action="retreive.php" method="post">
			<input type="submit" name="retrieve" value="View Database">
		</form>
<br><br>
***********************Deleting ************************

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="alert-alert-danger" role="alert">
                  <?php echo e($error); ?>

</div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<form action="/delete" method="post">
<?php echo e(csrf_field()); ?>

	UID<input type="text" name="uid">
			<input type="submit" name="delete" value="Delete a record">
</form>
**********************************************************

<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="alert-alert-danger" role="alert">
                  <?php echo e($error); ?>

</div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<form action="/update" method="POST">
<?php echo e(csrf_field()); ?>

	<h1>Application Form  Update</h1>
	<table>
		<tr>
			<td>User Id</td>
			<td><input type="text" name="uid"></td>

		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="fname"></td>

		</tr>

		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>

		</tr>

	</table>
		<input type="submit" name="send Application" value="Update">
		<input type="reset" name="reset"><br>
	</form>


</body>
</html>
<?php /**PATH D:\Laravel projects\LaravelPractice\example-app\resources\views/form.blade.php ENDPATH**/ ?>