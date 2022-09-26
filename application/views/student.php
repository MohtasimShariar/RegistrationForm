<?php error_reporting(0);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RegistrationForm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        

        <form class="form-group form-horizontal border border-primary p-5" name="form" action="<?php echo base_url(); ?>Student/<?php echo isset($modify) ? "update_student" : "add_student"; ?>" enctype="multipart/form-data" method="post">

            <input type="hidden" name="hid" value="<?php echo $modify['id']; ?>">
            <div class="mt-3">
                <h1>Registration Form</h1>
            </div>

            <!-- <div class="form-group mt-5">
                <label for="">Photo Upload:</label>
                <input type="file" name="upload_file">
            </div> -->

            <div class="form-group mt-5">
                <label for="">Name:</label>
                <input type="text" name="name" value="<?php echo $modify['name']; ?>" class="form-control">
            </div>

            <div class="form-group mt-5">
                <label for="">Email:</label>
                <input type="email" name="email" value="<?php echo $modify['email']; ?>" class="form-control">
            </div>

            <div class="form-group mt-5">
                <label for="">phone:</label>
                <input type="number" name="phone" value="<?php echo $modify['phone']; ?>" class="form-control">
            </div>

            <div class="form-group mt-5">
                <label for="">Gender:</label>
                <input type="text" name="gender" value="<?php echo $modify['gender']; ?>" class="form-control">
            </div>

            <div class="form-group mt-5">
                <label for="">Address:</label>
                <input type="text" name="address" value="<?php echo $modify['address']; ?>" class="form-control">
            </div>

            <div class="form-group mt-5">
                <label for="">Age:</label>
                <input type="number" name="age" value="<?php echo $modify['age']; ?>" class="form-control">
            </div>
            <div class="form-group mt-5">
                <label for="">Create date:</label>
                <input type="date" name="date" value="<?php echo $modify['date']; ?>" class="form-control">
            </div>



            <button type="submit" class="btn btn-primary mt-3 mb-5" value="save form">Create</button>
        </form>

        <div class="mt-5">
            <h1>Entry Form</h1>
        </div>

        <table class='border border-primary table table-striped mb-5 p-3'>
            <thead>
                <tr>

                    <th>SNo: </th>
                    <th>ID: </th>
                    <th>Name: </th>
                    <th>Email: </th>
                    <th>Phone: </th>
                    <th>Gender: </th>
                    <th>Address: </th>
                    <th>Age: </th>
                    <th>Created Date: </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($student_fetch)) {
                    $cnt = 1;
                    foreach ($student_fetch as $row) {
                ?>
                        <tr>
                            <td><?php echo  $cnt++;  ?></td>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['phone'] ?></td>
                            <td><?php echo $row['gender'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['age'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                            <td>
                                <a style="color:black; text-decoration: none; border:1px solid red; border-radius:10px; padding:1px" href="<?php echo base_url(); ?>Student/modify/<?php echo $row['id'] ?>">Update</a>

                                <a style="color:black; border:1px solid red; text-decoration: none; border-radius:10px; padding:1px" onclick="return confirm('Are you sure you want to delete data')" href="<?php echo base_url(); ?>Student/remove/<?php echo $row['id'] ?>">Delete</a>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td>Record not found</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>