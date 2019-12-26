<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<body>-->
<!---->
<!--<h1>My first PHP page</h1>-->
<!---->

<!--//$x=5;-->
<!--//$y=10;-->
<!--//-->
<!--//function myTest()-->
<!--//{-->
<!--//    global $x,$y;-->
<!--//    $y=$x+$y;-->
<!--//}-->
<!--//-->
<!--//myTest();-->
<!--//echo $y; // 输出 15-->
<!--//?//>-->
<!---->
<!--</body>-->
<!--</html>-->

<html>
<head>
    <meta charset="utf-8">
    <title>php中文网(php.cn)</title>
</head>
<body>
<form action="upload_file.php" method="post" enctype="multipart/form-data">
    <label for="file">文件名：</label>
    <input type="file" name="file" id="file"><br>
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>