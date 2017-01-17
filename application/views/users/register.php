<div class="container margin-top-xsm w-background">
    <div class="header-background font-md text-center"> Register </div>
    <div class="row col-lg-offset-2  col-lg-6">
    <form action="<?=base_url('users/register')?>" method="post">
        <div class="form-group font-sm">
            <label for="name">Full name:</label>
            <input type="text" class="form-control" id="name" name="user_fullname">
        </div>
        <div class="form-group font-sm">
            <label for="user">Username:</label>
            <input type="text" class="form-control" id="user" name="user_name">
        </div>
        <div class="form-group font-sm">
            <label for="pass">Password:</label>
            <input type="password" class="form-control" id="pass" name="user_pass">
        </div>
        <input type="submit" value="Register to note now" class="btn btn-primary btn-block btn-lg font-sm">    

    </div>
    </form>
