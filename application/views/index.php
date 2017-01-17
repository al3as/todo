<div  style="background-color: #aaa; margin-bottom: 8px; margin-top:8px;padding: 10px; border-radius: 10px;">
<div class=" font-md text-center white">Welcome to Todo WebSite Write your Notes Today 
</div>
</div>
<hr>

<div class="header-background font-md text-center"> Register </div>
<hr>
<div class="row col-lg-offset-2  col-lg-6">
<form action="<?=base_url('users/regsiter')?>" method="post">
    <div class="form-group font-sm">
        <label for="name">Full name:</label>
        <div class="text-danger"><?=form_error('user_fullname')?></div>
        <input type="text" class="form-control" id="name" name="user_fullname">
    </div>
    <div class="form-group font-sm">
        <label for="user">Username:</label>
        <div class="text-danger"><?=form_error('user_name')?></div>
        <input type="text" class="form-control" id="user" name="user_name">
    </div>
    <div class="form-group font-sm">
        <label for="pass">Password:</label>
        <div class="text-danger"><?=form_error('user_pass')?></div>
        <input type="password" class="form-control" id="pass" name="user_pass">
    </div>
    <input type="submit" value="Register to note now" class="btn btn-success btn-block btn-lg font-sm">    

</div>
</form>