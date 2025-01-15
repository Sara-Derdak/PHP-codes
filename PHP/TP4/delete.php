<?php
if(isset($_GET['id']) ||( $_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['id']) ))
{
    include "conn.php";
    $id = $_GET['id'];

    $sql="delete from articles where id=:id";
    $stmt=$con->prepare($sql);

    $stmt->bindParam("id",$id);

    $r=$stmt->execute();

    if($r)
        {
            if($stmt->rowCount()!=0)
            header("Location:index.php?delete=true");
            else
            header("Location:index.php?delete=false");
        }
    else
    header("Location:index.php?delete=false");
}
?>