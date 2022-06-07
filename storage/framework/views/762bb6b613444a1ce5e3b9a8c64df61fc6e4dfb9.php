<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Add Task</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-3">
                    <form method="post" action="/task/create">
                        <?php echo csrf_field(); ?>
                        <h3 class="mb-3">Create New Task</h3>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input
                                type="text"
                                class="form-control"
                                id="title"
                                name="title"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label"
                                >Details</label
                            >
                            <textarea
                                name="details"
                                id="details"
                                cols="30"
                                rows="2"
                                class="form-control"
                            ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="priority" class="form-label">
                                Priority
                            </label>
                            <select
                                name="priority"
                                id="priority"
                                class="form-select"
                            >
                                <option selected value="Low">Low</option>
                                <option value="Medium">Medium</option>
                                <option value="High">High</option>
                            </select>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<?php /**PATH Y:\evA\BNCC2101272- Averina Nurdin\AksubFAVE\TL_1\aksub_1\resources\views/add-task.blade.php ENDPATH**/ ?>