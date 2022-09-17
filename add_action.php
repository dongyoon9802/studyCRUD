<?php
    $conn = mysqli_connect("localhost","root","yu123498","projectdb");
    if (isset($_POST['plus'])) {
        if($_POST['plus']==='장난감'){
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='장난감';");
            //플러스 버튼을 눌렀을 때 value값이 '장난감이면 수량 +1'
        }
        else if($_POST['plus']==='가방'){
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='가방';");
        }
        else if($_POST['plus']==='신발'){
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='신발';");
        }
        else if($_POST['plus']==='토마토'){
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='토마토';");
        }
        else if($_POST['plus']==='수박'){
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='수박';");
        }
        else if($_POST['plus']==='자동차'){
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='자동차';");
        }
        else if($_POST['plus']==='태블릿'){
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='태블릿';");
        }
        else if($_POST['plus']==='핸드폰'){
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='핸드폰';");
        }
        else{
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='침대';");
        }
        ?>
        <script>
            location.href="prod.php"
        </script> 
        <?php
    }
    if (isset($_POST['minus'])) {
        if($_POST['minus']==='장난감'){
            $checkAmt = mysqli_fetch_array(mysqli_query($conn, "SELECT amount FROM carttbl WHERE prodname='장난감';"));
            if($checkAmt['amount']>1){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname='장난감';");
            }else{
                mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='장난감'");
            }
            //마이너스 버튼을 눌렀을 때 value값이 '장난감이면 수량 -1'
        }
        else if($_POST['minus']==='가방'){
            $checkAmt = mysqli_fetch_array(mysqli_query($conn, "SELECT amount FROM carttbl WHERE prodname='가방';"));
            if($checkAmt['amount']>1){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname='가방';");
            }else{
                mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='가방'");
            }
        }
        else if($_POST['minus']==='신발'){
            $checkAmt = mysqli_fetch_array(mysqli_query($conn, "SELECT amount FROM carttbl WHERE prodname='신발';"));
            if($checkAmt['amount']>1){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname='신발';");
            }else{
                mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='신발'");
            }
        }
        else if($_POST['minus']==='토마토'){
            $checkAmt = mysqli_fetch_array(mysqli_query($conn, "SELECT amount FROM carttbl WHERE prodname='토마토';"));
            if($checkAmt['amount']>1){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname='토마토';");
            }else{
                mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='토마토'");
            }
        }
        else if($_POST['minus']==='수박'){
            $checkAmt = mysqli_fetch_array(mysqli_query($conn, "SELECT amount FROM carttbl WHERE prodname='수박';"));
            if($checkAmt['amount']>1){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname='수박';");
            }else{
                mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='수박'");
            }
        }
        else if($_POST['minus']==='자동차'){
            $checkAmt = mysqli_fetch_array(mysqli_query($conn, "SELECT amount FROM carttbl WHERE prodname='자동차';"));
            if($checkAmt['amount']>1){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname='자동차';");
            }else{
                mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='자동차'");
            }
        }
        else if($_POST['minus']==='태블릿'){
            $checkAmt = mysqli_fetch_array(mysqli_query($conn, "SELECT amount FROM carttbl WHERE prodname='태블릿';"));
            if($checkAmt['amount']>1){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname='태블릿';");
            }else{
                mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='태블릿'");
            }
        }
        else if($_POST['minus']==='핸드폰'){
            $checkAmt = mysqli_fetch_array(mysqli_query($conn, "SELECT amount FROM carttbl WHERE prodname='핸드폰';"));
            if($checkAmt['amount']>1){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname='=핸드폰';");
            }else{
                mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='핸드폰'");
            }
        }
        else{
            $checkAmt = mysqli_fetch_array(mysqli_query($conn, "SELECT amount FROM carttbl WHERE prodname='침대';"));
            if($checkAmt['amount']>1){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname='침대';");
            }else{
                mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='침대'");
            }
        }
        ?>
        <script>
            location.href="prod.php"
        </script> 
        <?php
    }

    if (isset($_POST['delete'])) {
        if($_POST['delete']==='장난감'){
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='장난감'");
            //삭제 버튼을 눌렀을 때 value값이 '장난감'이면 잠난감 행 모두 삭제
        }
        else if($_POST['delete']==='가방'){
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='가방'");
        }
        else if($_POST['delete']==='신발'){
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='신발'");
        }
        else if($_POST['delete']==='토마토'){
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='토마토'");
        }
        else if($_POST['delete']==='수박'){
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='수박'");
        }
        else if($_POST['delete']==='자동차'){
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='자동차'");
        }
        else if($_POST['delete']==='태블릿'){
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='태블릿'");
        }
        else if($_POST['delete']==='핸드폰'){
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='핸드폰'");
        }
        else{
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname='침대'");
        }
        echo $_POST['delete'];
        ?>
        <script>
            location.href="prod.php"
        </script> 
        <?php
    }
    if (isset($_POST['add'])){
        if($_POST['add']==='toy'){
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname='장난감';"))){
                // 만약 장바구니에 같은 상품이 있으면 
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='장난감';");
                // 그 상품의 개수를 +1 해주고 (Update)
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,'장난감',1,1000);");
                // 아니면 상품 데이터를 삽입
            }
        }
        else if($_POST['add']==='bag'){
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname='가방';"))){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='가방';");
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,'가방',1,1000);");
            }
        }
        else if($_POST['add']==='shoes'){
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname='신발';"))){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='신발';");
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,'신발',1,1000);");
            }
        }
        else if($_POST['add']==='tomato'){
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname='토마토';"))){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='토마토';");
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,'토마토',1,1000);");
            }
        }
        else if($_POST['add']==='melon'){
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname='수박';"))){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='수박';");
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,'수박',1,1000);");
            }
        }
        else if($_POST['add']==='car'){
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname='자동차';"))){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='자동차';");
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,'자동차',1,1000);");
            }
        }
        else if($_POST['add']==='tablet'){
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname='태블릿';"))){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='태블릿';");
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,'태블릿',1,1000);");
            }
        }
        else if($_POST['add']==='phone'){
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname='핸드폰';"))){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='핸드폰';");
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,'핸드폰',1,1000);");
            }
        }
        else{
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname='침대';"))){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname='침대';");
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,'침대',1,1000);");
            }
        }
        
        ?>
        <script>
            location.href="prod.php"
        </script> 
        <?php
    }
?>