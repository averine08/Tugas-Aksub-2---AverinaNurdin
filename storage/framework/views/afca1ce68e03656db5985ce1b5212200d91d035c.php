<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>To-Do</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 mt-5">To-Do List</h1>
                <p class="lead">Welcome to your To-Do List manager!</p>
            </div>
        </div>

        <div class="container mt-5">
            <a href="/task/add" class="btn btn-primary" type="submit">
                Add New Task
            </a>

            <div class="d-flex flex-wrap align-content-start mt-5">

                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-4 me-4" style="width: 18rem">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="h5 card-title"><?php echo e($task->title); ?></div>
                                 <?php if($task->priority === 'High'): ?>
                                <div>
                                    <div class="rounded p-1 bg-danger text-white">
                                        High
                                    </div>
                                </div>
                                <?php elseif($task->priority === 'Medium'): ?>
                                 <div>
                                    <div class="rounded p-1 bg-warning text-dark">
                                        Medium
                                    </div>
                                </div>
                                <?php else: ?>
                                <div>
                                    <div class="rounded p-1 bg-success text-white">
                                        Low
                                    </div>
                                </div> 
                               
                                <?php endif; ?>
                            </div>
                            <p class="card-text">
                                <?php echo e($task->detail); ?>

                            </p>

                            <div class="mt-3 d-flex">
                                <a href="#" class="btn btn-primary"> Done </a>
                                <a
                                    href="/edit-task.html"
                                    class="btn btn-warning ms-2"
                                    >Edit</a
                                >
                            </div>
                        </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php /**PATH Y:\evA\BNCC2101272- Averina Nurdin\AksubFAVE\TL_1\aksub_1\resources\views/index.blade.php ENDPATH**/ ?>