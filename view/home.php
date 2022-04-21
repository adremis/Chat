<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>ChatRoom</title>
</head>
<body style="background-color: #93ccfc">

<nav class="row justify-content-between" style="background-color: #8b8bf8">
    <h4 class="my-3 px-5 col-3">MY ChatRoom</h4>
    <div class="my-3 col-6">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                     viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
        </form>
    </div>

    <div class="my-3 col-2 ps-5">
        <button type="button" class="btn btn-primary mx-auto d-block mt-1 px-5" data-bs-toggle="modal"
                data-bs-target="#regModal">
            Register
        </button>

        <button type="button" class="btn btn-primary mx-auto d-block mt-1 px-5" data-bs-toggle="modal"
                data-bs-target="#modalForm">
            Login
        </button>

        <!--        <a href="signin.html" class="btn btn-success " >Sign In</a>-->
        <!--        <a href="signup.html" class="btn btn-success " >Sign Up</a>-->
        <!--        <input type="submit" value="Sing Up" class="me-3 btn btn-success" style="border-radius: 8px">-->
    </div>
</nav>


<!-- login Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bootstrap 5 Modal Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../core/controller/login.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="Password"/>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe"/>
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="modal-footer d-block">
                        <p class="float-start">Not yet account <a href="#">Sign Up</a></p>
                        <button type="submit" class="btn btn-warning float-end">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Register Modal -->
<div class="modal fade" id="regModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="../core/controller/register.php">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">UserName</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="Email"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                               placeholder="Password"/>
                    </div>

                    <div class="modal-footer d-block">
                        <!--                        <p class="float-start">Not yet account <a href="#">Sign Up</a></p>-->
                        <button type="submit" class="btn btn-warning float-end">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5 align-items-center justify-content-between">
    <div class="col-4 ">
        <h1 class="mx-5 text-center">
            Sample ChatRoom
        </h1>
    </div>
    <div class="col-8">
        <img src="../images/1.jpg" width="70%" alt="">
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>
</html>

