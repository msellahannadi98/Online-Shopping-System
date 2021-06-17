

<!doctype html>
<html>
    <head>
        
        <title>
            Title Goes Here.
        </title>
        <link rel="stylesheet" type="text/CSS" href="../css/style.css">
        <script type="text/javascript" src="demo_script_src.js" ></script>

    </head>
    <body>
        <?php 
        session_start();
        include('navbar.php');
        $path='../images/';
        $ex='.jpg';
        $src=$path.$_GET['id'].$ex;
        echo "<img class='preview' src='".$src."' >";
        $pid=$_GET['id'];
        $pathh='checkout.php?id='.$pid;
        $sql="SELECT * FROM item WHERE itemId=".$pid;
        $result=$connection->query($sql)->fetch_assoc();
        //print_r($result);
        $tit=$result['iName'];
        $desc=$result['description'];
        ?>

        <div class="viewtitle">
        <?php echo $tit ; ?>
        <div class="viewdescription">
            <p style="margin-left:100px">
            <?php echo $desc ; ?>
            </p>
            <?php
            echo "<div class='itemprice'>$ ".$result['iPrice']."</div>";
            echo "<a href='".$pathh."'><input type='button' Value='Checkout' class='buynowbutton'></a>";
            ?>
            
        </div>
        </div>


        <img src='".$src."' alt="">
        
    </body>
</html>