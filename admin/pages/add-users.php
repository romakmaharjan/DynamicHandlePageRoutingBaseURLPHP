<?php

if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $role = $_POST['role'];
    $image="";
    if (!empty($_FILES['image']['name'])) {
    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $imageName = md5(uniqid()) . ".$ext";
    $tmpName = $_FILES['image']['tmp_name'];
    $uploadPath = public_path("users/$imageName");
    if (!move_uploaded_file($tmpName, $uploadPath)) {
        die("File Upload Failed"); // This line should execute if move_uploaded_file fails
    } else {
        $image = $imageName;
    }
}

    $sql = "INSERT INTO users (name,email,password,gender,role,image)VALUES ('$name','$email','$password','$gender','$role','$image')";

    if(mysqli_query($conn, $sql)){
        echo "successfully";
    } else{
        echo "Error: ". $sql . "<br>" .mysqli_error($conn);
    }
}
?>

<div class="container">
    <h1>Add Users</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email"> <br>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"><br>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <label><input type="radio" name="gender" value="male">Male</label>
            <label><input type="radio" name="gender" value="female">Female</label>
        </div>
        <div class="form-group">
            <label for="role">Role</label> <br>
            <select name="role" class="form-class" id="role">
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>
        <div class="form-group">
            <button class="btn-success">Add Record</button>
        </div>

    </form>
</div>