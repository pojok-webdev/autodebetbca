<!DOCTYPE html>
<html>
    <head>
        <title>Tentang Aplikasi Academicsi</title>
        <?php $this->load->view("commons/headcontent");?>
        <!-- Custom styles -->
        <?php $this->load->view("commons/aboutcss");?>
    </head>
    <body class="bootstrap-admin-with-small-navbar">
        <!-- small navbar -->
        <?php $this->load->view("commons/topmenu");?>
        <!-- main / large navbar -->
        <?php $this->load->view("commons/level2menu");?>
        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">
                <!-- left, vertical navbar -->
                <?php $this->load->view("commons/horizontalmenu");?>
                <!-- content -->
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header bootstrap-admin-content-title">
                                <h1>Tentang Aplikasi Academicsi</h1>
                                <a href="https://github.com/meritoo/Bootstrap-3-Admin-Theme" class="action btn">
                                    Go to GitHub &raquo;
                                </a>
                                <a href="https://github.com/meritoo/Bootstrap-3-Admin-Theme/archive/master.zip" class="action">
                                    <button class="btn btn-success">Download (.zip)</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Details</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <ul>
                                        <li>An admin theme built with <a href="http://getbootstrap.com" target="_blank">Bootstrap 3.x.</a></li>
                                        <li>Free for personal and commercial use</li>
                                        <li>Inspired by and based on <a href="https://github.com/VinceG/Bootstrap-Admin-Theme" target="_blank">Bootstrap-Admin-Theme</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Source</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <ul>
                                        <li>
                                            <a href="https://github.com/meritoo/Bootstrap-3-Admin-Theme" target="_blank">Github Repository</a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/meritoo/Bootstrap-3-Admin-Theme/archive/master.zip">Download (.zip package)</a>
                                        </li>
                                        <li>
                                            License: MIT (see below)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">License</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <p>The MIT License (MIT)</p>
                                    <p>Copyright © 2013 - Meritoo.pl &lt;github [at] meritoo [dot] pl&gt;</p>
                                    <p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
                                    <p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
                                    <p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="bs-docs-masthead">
                                <a href="http://getbootstrap.com" target="_blank">
                                    <h1>Bootstrap</h1>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 meritoo-logo">
                            <a href="http://www.meritoo.pl" target="_blank">
                                <img src="images/logo-meritoo.png" alt="Meritoo.pl">
                                <span>Internet software house</span>
                            </a>
                        </div>
                    </div>

                    <div class="row row-urls">
                        <div class="col-md-6">
                            <a href="http://getbootstrap.com" target="_blank">Bootstrap 3.x</a>
                        </div>
                        <div class="col-md-6">
                            <a href="http://www.meritoo.pl" target="_blank">Meritoo.pl</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php $this->load->view("commons/footer");?>
        <script type="text/javascript" src="/assets/js/jquery-2.0.3.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/assets/js/twitter-bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap-admin-theme-change-size.js"></script>
    </body>
</html>
