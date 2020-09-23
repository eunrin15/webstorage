<?php
$dbh = new PDO('mysql:host=localhost;dbname=cloud', 'root', '1234',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$stmt = $dbh->prepare('SELECT * FROM USERINFO');
$stmt->execute();
$list = $stmt->fetchAll();

$id = $_GET['id'];
$pw = $_GET['pw'];
$grade = $_GET['grade'];

if($grade !== 'admin'){
    echo "<script type=\"text/javascript\">alert('사용할 수 없는 기능입니다!');</script>";
    echo("<script>location.replace('main.php?id={$id}&pw={$pw}&grade={$grade}');</script>");	
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>홈페이지 관리</title>
        <link rel="stylesheet" href="default.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="tool.css">
    </head>
<body>
    <nav>
        <ul>
            <li><a class="idinfo"><?=$_GET['id']?>님 환영합니다.</a></li>
            <li><a class="logout" href="login.php">로그아웃</a></li>
        </ul>
        <ul class="top_menu">
            <li class="top_menu_item"><a href="main.php?id=<?=$_GET['id']?>&pw=<?=$_GET['pw']?>&grade=<?=$_GET['grade']?>">홈페이지 정보</a></li>
            <li class="top_menu_item"><a href="upload.php?id=<?=$_GET['id']?>&pw=<?=$_GET['pw']?>&grade=<?=$_GET['grade']?>">파일 저장소</a></li>
            <li class="top_menu_item"><a href="board.php?id=<?=$_GET['id']?>&pw=<?=$_GET['pw']?>&grade=<?=$_GET['grade']?>">게시판 정보</a></li>
            <li class="top_menu_item"><a href="tool.php?id=<?=$_GET['id']?>&pw=<?=$_GET['pw']?>&grade=<?=$_GET['grade']?>">홈페이지 관리</a></li>
        </ul>
    </nav>

    <nav class="search"> 
        <form>
            <input type="radio" id="name" name="option" value="name"><label>이름</label>
            <input type="radio" id="id" name="option" value="id"><label>ID</label>
            <input type="radio" id="tel" name="option" value="tel"><label>전화번호</label>
            <input type="radio" id="grade" name="option" value="grade"><label>등급</label>
            <input type="text" placeholder="검색하고 싶은 정보 입력">
            <input type="submit" value="검색">
        </form>
    </nav>
    <?php
        foreach($list as $row) {
            echo "<nav class=\"info\"><h2>
            [ 이름 ] : ".htmlspecialchars($row['name']).
            " [ ID ] : ".htmlspecialchars($row['id']).
            " [ PW ] : ".htmlspecialchars($row['pw']).
            " [ 전화번호 ] : ".htmlspecialchars($row['tel']).
            " [ 등급 ] : ".htmlspecialchars($row['grade']).
            "<input type='button' onClick=location.href=\"change.php?id={$id}&pw={$pw}&grade={$grade}&cid={$row['id']}\" value='수정'>".
            "<input type='button' onClick=location.href=\"./process.php?mode=delete&id={$id}&pw={$pw}&grade={$grade}&cid={$row['id']}\" value='탈퇴'>".
            "</h2></nav>";
        }
    ?>
</body>
</html>