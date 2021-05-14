<html>
<body>
<?php
    if(isset($_GET['t1']))
    {
        $n1=$_GET['t1'];//$_POST['t1']
        $n2=$_GET['t2'];
        $r= $n1 + $n2;
        //echo "sum is ".$r;
        //echo "sum is $r";
        echo "$n1 + $n2 = $r <br>";
        //echo $n1 ."+" .$n2 ."=" .$r;
   }
   else
   {
        //header("location:data.php");//php
        echo "<script>window.location='data.php';</script>";//javascript
        //echo "Error";
   }     
?>

</body>
</html>
