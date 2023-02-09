    <!-- user login forms -->
    <!-- Modal -->
    <div class="modal fade" id="user_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">User Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="" method="POST">
                <label for="email">Enter Email</label>
                <input class="form-control" type="email" name="email" id="email">
                <label for="pass">Enter Password</label>
                <input class="form-control" type="password" name="pass" id="pass">

                <input class="btn btn-danger mt-3 d-block ml-auto" name="login" type="submit" value="Login">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#create_account">Register</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <!-- user login forms end -->


    <!-- create account -->
    <div class="modal fade" id="create_account" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="./configuration/create_user.php" method="POST">
                <label for="name">Full Name</label>
                <input class="form-control" type="text" name="name" id="name">

                <label for="phone">Phone</label>
                <input class="form-control" type="number" name="phone" id="phone">

                <label for="email">Enter Email</label>
                <input class="form-control" type="email" name="email" id="email">

                <label for="pass">Enter Password</label>
                <input class="form-control" type="password" name="pass" id="pass">

                <input class="btn btn-primary mt-3 d-block ml-auto" name="register" type="submit" value="Register">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    <!-- create account end -->