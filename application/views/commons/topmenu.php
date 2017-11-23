<nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left bootstrap-admin-theme-change-size">
                        <li class="text">PadiNET</li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/settings">Settings <i class="glyphicon glyphicon-cog"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-hover="dropdown"> <i class="glyphicon glyphicon-user"></i> <?php echo $_SESSION["username"]?> <i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="/main/changepassword">Ganti Password</a></li>
                                <li role="presentation" class="divider"></li>
                                <li><a href="/main/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
