<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            background-color:#e5e5e5;
        }
    </style>
</head>
<body>
    <div class="container bg-white mt-4">
        <div class="col-12">
            <h1> Add employee</h1>
        </div>
        <div class="col-12">
            <form action="addemployee.php" method="POST">
            <label for="name" class="form-label">Name</label>
            <input type="text" name= "name" id="name" placeholder="Enter employees name" class="form-control mb-2" required>
            <label for="department" class="form-label">Department</label>
            <input type="text" name= "department" id="department" placeholder="Enter department" class="form-control mb-2" required>
            <label for="phonenumber" class="form-label">Phone Number</label>
            <input type="text" name= "phonenumber" id="phonenumber" placeholder="Enter phonenumber" class="form-control mb-2" required>
            <button type="submit" name="submit" class="btn btn-primary">Add employee</button>
            </form>
        </div>
        <hr>
        <h1>Employee Details</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Department</th>
                <th>Phone number</th>
                <th>Operation</th>
            </tr>
        </thead>
    <?php
    $db=new mysqli('localhost','root','','test');
    $sql="select * from employee";
    $result=$db->query($sql);
    while($row=$result->fetch_assoc()){
    ?>
        <tbody>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['department'] ?></td>
                <td><?php echo $row['phonenumber'] ?></td>
                <td><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Update
                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger mx-1">Delete</td>   
            </tr>
        </tbody>

    <?php
    }
    ?>
    </table>
    </div>
</body>
</html>
