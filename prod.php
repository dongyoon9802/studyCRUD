<?php
    $conn = mysqli_connect("localhost","root","yu123498","projectdb");
    // $sql = "SELECT prodname, SUM(amount) AS amt, SUM(amount*price) AS amtprice FROM carttbl GROUP BY prodname";
    $sql = "SELECT prodname, amount AS amt, amount*price AS amtprice FROM carttbl GROUP BY prodname";
    $ret = mysqli_query($conn,$sql); 
    $sum=mysqli_fetch_array(
        mysqli_query($conn,"SELECT SUM(price*amount) AS total FROM carttbl GROUP BY prodname 
        WITH ROLLUP HAVING GROUPING(prodname) = 1"));//카트테이블에 있는 모든 (수량X가격)을 합한 값을 Read함  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav class="whole navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand nav-move" href="#">Main</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="prod.php">메인페이지</a>
                    <a class="nav-link active" href="login.php">로그인</a>
                    <a class="nav-link active" href="signup.php">회원가입</a>
                </div>
            </div>
        </nav>
    </div>
    <form method="POST" action="add_action.php">
        <section class="prod-frame">
            <div class="container ">
                <div class="row">
                    <div class="col-9 inner-prod">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="card prod-card" style="width: 17rem;">
                                <img src="picture/toy.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">장난감    1000원</h5>
                                    <button class="btn btn-primary" type="submit" name="add" value="toy">담기</button>
                                </div>
                            </div>
                            <div class="card prod-card" style="width: 17rem;">
                                <img src="picture/bag.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">가방    1000원</h5>
                                    <button class="btn btn-primary" type="submit" name="add" value="bag">담기</button>
                                </div>
                            </div>
                            <div class="card prod-card" style="width: 17rem;">
                                <img src="picture/shoes.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">신발    1000원</h5>
                                    <button class="btn btn-primary" type="submit" name="add" value="shoes">담기</button>
                                </div>
                            </div>
                            <div class="card prod-card" style="width: 17rem;">
                                <img src="picture/tomato.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">토마토    1000원</h5>
                                    <button class="btn btn-primary" type="submit" name="add" value="tomato">담기</button>
                                </div>
                            </div>
                            <div class="card prod-card" style="width: 17rem;">
                                <img src="picture/melon.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">수박    1000원</h5>
                                    <button class="btn btn-primary" type="submit" name="add" value="melon">담기</button>
                                </div>
                            </div>
                            <div class="card prod-card" style="width: 17rem;">
                                <img src="picture/car.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">자동차    1000원</h5>
                                    <!-- <input class="btn btn-primary" type="submit" name="add" value="담기"> -->
                                    <button class="btn btn-primary" type="submit" name="add" value="car">담기</button>
                                </div>
                            </div>
                            <div class="card prod-card" style="width: 17rem;">
                                <img src="picture/tablet.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">태블릿    1000원</h5>
                                    <button class="btn btn-primary" type="submit" name="add" value="tablet">담기</button>
                                </div>
                            </div>
                            <div class="card prod-card" style="width: 17rem;">
                                <img src="picture/phone.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">핸드폰    1000원</h5>
                                    <button class="btn btn-primary" type="submit" name="add" value="phone">담기</button>
                                </div>
                            </div>
                            <div class="card prod-card" style="width: 17rem;">
                                <img src="picture/bed.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">침대    1000원</h5>
                                    <button class="btn btn-primary" type="submit" name="add" value="bed">담기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 side-cart" id="cart-box">
                        <h5>장바구니</h5>
                        <div class="cart d-flex align-items-start flex-column bd-highlight mb-10" style="height: 200px;" name="add-field">
                            <?php
                                echo "<TABLE>";
                                while($row=mysqli_fetch_array($ret)){
                                    echo "<TR>";
                                    echo "<TD>|",$row['prodname'],"|</TD>";
                                    echo "<TD>",$row['amt'],"개</TD>";
                                    echo "<TD>,",$row['amtprice'],"원</TD>";
                                    echo "<TD>","<button class='btn btn-primary' type='submit' name='delete' value='",$row['prodname'],"'>삭제</button></TD>";
                                    echo "<TD>","<button class='btn btn-primary' type='submit' name='minus' value='",$row['prodname'],"'>-</button></TD>";
                                    echo "<TD>","<button class='btn btn-primary' type='submit' name='plus' value='",$row['prodname'],"'>+</button></TD>";
                                    echo "</TR>";
                                }
                                echo "</TABLE>";
                            ?>
                            <!-- <div class="p-2 bd-highlight">상품명 <input class="btn btn-primary" type="submit" name="delete" value="삭제"></button></div> -->
                            <div class="mt-auto p-2 bd-highlight">총 가격 : 
                                <?php 
                                    if($sum===null){
                                        echo 0;
                                    }else{
                                        echo $sum['total']; 
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>                
    </form>
    
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>