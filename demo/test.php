<html>
<?php
$q = isset($_POST['q'])? $_POST['q'] : '';if(is_array($q)) {
    $sites = array(
        'PHP' => 'php中文网: http://www.php.cn',
        'GOOGLE' => 'Google 搜索: http://www.google.com',
        'TAOBAO' => '淘宝: http://www.taobao.com',    );
    foreach($q as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val] . PHP_EOL;    }
} else {
    ?>
<body>

<form action="" method="post">
        <select multiple="multiple" name="q[]">
            <option value="">选择一个站点:</option>
            <option value="PHP">PHP</option>
            <option value="GOOGLE">Google</option>
            <option value="TAOBAO">Taobao</option>
        </select>
        <input type="submit" value="提交">
    </form>
</body>

<?php
}
?>
</html>

