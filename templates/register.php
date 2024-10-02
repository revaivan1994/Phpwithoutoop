<?php include_once 'templates/header.php' ?>

    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">

                <h2>Please Register</h2>
                <form class="form-horizontal" role="form" method="POST" action="">
                    <input type="hidden" name="act" value="register" />
                    <div class="mb-3  col-md-4">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="you@mail.com" required autofocus>
                    </div>
                    
                    <div class="mb-3  col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="exampleInputPassword2" class="form-label">Repead Password</label>
                        <input type="password" name="password2" class="form-control" id="exampleInputPassword2"
                            placeholder="Repead password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>

            </div>
        </div>
    </main>

    <?php include_once 'templates/footer.php' ?>