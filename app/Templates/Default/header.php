<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title.' - '.SITETITLE;?></title>
    <?php
    echo $meta;//place to pass data / plugable hook zone
    Assets::css([
        Url::templatePath().'css/bootstrap.min.css',
        Url::templatePath().'css/bootstrap-theme.min.css',
        Url::templatePath().'font-awesome/css/font-awesome.css',
        Url::templatePath().'css/animate.css',
        Url::templatePath().'css/dataTables.bootstrap.css',
        Url::templatePath().'css/bootstrap-select.css',
        Url::templatePath().'css/datepicker.css',
        Url::templatePath().'css/datepicker.css',
        Url::templatePath().'css/datepicker.css',
        Url::templatePath().'css/datepicker.css',
        Url::templatePath().'css/style.css',
    ]);
    echo $css; //place to pass data / plugable hook zone
    ?>

    <?php
    Assets::js([
    Url::templatePath().'js/jquery-2.1.1.js',
    Url::templatePath().'js/bootstrap-select.js',
    Url::templatePath().'js/bootstrap-datepicker.js',
    Url::templatePath().'js/jquery.dataTables.js',
    Url::templatePath().'js/dataTables.bootstrap.js',
    Url::templatePath().'js/jquery.validate.js',
    Url::templatePath().'js/bootstrap.min.js',
]);
?>
<body>
<?php echo $afterBody; //place to pass data / plugable hook zone?>
<?php if($menu == 'user') echo 'active'; ?>
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <span>
                        <img alt="image" class="img-circle"
                            src="<?php echo Url::templatePath().'img/profile_small.jpg' ?>" />
                        </span> 
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"> 
                        <span class="clear">
                            <span class="block m-t-xs"> <strong
                                    class="font-bold">ABC</strong>
                            </span>
                            <!-- <span class="departmentCur text-muted text-xs block">Phòng: Art Director</span> -->
                        </span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="<?=DIR;?>/admin/user">Profile</a></li>
                            <li><a href="<c:url value='/admin/profile/change-password'/>">Change Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<c:url value='/j_spring_security_logout'/>">Exit</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">IN+</div>
                </li>
                <li class="user <?php if($menu == 'user') echo 'active'; ?> "><a href="#"><i class="fa fa-th-large"></i> <span
                    class="nav-label">Manage User</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?=DIR;?>admin/user">Manage Users</a></li>
                        <li><a href="<?=DIR;?>admin/role">Manage Roles</a></li>
                        <li><a href="<?=DIR;?>admin/level">Manage Levels</a></li>
                    </ul>
                </li>
                <li class="exam <?php if($menu == 'exam') echo 'active'; ?> "><a href="#"><i class="fa fa-th-large"></i> <span
                    class="nav-label">Manage Examination</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<c:url value='/admin/question-and-answer'/>">Question & Answer</a></li>
                        <li><a href="<c:url value='/admin/exams'/>">Check Exams</a></li>
                    </ul>
                </li>
                <li class="news <?php if($menu == 'news') echo 'active'; ?> "><a href="#"><i class="fa fa-th-large"></i> <span
                    class="nav-label">News</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<c:url value='/admin/report/list'/>">Manage Notification</a></li>
                        <li><a href="<c:url value='/admin/home'/>">Manage News</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation"
        style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary "
                href="#"><i class="fa fa-bars"></i> </a>
            <!-- <form role="search" class="navbar-form-custom"
                action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Tìm kiếm..."
                        class="form-control" name="top-search" id="top-search">
                </div>
            </form> -->
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li><span class="m-r-sm text-muted welcome-message">Hello,
                    <strong> ABC </strong> ! </span></li>
            <li class="dropdown"><a class="count-info"
                href="<c:url value='/admin/viewNoti'/>"> <i class="fa fa-bell"></i> <span
                    class="label label-primary">1</span>
            </a>
            </li>


            <li><a href="<c:url value='/j_spring_security_logout'/>"> <i
                    class="fa fa-sign-out"></i> Log out
            </a></li>
        </ul>

    </nav>
</div>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?= $title ?></h2>
        <ol class="breadcrumb">
            <li><a href="<?=DIR;?>">Home</a></li>
            <li class="active"><strong><?= $title ?></strong></li>
        </ol>
    </div>
    <div class="col-lg-2"></div>
</div>
</nav>
<div class="wrapper wrapper-content  animated fadeInRight blog">
