<?php
if (isset($_POST['submit'])) {
    $createUser = new UsersController();
    $createUser->register();
} 

?>
<main>
    <div class="container">
        
        <div class="row my-2 justify-content-center">
            <div class="col-lg-6 col-md-9 col-sm-12">
            <div class="alert_space">

<?php include('./views/includes/Alert.php') ?>
</div>
                <div class="hero mt-3">
                    <div   data-aos="fade-up" class="mapp p-3 d-flex justify-content-center align-items-center">
                        
                        <div class="title">
                            <h4>Register</h4>
                        </div>  
                    </div>
                    <form method="post"   data-aos="fade-down" class="mt-3">
                        <div class="form-group">
                            <label>Fullname <span>*</span></label>
                            <input type="text" class="form-control" placeholder="Fullaname" name="fullname" maxlength="100" size="100" required>
                        </div>
                        <div class="form-group">
                            <label>Username <span>*</span></label>
                            <input type="text" class="form-control" placeholder="Username" maxlength="100" size="100" name="username" required>
                        </div>

                        <div class="form-group">
                            <label>Password <span>*</span></label>
                            <input type="password" class="form-control" placeholder="Password" maxlength="100" size="100" required name="password" >
                        </div>
                        





                        <div class="form-group mt-3 ">

                            <button type="submit" class="btn btn-add" name="submit">Register</button>
                        </div>
                        
                        <a href="<?php echo BASE_URL ?>login" class="btn-link btn mt-2">Login</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>