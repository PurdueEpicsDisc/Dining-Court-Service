<?php $title = "Purdue Online Dining Guide"; require "header.php"; ?>
    <div class="container-fluid">
        <div class="row" id="progress-banner">
            <div id="banner-container">
                <div class="row">
                    <div class="col-sm-4" id="earhartContainerWrapper">
                        <div id="earhartContainer"></div>
                    </div>
                    <div class="col-sm-4" id="windsorContainerWrapper">
                        <div id="windsorContainer"></div>
                    </div>
                    <div class="col-sm-4" id="wileyContainerWrapper">
                        <div id="wileyContainer"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-2" id="fordContainerWrapper">
                        <div id="fordContainer"></div>
                    </div>
                    <div class="col-sm-4" id="hillenbrandContainerWrapper">
                        <div id="hillenbrandContainer"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="chart-container">
            <h1>History</h1>
            <ul class="nav nav-pills" role="tablist">
                <li role="presentation" class="active"><a href="#" aria-controls="earhart" role="tab" data-toggle="tab">Earhart</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Windsor</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Wiley</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Ford</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Hillenbrand</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">E</div>
                <div role="tabpanel" class="tab-pane" id="profile">W</div>
                <div role="tabpanel" class="tab-pane" id="messages">I</div>
                <div role="tabpanel" class="tab-pane" id="settings">F</div>
                <div role="tabpanel" class="tab-pane" id="settings">H</div>
            </div>
        </div>
    </div>
<?php $jslib = "<script src=\"js/radialIndicator.js\"></script><script src=\"js/indicators.js\"></script>\n"; require "footer.php"; ?>
    