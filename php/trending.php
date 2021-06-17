<?php require_once('connect.php'); 
session_start();
if($_SESSION['loggedin']!=1){
    header('Location: login.php');
}
?>
<!doctype html>
<html>
    <head>
        <title>
            Welcome to Tingle
        </title>
        <link rel="stylesheet" type="text/CSS" href="../css/style.css">
        <script type="text/javascript" src="demo_script_src.js" ></script>
        
    </head>
    <body bgcolor="#E6E6FA">
        <?php include('navbar.php');?>
        
        <?php
        $path='../images/';
        $ex='.jpg';
        $sql="SELECT * FROM item WHERE iPrice<15";

        //$result=$connection->query($sql);
        $result = $connection->query($sql) or die($connection->error);

        ?>


        <?php
            
            $count=0;
            while($row=$result->fetch_assoc()){
                if($count%4==0){
                    echo "
                    <div class='row'>
                    ";
                }


                $id=(string)$row['itemId'];
                $name=$row['iName'];
                $cat=$row['iCategory'];
                $count++;
                $button="<a href='item.php?id=".$id."'><button value='ddfa' class='buynowbutton'>Buy Now</button></a>";
                //echo $name;
                echo "<div class='column'><div class='item'><h3>".$name."</h3>
                <p><img class='itemimg' src='".$path.$id.$ex."'></p><p><br>".$button."</p></div></div>";
                
                //echo "$count";

                if($count%4==0){
                    echo "</div>";
                }
                if($count>=12){
                   die();
                }
            }


?>
                        
        </div>
        










        
        
    </body>
</html>