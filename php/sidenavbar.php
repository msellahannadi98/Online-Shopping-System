<html>
<head>
<link rel="stylesheet" type="text/CSS" href="catstyle.css">
</head>
<body>

<div class="sidenav">
   <button class="dropdown-btn">Women
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="women_clothing.php" target="_self" >Women's clothing</a>
    <a href="wshoes.php" target="_self">Shoes</a>
    
  </div>       
 <button class="dropdown-btn">Men
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="men_clothing.php" target="_self">Men's clothing</a>
    <a href="mshoes.php" target="_self">Shoes</a>
  </div>
  <a href="kids.php"><font type="arial">kids</arial></a>
  <a href="accessories.php">Accessories</a>
</div>


<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html>