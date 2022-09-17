<?php
    $conn = mysqli_connect("localhost","root","yu123498","projectdb");
    $products = array('장난감', '가방', '신발', '토마토', '수박', '자동차', '태블릿', '핸드폰', '침대');
    $products_eng = array('toy', 'bag', 'shoes', 'tomato', 'melon', 'car', 'tablet', 'phone', 'bed');
    $i = 0;

    while($i<count($products)){
        if (isset($_POST['plus']) and ($_POST['plus']===$products[$i])) {
            mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname=$products[$i];");
            ?>
            <script>
                location.href="prod.php"
            </script> 
        <?php
            break;
        }
        if (isset($_POST['minus']) and ($_POST['minus']===$products[$i])) {
            mysqli_query($conn, "UPDATE carttbl SET amount = amount-1 WHERE prodname=$products[$i];");
            ?>
            <script>
                location.href="prod.php"
            </script> 
        <?php
            break;
        }
        if (isset($_POST['add']) and ($_POST['add']===$products_eng[$i])) {
            if(mysqli_fetch_array(mysqli_query($conn,"SELECT prodname, amount FROM carttbl WHERE prodname=$products[$i];"))){
                mysqli_query($conn, "UPDATE carttbl SET amount = amount+1 WHERE prodname=$products[$i];");
            }else{
                mysqli_query($conn, "INSERT INTO carttbl VALUES (NULL,$products[$i],1,1000);");
            }
            ?>
            <script>
                location.href="prod.php"
            </script> 
        <?php
            break;
        }
        if (isset($_POST['delete']) and ($_POST['delete']===$products[$i])) {
            mysqli_query($conn, "DELETE FROM carttbl WHERE prodname=$products[$i]");
            ?>
            <script>
                location.href="prod.php"
            </script> 
        <?php
            break;
        }
        $i++;
    }
?>