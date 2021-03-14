<div class="card">
    <div class="card-content">
        <div class="col-sm-12">
            <div>
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#g1" role="tab" aria-controls="description" aria-selected="true">LED 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#g2" role="tab" aria-controls="history" aria-selected="false">LED 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#g3" role="tab" aria-controls="deals" aria-selected="false">LED 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#g4" role="tab" aria-controls="deals" aria-selected="false">LED 4</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Piezoelectric Power Generation Data - Google Charts - live!Piezoelectric Power Generation Data - Google Charts - live!</h4>

                    <div class="tab-content mt-3">

                        <div class="tab-pane" id="g1" role="tabpanel" aria-labelledby="history-tab">
                            <p class="card-text">LED 1 Data of the given time period:</p>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="md-form">
                                        <input placeholder="From Date" type="date" id="Fdate" class="form-control datepicker filterLight1">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="md-form">
                                        <input placeholder="To Date" type="date" id="Tdate" class="form-control datepicker filterLight1">
                                    </div>
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">

                                    <select class="custom-select md-form filterLight1" required id="Fselect">
                                        <option value="1"> Daily </option>
                                        <option value="2"> Monthly </option>
                                        <option value="3"> Yearly </option>
                                    </select>

                                </div>
                            </div>
                            <div id="line_chart1" style="width:100%; height: 394px;"></div>
                            <a></a>
                        </div>

                        <div class="tab-pane" id="g2" role="tabpanel" aria-labelledby="deals-tab">
                            <p class="card-text">LED 2 Data of the given time period:</p>
                            <div id="line_chart2" style="width:100%; height: 394px;"></div>
                        </div>

                        <div class="tab-pane" id="g3" role="tabpanel" aria-labelledby="deals-tab">
                            <p class="card-text">LED 3 Data of the given time period:</p>
                            <div id="line_chart3" style="width:100%; height: 394px;"></div>
                        </div>
                        <div class="tab-pane" id="g4" role="tabpanel" aria-labelledby="deals-tab">
                            <p class="card-text">LED 4 Data of the given time period:</p>
                            <div id="line_chart4" style="width:100%; height: 394px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>

<div class="card">
    <div class="card-content">
        <div class="col-sm-12">
            <div>
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                        <form>
                            <input type="date" name="from_date">
                            <p>From</p><input type="date" name="to_date">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                        <li class="nav-item">
                            <a class="nav-link active" href="#f1" role="tab" aria-controls="description" aria-selected="true">FAN 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#f2" role="tab" aria-controls="history" aria-selected="false">FAN 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#f3" role="tab" aria-controls="deals" aria-selected="false">FAN 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#f4" role="tab" aria-controls="deals" aria-selected="false">FAN 4</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Piezoelectric Power Generation Data - Google Charts - live!</h4>

                    <div class="tab-content mt-3">
                        <div class="tab-pane" id="f1" role="tabpanel" aria-labelledby="history-tab">
                            <p class="card-text">FAN 1 Data of the given time period:</p>
                            <div id="line_chart1" style="width:100%; height: 394px;"></div>
                            <a></a>
                        </div>

                        <div class="tab-pane" id="f2" role="tabpanel" aria-labelledby="deals-tab">
                            <p class="card-text">FAN 2 Data of the given time period:</p>
                            <div id="line_chart2" style="width:100%; height: 394px;"></div>
                        </div>

                        <div class="tab-pane" id="f3" role="tabpanel" aria-labelledby="deals-tab">
                            <p class="card-text">FAN 3 Data of the given time period:</p>
                            <div id="line_chart3" style="width:100%; height: 394px;"></div>
                        </div>
                        <div class="tab-pane" id="f4" role="tabpanel" aria-labelledby="deals-tab">
                            <p class="card-text">FAN 4 Data of the given time period:</p>
                            <div id="line_chart4" style="width:100%; height: 394px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>

    <div class="card">
        <div class="card-content">
            <div class="col-sm-12">
                <div>
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                            <form>
                                <input type="date" name="from_date">
                                <p>From</p><input type="date" name="to_date">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                            <li class="nav-item">
                                <a class="nav-link active" href="#g1" role="tab" aria-controls="description" aria-selected="true">Temperature Sensor</a>
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
    </div> <br>

    <div class="card">
        <div class="card-content">
            <div class="col-sm-12">
                <div>
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#g1" role="tab" aria-controls="description" aria-selected="true">Sensor</a>
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