<div class="card">
    <div class="card-content">
        <div class="col-sm-12">
            <div>
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#g1" role="tab" aria-controls="description" aria-selected="true">Hourly</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#g2" role="tab" aria-controls="history" aria-selected="false">Daily</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#g3" role="tab" aria-controls="deals" aria-selected="false">Monthly</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#g4" role="tab" aria-controls="deals" aria-selected="false">Yearly</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Piezoelectric Power Generation Data - Google Charts - live!</h4>

                    <div class="tab-content mt-3">
                        <div class="tab-pane active" id="g1" role="tabpanel">
                            <p class="card-text">Hourly data collected for one day.</p>
                            <div id="line_chart1" style="width:100%; height: 394px;"></div>
                            <a href="https://developers.google.com/chart/" class="card-link text-danger">Read more</a>
                        </div>

                        <div class="tab-pane" id="g2" role="tabpanel" aria-labelledby="history-tab">
                            <p class="card-text">Daily data collected for one month.</p>
                            <div id="line_chart2" style="width:100%; height: 394px;"></div>
                        </div>

                        <div class="tab-pane" id="g3" role="tabpanel" aria-labelledby="deals-tab">
                            <p class="card-text">Monthly data collected for one year.</p>
                            <div id="line_chart3" style="width:100%; height: 394px;"></div>
                        </div>

                        <div class="tab-pane" id="g4" role="tabpanel" aria-labelledby="deals-tab">
                            <p class="card-text">Yearly data collected in all time.</p>
                            <div id="line_chart4" style="width:100%; height: 394px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>