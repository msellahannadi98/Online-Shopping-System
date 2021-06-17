<html>
<head>
    <script>
    function checktel(){
        var x=document.getElementById("q").value;
        if(x.length>=9){
           // document.write("hhhhh");
            alert("No error");
            return true;

        }else{
            //document.write("hhasdasdhhh");
            alert("error");
            return false;
        }
    }
    </script>
</head>
<body>
    <form action="a.php" method="get">
        <input type="text" name="t1" id="q">

        <input type="submit" value="submit" onclick="return checktel()">



    </form>
</body>
</html>