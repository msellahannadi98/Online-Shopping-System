  <html>
    <head>
      <title>Tingle-Men's</title>
      <link rel="stylesheet" type="text/CSS" href="../css/catstyle.css">
    </head>
  <body>

    <?php 
      require_once('connect.php');
      session_start();
      include('navbar.php');
      include('sidenavbar.php');
      ?>
    <div class="content">  
      <?php 
      
      $path='../images/';
      $ex='.jpg';
      $sql="SELECT * FROM item WHERE iCategory=1 AND iSubcategory=1";

      $result=$connection->query($sql);

      


      
          
          $count=0;
          while($row=$result->fetch_assoc()){
              if($count%4==0){
                  echo "
                  <div class='row'>
                  ";
              }


              $id=(string)$row['itemId'];
              $name=$row['iName'];
              $cat="asd";
              $count++;
              $button="<a href='item.php?id=".$id."'><button value='ddfa' class='buynowbutton'>Buy Now</button></a>";
              //echo $name;
              echo "<div class='column'><div class='item'><h3>".$name."</h3>
              <p><img class='itemimg' src='".$path.$id.$ex."'></p><p>".$button."</p></div></div>";
              
              //echo "$count";

              if($count%4==0){
                  echo "</div>";
              }
          }


?>
    

  </div>


  </body>
</html>