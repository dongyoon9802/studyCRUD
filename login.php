<!DOCTYPE html>
<html lang="ko">
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
    <form method="POST" action="login_action.php">
        <div class="container centerpos box-size">
            <div class="card login-page bg-white shadow rounded border-0">
                <div class="card-body">
                    <h4 class="card-title text-center">로그인</h4>  
                    <form class="mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">아이디</label>
                                    <div class="form-icon position-relative">
                                        <input class="form-control" placeholder="ID" name="inputid" id="inputid" required="">
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">비밀번호</label>
                                    <div class="form-icon position-relative">
                                        <input type="password" class="form-control" placeholder="Password" name="inputpsw" id="inputpsw" required="">
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="col-lg-12 mb-0">
                                <div class="d-grid">
                                    <button class="btn btn-primary">로그인</button>
                                </div>
                            </div><!--end col-->
                            <div class="col-12 text-center">
                                <p class="mb-0 mt-3"><small class="text-dark me-2">계정이 없으신가요 ?</small> <a href="signup.php" class="text-blue fw-bold">회원가입</a></p>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div>
            </div><!---->
        </div> <!--end col-->
    </form>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>