<?php include_once 'templates/header.php' ?>


    <body class="text-center">

        <main role="main">
            <div class="album py-5 bg-light">
                <div class="container">

                    <form class="form-signin" method="POST" action="">
                        <input type="hidden" name="act" value="login" />

                        <h1 class="h3 mb-3 col-md-3 font-weight-normal">Please sign in</h1>
                        <div class="mb-3  col-md-3">
                            <label for="inputEmail" class="sr-only">Email address</label>
                            <input type="email" name="email" id="inputEmail" class="form-control"
                                placeholder="Email address" required autofocus>
                        </div>
                        <div class=" mb-3 col-md-3">
                            <div class="form-control-feedback">
                                <span class="text-danger align-middle">
                                    <i class="fa fa-close"></i> <?= $error ?>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3  col-md-3">
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" name="password" id="inputPassword" class="form-control"
                                placeholder="Password" required>
                        </div>
                        <div class="checkbox mb-3 col-md-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block col-md-2 type=" submit">Sign in</button>
                        <p class="mt-5 mb-2 text-muted">&copy; 2017-2018</p>
                    </form>
                </div>
            </div>
        </main>
    </body>

    <?php include_once 'templates/footer.php' ?>