<!doctype html>
<?php
    require_once('connect.php');
    session_start();
    if(isset($_GET['proceed'])){
        //echo "Done";
        $date=date("Y/m/d");
        $sql1="SELECT max(OrderID) AS OrderID from orders";
        $id=$connection->query($sql1)->fetch_assoc();
        $nxtid=(integer)$id['OrderID']+1;
        $_SESSION['userid']=3;
        $itmid=$_GET['id'];
        $sql="INSERT INTO orders VALUES ('".$nxtid."','".$_SESSION['userid']."','".$date."','".$_GET['fname']."','".$_GET['lname']."','".$_GET['email']."','".$_GET['address1']."','".$_GET['address2']."','".$_GET['city']."','".$_GET['zip']."','".$_GET['pmet']."','".$_GET['cardname']."','".$_GET['cardno']."')"; 
        $result=$connection->query($sql);
        $sql2="INSERT INTO orderdetail( `itemId`, `OrderID`, `price`) VALUES('".$itmid."','".$nxtid."','".$_GET['price']."')";
        $result2=$connection->query($sql2);
        //print_r($result);
        if($result2 && $result){
           // echo "done";
            header( "Location: thanks.php?Oid=".$nxtid);
        }else{
            echo "failed";
        }

        //header( 'Location: thanks.php');

    }
   // header( 'Location:thanks.php');

?>
<html>
    <head>
        <title>
            Title Goes Here.
        </title>
        <style>
        input[type=text] {
            width: 45%;
            height: 20%
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type=email] {
            width: 45%;
            height: 20%
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        </style>
        <link rel="stylesheet" type="text/CSS" href="../css/style.css">
        <script type="text/javascript" src="../js/script.js" ></script>

    </head>
    <body>
        <?php include('navbar.php');?>

        <div class="coutcontainer" style="margin-bottom:20px">
        <?php
            $iid=$_GET['id'];
            $path='../images/';
            $ex='.jpg';
            $src=$path.$_GET['id'].$ex;
            $sql="SELECT * FROM item WHERE itemid='".$_GET['id']."'";
             $result=$connection->query($sql);
            //$row=mysqli_fetch_assoc($result);
            $row=$result->fetch_assoc();
            $price=$row['iPrice'];
            $title=$row['iName'];
            //print_r ($row);
            //echo $price;
            echo "<img src='".$src."' class='checkoutimg' >";
            echo "<div class='coutdes'>";
            echo "<br>";
            echo "<h1>".$title."</h1>";
            echo "<h2 class='coutprice'>$ ".$price."</h2>";
            echo "</div>";

            
        ?>
        </div>

        <div class="coutcontainer">
        <form method="get" action="checkout.php" >
        <h2>Billing Address</h2>
        <input type="hidden" name="id" value="<?php echo $iid; ?>">
        <input type="hidden" name="price" value="<?php echo $price; ?>"> 
        <label for="fname">First Name</label>
        <input type="text" name="fname" required placeholder="Mark" >
        <br>
        <br>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" required placeholder="Anthoney">
        <br>
        <br>
        <label for="email">E-mail</label>
        <input type="email" name="email" required placeholder="example@domain.com" >
        <br>
        <br>
        <label for="address">Address Line 1</label>
        <input type="text" name="address1" required placeholder="No.35, Haward avenue" >
        <br>
        <br>
        <label for="address">Address Line 2(optional)</label>
        <input type="text" name="address2" placeholder="2nd cross street">
        <br>
        <br>
        <label for="city">City</label>
        <input type="text" name="city" required placeholder="Washington">
        <br>
        <br>
        <label for="zip">ZIP No</label>
        <input type="text" name="zip" required placeholder="50000">


        <h2>Payment</h2>
        <input type="radio" name="pmet" value="COD" id="cod" checked onclick="radiob()" > Cash on Delivery
        <br>
        <input type="radio" name="pmet" value="card" id="card"   onchange="radiob()"> Card
        <br>
        <div id="crddetails" style="display:none;" >
        <br>
            <label for="cardname">Name on card</label>
            <input type="text" name="cardname" placeholder="M. Anthoney">
            <br>
            <br><label for="cnumber">Credit Card Number</label>
            <input type="text" name="cardno" placeholder="1111-2222-3333-4444">
            <br>
            <br>
            <label for="exmo">Expire date</label>
            <input type="number" name="exmo" placeholder="MM" class="cdatem" ><b style="font-size:25px"> /</b>
            <input type="number" name="exyr" placeholder="YYYY" class="cdatey">
            <br>
            <br>
        </div>
        <input type="submit" value="PROCEED" name="proceed" class="buynowbutton">
        </form>
        </div>
        

        
    </body>
</html>