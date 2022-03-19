<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php 
        $db=new mysqli('localhost','root','','test');
        $id=$_GET['id'];
        $sql="select * from employee where id=$id";
        $result=$db->query($sql);
        $row=$result->fetch_assoc();
        
    ?>
    <div class="container">
        <div class="col-12">
            <h1> Add employee</h1>
        </div>
        <div class="col-12">
            <form action="updateresult.php?id=<?php echo $row['id']?>" method="POST">
            <label for="name" class="form-label">Name</label>
            <input type="text" name= "name" id="name" value="<?php echo $row['name']; ?>" class="form-control mb-2" required>
            <label for="department" class="form-label">Department</label>
            <input type="text" name= "department" id="department" value="<?php echo $row['department']; ?>" class="form-control mb-2" required>
            <label for="phonenumber" class="form-label">Phone Number</label>
            <input type="text" name= "phonenumber" id="phonenumber" value="<?php echo $row['phonenumber']; ?>" class="form-control mb-2" required>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
