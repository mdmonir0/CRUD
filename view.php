<?php
require_once "Userr.php";
$user = new User;
$result = $user->selectUser();

if(isset($_GET['delete'])){
    $user->deleteUser($_GET['id']);
}

?>

<hr>
<a href="insert.php">Add user</a> ||
<a href="view.php">view user</a>
<hr>

<table border="1">
    <tr>
        <th>Si</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    <?php 
    $i=1;
     while($info = mysqli_fetch_assoc($result)) { ?>

    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $info['name'] ?></td>
        <td><?php echo $info['email'] ?></td>
        <td><?php echo $info['phone'] ?></td>
        <td><?php echo $info['address'] ?></td>
        <td>
            <a href="edit.php?id=<?php echo $info['id'] ?>">edit</a> /
            <a href="?delete&id=<?php echo $info['id'] ?>" onclick="return confirm('Are you sure to delete?')">delete</a>
        </td>
    </tr>
    <?php } ?>
</table>