<?php 

class User 
{
    function problem(){
        $link = mysqli_connect ('localhost', 'root', '', 'portable');
        $sql = "INSERT INTO User_info (name,email,phone,address) VALUES ('$_POST[name]', '$_POST[email]','$_POST[phone]','$_POST[address]' )";

        // mysqli_query($link,$sql);
        // echo 'success';
        if(mysqli_query($link,$sql)){
            echo 'success';
        } else {
            die(mysqli_error($link));
        }
    }

    function selectUser(){
        $link = mysqli_connect ('localhost', 'root', '', 'portable');

        $sql = "SELECT * FROM User_info";
       if($result = mysqli_query($link,$sql)){
        return $result;
       } else {
        die(mysqli_error($link));
       }
    }

    function editUser($id){
        $link = mysqli_connect('localhost', 'root', '', 'portable');

        $sql = "SELECT * FROM user_info WHERE id = '$id'";

        if($result = mysqli_query($link,$sql)){
            return $result;
           } else {
            die(mysqli_error($link));
           }
    }

    function update($id){
        $link = mysqli_connect('localhost', 'root', '', 'portable');

        $sql = "UPDATE user_info SET name = '$_POST[name]', email = '$_POST[email]', phone = '$_POST[phone]', address = '$_POST[address]'  WHERE id = '$id'";

        if(mysqli_query($link,$sql)){
            header('location:view.php');
        } else {
            die(mysqli_error($link));
        }

    }

    function deleteUser($id){
        $link = mysqli_connect('localhost', 'root', '', 'portable');

        $sql = "DELETE FROM user_info WHERE id= '$id'";

        if(mysqli_query($link,$sql)){
            header('location: view.php');
        } else {
            die(mysqli_error($link));
        }
    }
}
?>