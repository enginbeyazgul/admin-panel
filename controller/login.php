<?php
require view('login');
if($_POST)
{
    if(isset($_POST['user']) && trim($_POST['user']) !== "")
    {
        $username = $_POST["user"];
        $password = $_POST["pass"];
        require model('login');
        if($row)
        {
            if($row["pass"] == $password)
            {
                $_SESSION["admin"] = $row["user"];
                header('Location: http://127.0.0.1/admin-panel/panel');
            }
            else
            {
                $error = "Girdiğiniz parola hatalı!";
            }
        }
        else
        {
            $error = "Sistemde böyle bir admin bulunamadı!";
        }
    }
}
?>