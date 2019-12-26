<?php
//$servername = "192.168.1.126";
$servername = "localhost";
$username = "test";
$password = "123456";
$dbname = "myDb";
header('content-type:text/html;charset=utf-8');
//mysqli_set_charset($conn, "utf-8");

$conn = new mysqli($servername, $username, $password);
mysqli_query('set name UTF8');
//检查连接
if ($conn-> connect_error) {
    iconv('gbk', 'utf-8', mysqli_connect_error());
    die("连接失败: ". $conn->connect_error);
}
echo "连接成功" . "<br>";

// 创建连接
$conn = mysqli_connect($servername,
    $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection
failed: " . mysqli_connect_error());
}
echo "连接成功" . "<br>";
//创建数据库
//$sql = "create database myDb";
//if ($conn->query($sql) === true) {
//    echo "数据库创建成功";
//} else {
//    echo "Error creating database :" . $conn->error;
//}
//$conn->close();

//创建数据库表
//$sql = "create table MyGuest (
//    id int(6) unsigned auto_increment primary key,
//    firstname varchar(30) not null,
//    lastname varchar(30) not null,
//    email varchar(50),
//    reg_date timestamp
//)";
//if (mysqli_query($conn, $sql)) {
//    echo "数据表 MyGuest创建成功" . PHP_EOL;
//} else {
//    echo "数据包创建失败：" .mysqli_error($conn);
//}
//mysqli_close($conn);


//插入数据
//$sql = "insert into MyGuest(firstname, lastname, email) values ('Jonney', 'Jack', 'jack@example.com')";
//if ($conn->query($sql) === true) {
//    echo "新数据插入成功" .  "<br>";
//} else {
//    echo "数据插入失败：" . $sql . "<br>" .$conn->error;
//}


//预处理插入多条数据
/*$sql = "insert into MyGuest(firstname, lastname, email) values(?, ?, ?)";
$stmt = mysqli_stmt_init($conn);//预处理语句
if (mysqli_stmt_prepare($stmt, $sql)) {
    //绑定参数
    mysqli_stmt_bind_param($stmt, 'sss', $firstname, $lastname, $email);
    $firstname = 'Jacky';
    $lastname = 'Monky';
    $email = 'pombai@qq.com';
    mysqli_stmt_execute($stmt);

    $firstname = 'Julie';
    $lastname = 'Dooley';
    $email = 'Julie@example.com';
    mysqli_stmt_execute($stmt);
    echo "插入成功";
} else {
    echo "插入失败" . mysqli_error($conn);
}*/

//预处理及绑定
/*$stmt = $conn->prepare("insert into MyGuest(firstname, lastname, email) values(?, ?, ?)");
$stmt ->bind_param('sss', $firstname, $lastname, $email );
$firstname = 'Mike';
$lastname = 'Monney';
$email = 'pobuuy@163.com';
$stmt->execute();

$firstname = 'Rubby';
$lastname = 'Koee';
$email = 'Rubby@aoe.com';
$stmt->execute();
echo "插入成功";
$stmt->close();
$conn->close();*/

//查询数据
$sql = "select id, firstname, lastname, email, reg_date from MyGuest";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //输出每行数据
    while ($row = $result->fetch_assoc()) {
        echo "<br> id：" .$row["id"] . " Name：".$row["firstname"] . "---lastname：". $row["lastname"].
            "---Email：" .$row["email"] . "-更新时间：". $row["reg_date"];
    }
} else {
    echo "0 个结果";
}
$conn->close();

//$sql = "select * from MyGuest where firstname='Jacky'";//where查询
/*$sql = "select * from MyGuest order by email";//order排序查询
$result = $conn->query($sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<br> id：" .$row["id"] . " Name：".$row["firstname"] . "---lastname：". $row["lastname"].
        "---Email：" .$row["email"] . "-更新时间：". $row["reg_date"];
}*/

//更改数据
//$sql = "update MyGuest set email='tencent@example.com' where firstname = 'Jonney' and lastname='Jack'";
//$sql = "delete from MyGuest where firstname = 'Rubby'";
//$result = $conn->query($sql);
//if ($result = 1) {
//    echo "操作成功";
//} else{
//    echo "操作失败";
//}
//$conn->close();