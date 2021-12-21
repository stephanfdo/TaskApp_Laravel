<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src='main.js'></script>
</head>
<body>
    <h1 style=" font-family: sans-serif,font-size 30px,text-align center">Daily Tasks</h1>
    <div class="row">
        <div class="col-md-1">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="alert-alert-danger" role="alert">
                  <?php echo e($error); ?>

</div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <form method="POST" action="/addtask">
                  <?php echo e(csrf_field()); ?>


<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">@</span>
  <input type="text" class="form-control" placeholder="task" aria-label="Username" aria-describedby="addon-wrapping"  name="task">
</div>
<br><br>
<center>
<button type="submit" class="btn btn-danger">SAVE</button>
<button type="clear" class="btn btn-primary">CLEAR</button>
</center>


            </form>
</div>
</div>

<table class="table table-dark">
  <thead>
  </thead>
  <tbody>
    <tr class="table-active">
    </tr>
    <tr>
    </tr>
    <tr>
      <th scope="row">ID</th>
      <td colspan="2" class="table-active">TASK</td>
      <td>Is Completed</td>
      <td>Action</td>
      <td>Remove Task</td>
    </tr>
    <tr>
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <th scope="row"><?php echo e($task->id); ?></th>
      <td colspan="2" class="table-active"><?php echo e($task->task); ?></td>
      <td>
         <?php if($task->iscompleted): ?>
<button class="btn-btn-success">completed</button>
<?php else: ?>
<button class="btn-btn-warning">not completed</button>
<?php endif; ?>

      </td>
      <td>
         <button class="btn-btn-primary"> <a href="/markascompleted/<?php echo e($task->id); ?>" >Mark as complete</a></button>
      </td>

      <td>
         <button class="btn-btn-primary"> <a href="/removetask/<?php echo e($task->id); ?>" >Remove</a></button>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>


</body>
</html>
<?php /**PATH D:\Laravel projects\LaravelPractice\example-app\resources\views/tasks.blade.php ENDPATH**/ ?>