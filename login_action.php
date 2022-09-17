<?php
    $conn = mysqli_connect("localhost","root","yu123498","projectdb");
    $uid= $_POST["inputid"];
    $upsw= $_POST["inputpsw"];
    $result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM usertbl where userid='$uid'&& userpsw='$upsw'"));
    if($result){
        echo '성공';
        mysqli_query($conn, "DELETE FROM carttbl");
        mysqli_query($conn, "ALTER TABLE carttbl AUTO_INCREMENT=1");
        ?>
        <script>
            alert('로그인되었습니다.');
            location.href="prod.php";
        </script>    
    <?php
    }
    else{
    ?>
    <script>
        alert('실패');
        location.href="login.php";
    </script>
    <?php
    }?>
