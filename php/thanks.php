<!doctype html>
<html>
    <head>
        <title>
            Title Goes Here.
        </title>
        <link rel="stylesheet" type="text/CSS" href="../css/style.css">
        <script type="text/javascript" src="script.js" ></script>

    </head>
    <body>
        <?php session_start();
        include('navbar.php');?>
        <?php  //echo $_GET['id'] ; ?>
        <center>
        <h2>Thank you for Buying with Tingle.com</h2>
        <img src="../images/logo.jpg" class="promoimg">
        <p>Your product will receive to your door step within 3 - 30 Days.<br></p>
        </center>
        <p style="margin-left:400px;float">
        <label>Billing Address:</label><div style="margin-left:420px">
        <?php
        $sql="SELECT * FROM orders Where OrderID=".$_GET['Oid'];
        $sql1="SELECT * FROM orderdetail where OrderID=".$_GET['Oid'];
        $row=$connection->query($sql)->fetch_assoc();
        $price=$connection->query($sql1)->fetch_assoc();
        echo $row['fname']." ".$row['lname'].",";
        echo "<br>";
        echo $row['addL1'].",";
        echo "<br>";
        echo $row['addL2'].",";
        echo "<br>";
        echo $row['city'].".";
        echo "<br>";
        echo $row['zip']."";

        ?>
        </p>
        </div>
        <div style="margin-left:400px;float">
        <label >Sub Total <br>  </label>
        <b style="margin-left:20px;font-size:25px">$ <?php echo $price['price']; ?> </b>
        <br>
        <br>
        <?php if($row['payment']=="COD"){echo "Your Payments will Be collected at your doorStep.";} ?>
        </div>

        

       
    </body>
</html>