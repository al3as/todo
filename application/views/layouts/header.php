<html>
 <head>
     <meta charset="utf-8">    
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/IDs.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/classes.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/colors.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/fonts.css')?>">
 </head>
  <body>  
        <div class="container-fluid header-background text-center margin-top-xsm font-md"   style="cursor: default;"> Todo Website </div>
        <?php if($this->session->userdata('logged_in') == TRUE):?>
         
             <nav class="navbar navbar-default">
                 <div class="container-fluid">
                     <div class="navbar-header">
                         <div>
                            <ul class="nav navbar-nav font-sm">
                            <li>
                                <span class="glyphicon glyphicon-user g-font padding-sm green"><li><b class="font-sm padding-rsm text-center"> <?=$this->session->userdata('user_name')?></b> </span>
                            </li>    
                            <li class="active"><a href="<?=base_url('Notes')?>"> <span class="glyphicon glyphicon-home"></span> My Notes</a></li>
                                <li><a href="<?=base_url('notes/addnotes')?>"> <span class="glyphicon glyphicon-plus"></span>Add Notes</a></li>
                                <li><a href="<?=base_url('notes/completed')?>"> <span class="glyphicon glyphicon-globe"></span> Completed Notes</a></li>
                                <li><a href="#"> <span class="glyphicon glyphicon-cog"></span> Setting </a></li>
                            </ul>
                             
                     </div>
                 </div>

                 <ul class="nav nav-navbar navbar-right padding-right font-sm">
                    <li><a href="<?=base_url('users/logout')?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                 </ul> 
             </nav>
     
             
         
        <?php else:?>
            <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <div class="navbar-brand padding-right font-md" style="cursor: default;"><b>Todo WebSite</b></div>
               </div>
                <div>
                    <ul class="nav navbar-nav font-sm">
                        <li class="active"><a href="<?=base_url('site/index')?>">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right font-sm">
                        <li>
                            <form action="<?=base_url('users/login')?>" method="post">
                                <div class="row white">
                                    <div class="col-lg-4">
                                        <input type="text" name="username" placeholder="Username" class="form-control" autofocus>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                    <input type="submit" value="Login" class="btn btn-primary">
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php endif;?>
        <div class="container margin-top-xsm w-background">
            <?php if(!empty($this->session->flashdata('alert'))):?>
                <div class="alert alert-success text-center" id="alert">
                    <?=$this->session->flashdata('alert')?>
                </div>
            <?php endif;?>
            <?php if(!empty($this->session->flashdata('error'))):?>
                <div class="alert alert-danger text-center" id="error">
                    <?=$this->session->flashdata('error')?>
                </div>
            <?php endif;?>

        