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
    <form method="POST" action="signup_action.php" name="register">
        <div class="container centerpos">
            <div class="col-lg-5 col-md-6">
                <div class="card shadow rounded border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center korean-font-design">회원가입</h4>  
                        <form class="login-form mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">이름 <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <input type="text" class="form-control ps-5" placeholder="이름" name="username" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label  korean-font-design">전화번호 <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <input type="text" class="form-control ps-5" placeholder="전화번호" name="phone" required="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label korean-font-design">아이디 <span class="text-danger"><button class="btn btn-primary" onclick="checkid();">중복확인</button>*</span></label>
                                        <div class="form-icon position-relative">
                                            <input type="text" class="form-control ps-5" placeholder="아이디" name="userid" required="" id="userid">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label  korean-font-design">비밀번호 <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <input type="password" class="form-control ps-5" placeholder="비밀번호" name="userpsw" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">가입</button>
                                    </div>
                                </div>
                                <div class="mx-auto">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2 korean-font-design">이미 계정이 있으신가요?</small> <a href="login.php" class="text-dark fw-bold">로그인</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>