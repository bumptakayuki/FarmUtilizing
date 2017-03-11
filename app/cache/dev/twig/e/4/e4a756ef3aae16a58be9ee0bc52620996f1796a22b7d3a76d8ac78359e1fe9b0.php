<?php

/* AdminBundle::base.html.twig */
class __TwigTemplate_e4a756ef3aae16a58be9ee0bc52620996f1796a22b7d3a76d8ac78359e1fe9b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>FarmUtilizing | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("common/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("common/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\">Adm</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>FarmUtilizing</b>Admin</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class=\"dropdown messages-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope-o\"></i>
                            <span class=\"label label-success\">4</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- start message -->
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                AdminLTE Design Team
                                                <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Developers
                                                <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Sales Department
                                                <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <div class=\"pull-left\">
                                                <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user4-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                                            </div>
                                            <h4>
                                                Reviewers
                                                <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class=\"dropdown notifications-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-bell-o\"></i>
                            <span class=\"label label-warning\">10</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-users text-red\"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-user text-red\"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"footer\"><a href=\"#\">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class=\"dropdown tasks-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-flag-o\"></i>
                            <span class=\"label label-danger\">9</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"header\">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class=\"menu\">
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Design some buttons
                                                <small class=\"pull-right\">20%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Create a nice theme
                                                <small class=\"pull-right\">40%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Some task I need to do
                                                <small class=\"pull-right\">60%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href=\"#\">
                                            <h3>
                                                Make beautiful transitions
                                                <small class=\"pull-right\">80%</small>
                                            </h3>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                    <span class=\"sr-only\">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                </ul>
                            </li>
                            <li class=\"footer\">
                                <a href=\"#\">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/suzuki_01.png"), "html", null, true);
        echo "\" width=\"100\" height=\"100\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">Takayuki Suzuki</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- User image -->
                            <li class=\"user-header\">
                                <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\">
                                <p>
                                    Alexander Pierce - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class=\"user-body\">
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Followers</a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Sales</a>
                                </div>
                                <div class=\"col-xs-4 text-center\">
                                    <a href=\"#\">Friends</a>
                                </div>
                            </li>
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"";
        // line 272
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"  class=\"btn btn-default btn-flat\">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- Sidebar user panel -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    ";
        // line 293
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/suzuki_01.png"), "html", null, true);
        echo "\" width=\"160\" height=\"160\" class=\"img-circle\" alt=\"User Image\">
                </div>
                <div class=\"pull-left info\">
                    <p>Takayuki Suzuki</p>
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\">
                <li class=\"header\">MAIN NAVIGATION</li>
                <li class=\"active treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-dashboard\"></i> <span>Action</span> <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"active\"><a href=\"";
        // line 318
        echo $this->env->getExtension('routing')->getPath("admin_post_index");
        echo "\"><i class=\"fa fa-circle-o\"></i> Dashboard</a></li>
                        <li class=\"active\"><a href=\"";
        // line 319
        echo $this->env->getExtension('routing')->getPath("admin_post_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Add</a></li>
                        <li class=\"active\"><a href=\"";
        // line 320
        echo $this->env->getExtension('routing')->getPath("admin_post_upload");
        echo "\"><i class=\"fa fa-circle-o\"></i> Upload</a></li>
                    </ul>
                </li>
                <li>
                    <a href=\"pages/mailbox/mailbox.html\">
                        <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                        <small class=\"label pull-right bg-yellow\">12</small>
                    </a>
                </li>
                <li class=\"treeview\">
                    <a href=\"#\">
                        <a href=\"";
        // line 331
        echo $this->env->getExtension('routing')->getPath("admin_post_csv_export");
        echo "\"> <i class=\"fa fa-share\"></i><span>CSVエクスポート</span></a>
                        <i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
            ";
        // line 357
        $this->displayBlock('body', $context, $blocks);
        // line 359
        echo "            <!-- Small boxes (Stat box) -->
            <!-- Main row -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2016 FullSpeed</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript::;\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div><!-- ./wrapper -->

<script src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("common/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 545
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/js/app.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 554
        echo "
";
        // line 556
        echo "
";
        // line 558
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("common/select2/js/select2.js"), "html", null, true);
        echo "\"></script>

";
        // line 561
        echo "<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>

<script>
    \$(document).ready(function(){
        \$(\".tag-select2\").select2({
            tags: true,
            tokenSeparators: [',', ' '],
            theme: \"classic\"
        })
        \$(\".prefArea-select2\").select2({
            tags: true,
            theme: \"classic\"
        })
    });
</script>

</body>
</html>
";
    }

    // line 357
    public function block_body($context, array $blocks = array())
    {
        // line 358
        echo "            ";
    }

    public function getTemplateName()
    {
        return "AdminBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 358,  719 => 357,  695 => 561,  689 => 558,  686 => 556,  683 => 554,  679 => 551,  675 => 550,  671 => 549,  667 => 548,  663 => 547,  659 => 546,  655 => 545,  651 => 544,  647 => 543,  643 => 542,  639 => 541,  635 => 540,  630 => 538,  449 => 359,  447 => 357,  418 => 331,  404 => 320,  400 => 319,  396 => 318,  367 => 293,  344 => 272,  311 => 242,  180 => 114,  165 => 102,  150 => 90,  135 => 78,  120 => 66,  73 => 22,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  40 => 13,  36 => 12,  32 => 11,  20 => 1,);
    }
}
