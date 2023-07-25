<?php 
require_once "Userr.php";

if(isset($_POST['btn'])){
    $user = new User;
    $user-> problem() ;
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
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="address" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>