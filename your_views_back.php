<?php

include('connect.php');

if(isset($_POST['submit']))
{
    $uname = $_POST['uname'];
    $uviews = $_POST['uviews'];

    $query1 = "INSERT INTO `views` (`uname` , `uviews` ) VALUES ('$uname','$uviews')";
    $res1 = mysqli_query($connect,$query1);
    if($res1 ==false){
        echo "my life my prooblem";
    }
    echo("<script> window.location = 'your_views.php'</script>");
}
else
{
    echo("<script> alert('undefined')<script>");
    echo("<script> window.location = 'your_views.php'</script>");
}

?>