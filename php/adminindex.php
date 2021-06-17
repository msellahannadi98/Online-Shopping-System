<?php require_once('connect.php');
session_start();
if($_SESSION['loggedin']!=1){
    header('Location: login.php');}
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
        <div><marquee behavior="alternate" direction="right" style="margin-top: -49px;font-size:20px;">Best Online Offers</marquee>
        <marquee behavior="alternate" direction="left" style="margin-top: -49px;">Get Discount upto 50%</marquee>
        </div>
        <!-- <img class="promoimg" src="../images/promo.jpg" alt=""> -->

        <div class="adminpanel">
        <h2 class="center">Admin Panel</h2>
        <a href='addsupplier.php'><button class="left">Add Supplier</button></a>
        <a href='addproduct.php'><button class="left">Add Product</button></a>
        <a href='viewSupplier.php'><button class="left">View/Update Supplier</button></a>
        <a href=''><button class="left">View /Update Product</button></a>
        

        
        
        
        </div>

        <?php
        $path='../images/';
        $ex='.jpg';
        $sql="SELECT * FROM item";

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
            }


?>
                        
        </div>
        










        
        
    </body>
</html>