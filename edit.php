<?php 
require_once "Userr.php";
$user = new User;
$result = $user->editUser($_GET['id']);
$info = mysqli_fetch_assoc($result);

if(isset($_POST['btn'])){
    $user->update($_GET['id']);
}
?>


<hr>
<a href="insert.php">Add user</a> ||
<a href="view.php">view user</a>
<hr>

<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $info['name'] ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $info['email'] ?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" value="<?php echo $info['phone'] ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="address" id="" cols="20" rows="10"><?php echo $info['address'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="update"></td>
        </tr>
    </table>
</form>