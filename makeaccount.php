<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
	<title>회원가입</title>
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="makeaccount.css">
    </head>   
    <body>
        <form action="./process.php?mode=create" method="POST">
            <h1>회원가입을 환영합니다!</h1>
            <h2>아이디</h2>
            <p><input type="text" name="id" required></p>
            <h2>비밀번호</h2>
            <p><input type="password" name="pw" required></p>
            <h2>이름</h2>
            <p><input type="text" name="name" required></p>
            <nav class="tel">
                <h2 >전화번호</h2>
                <p><input type="text" name="tel1" required>-<input type="text" name="tel2" required>-<input type="text" name="tel3" required></p>
                <p><input type="submit" value="가입"/></p>         
            </nav>
        </form>
    </body>
</html>