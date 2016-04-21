<?php $title = "Purdue Online Dining Guide"; require "header.php";
    include_once("calcap.php");
?>
    <div class="banner" id="home-banner">
        <div class="container">
            <div class="col-sm-offset-1 col-sm-10">
                <h1>Purdue Online Dining Guide</h1>
                <p class="description">Below you can see how busy a dining court is. Click or tap on the location for more statistics and information.</p>
            </div>
        </div>
        <p class="photo-credit">Dave Umberger / Purdue News Service</p>
    </div>
    <div class="main-content">
        <div class="container charts">
            <a href="#" data-toggle="modal" data-target="#stat-modal">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-body chart-wrapper" id="earhart-wrapper">
                            <div class="chart-container" id="earhart-container"></div>
                            <img src="images/arrow-up.png" />
                            <div class="chart-description">
                                <h3>Earhart</h3>
                                <p><?php echo $earhartcap?></p>
                            </div>
                        </div>
                    </div>
            </div>
            </a>
            <a href="#">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-body chart-wrapper" id="windsor-wrapper">
                            <div class="chart-container" id="windsor-container"></div>
                            <img src="images/idle-sign.png" />
                            <div class="chart-description">
                                <h3>Windsor</h3>
                                <p>Capacity: 0%</p>
                            </div>
                        </div>
                    </div>
            </div>
            </a>
            <a href="#">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-body chart-wrapper" id="wiley-wrapper">
                            <div class="chart-container" id="wiley-container"></div>
                            <img src="images/idle-sign.png" />
                            <div class="chart-description">
                                <h3>Wiley</h3>
                                <p>Capacity: 0%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-body chart-wrapper" id="ford-wrapper">
                            <div class="chart-container" id="ford-container"></div>
                            <img src="images/idle-sign.png" />
                            <div class="chart-description">
                                <h3>Ford</h3>
                                <p>Capacity: 0%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-body chart-wrapper" id="hillenbrand-wrapper">
                            <div class="chart-container" id="hillenbrand-container"></div>
                            <img src="images/idle-sign.png" />
                            <div class="chart-description">
                                <h3>Hillenbrand</h3>
                                <p>Capacity: 0%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="modal fade" id="stat-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 style="text-align: center;">Earhart Trends</h3>
                    </div>
                    <div class="modal-body" style="text-align: center;">
                        <div id="earhart-trend">
                          <div style="padding-bottom: 50px;">
                            <h4>Activity Level</h4>
                            Low <img src="images/legend.png" width="155px" height="45px" style="display: inline-block"/> High
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$jslib = "<script src=\"js/radialIndicator.js\"></script>
            <script src=\"js/indicators.js\"></script>
            <script src=\"js/trendchart.js\"></script>\n";
            require "footer.php";
 ?>
