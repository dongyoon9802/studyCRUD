<?php
    $conn = mysqli_connect("localhost","root","yu123498","projectdb");
    $uid= $_POST["userid"];
    $sql = "INSERT INTO usertbl (userid,userpsw,username,phone) 
    VALUES ('{$_POST['userid']}','{$_POST['userpsw']}','{$_POST['username']}','{$_POST['phone']}')";// 입력한 아이디와, 패스워드, 전화번호, 이름 모두 삽입하는 쿼리문
    $result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM usertbl where userid='$uid'"));// 데이터삽입을 실행
    // 아이디가 primary key로 지정되어 있어 같은 아이디가 있다면 오류발생
    if(!$result){//오류가 없으니 성공 메시지 출력
        mysqli_query($conn, $sql);
        echo '성공';?>
        <script>
            alert('완료되었습니다');
            location.href="login.php";
        </script>    
    <?php
    }
    else{// 오류가 있어서 실패메시지 출력
    ?>
    <script>
        alert('실패');
        location.href="signup.php";
    </script>
    <?php
    }?>
