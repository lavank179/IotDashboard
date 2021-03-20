<div class="col-sm-12 LIGHT">
    <ul class="nav nav-tabs card-header-tabs" id="bologna-listL" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#g1" role="tab" aria-controls="description" aria-selected="true">Light 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#g2" role="tab" aria-controls="history" aria-selected="false">Light 2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#g3" role="tab" aria-controls="deals" aria-selected="false">Light 3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#g4" role="tab" aria-controls="deals" aria-selected="false">Light 4</a>
        </li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane" id="g1" role="tabpanel" aria-labelledby="history-tab">
            <h5> Light 1 Data of the given time period. Filteration based on the daily, monthly and yearly wise. </h5>
            <div class="filterLight1" role="alert">
                <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
            </div>
            <div class="row filterLight1">
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="From Date" type="date" id="Fdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="To Date" type="date" id="Tdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    <select class="custom-select md-form" required id="Fselect">
                        <option value="date"> Daily </option>
                        <option value="month"> Monthly </option>
                        <option value="year"> Yearly </option>
                    </select>

                </div>
            </div>
            <div>
                <div id="l1chart" style="border: blue solid 2px;"></div>
            </div>
        </div>

        <div class="tab-pane" id="g2" role="tabpanel" aria-labelledby="deals-tab">
            <h5> Light 2 Data of the given time period. Filteration based on the daily, monthly and yearly wise. </h5>
            <div class="filterLight2" role="alert">
                <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
            </div>
            <div class="row filterLight2">
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="From Date" type="date" id="Fdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="To Date" type="date" id="Tdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    <select class="custom-select md-form" required id="Fselect">
                        <option value="date"> Daily </option>
                        <option value="month"> Monthly </option>
                        <option value="year"> Yearly </option>
                    </select>

                </div>
            </div>
            <div>
                <div id="l2chart" style="border: blue solid 2px;"></div>
            </div>
        </div>

        <div class="tab-pane" id="g3" role="tabpanel" aria-labelledby="deals-tab">
            <h5> Light 3 Data of the given time period. Filteration based on the daily, monthly and yearly wise. </h5>
            <div class="filterLight3" role="alert">
                <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
            </div>
            <div class="row filterLight3">
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="From Date" type="date" id="Fdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="To Date" type="date" id="Tdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    <select class="custom-select md-form" required id="Fselect">
                        <option value="date"> Daily </option>
                        <option value="month"> Monthly </option>
                        <option value="year"> Yearly </option>
                    </select>

                </div>
            </div>
            <div>
                <div id="l3chart" style="border: blue solid 2px;"></div>
            </div>
        </div>
        <div class="tab-pane" id="g4" role="tabpanel" aria-labelledby="deals-tab">
            <h5> Light 4 Data of the given time period. Filteration based on the daily, monthly and yearly wise. </h5>
            <div class="filterLight4" role="alert">
                <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
            </div>
            <div class="row filterLight4">
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="From Date" type="date" id="Fdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="To Date" type="date" id="Tdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    <select class="custom-select md-form" required id="Fselect">
                        <option value="date"> Daily </option>
                        <option value="month"> Monthly </option>
                        <option value="year"> Yearly </option>
                    </select>

                </div>
            </div>
            <div>
                <div id="l4chart" style="border: blue solid 2px;"></div>
            </div>
        </div>
    </div>
</div>





<br>
<!----------------------------------------------------------------------------------------------------------------------------------------------->





<div class="col-sm-12 FAN">
    <ul class="nav nav-tabs card-header-tabs" id="bologna-listF" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#f1" role="tab" aria-controls="description" aria-selected="true">Fan 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#f2" role="tab" aria-controls="history" aria-selected="false">Fan 2</a>
        </li>
    </ul>

    <div class="tab-content">

        <div class="tab-pane" id="f1" role="tabpanel" aria-labelledby="history-tab">
            <h5> Fan 1 Data of the given time period. Filteration based on the daily, monthly and yearly wise. </h5>
            <div class="filterFan1" role="alert">
                <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
            </div>
            <div class="row filterFan1">
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="From Date" type="date" id="Fdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="To Date" type="date" id="Tdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    <select class="custom-select md-form" required id="Fselect">
                        <option value="date"> Daily </option>
                        <option value="month"> Monthly </option>
                        <option value="year"> Yearly </option>
                    </select>

                </div>
            </div>
            <div>
                <div id="f1chart" style="border: green solid 2px;"></div>
            </div>
        </div>

        <div class="tab-pane" id="f2" role="tabpanel" aria-labelledby="deals-tab">
            <h5> Fan 2 Data of the given time period. Filteration based on the daily, monthly and yearly wise. </h5>
            <div class="filterFan2" role="alert">
                <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
            </div>
            <div class="row filterFan2">
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="From Date" type="date" id="Fdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="md-form">
                        <input placeholder="To Date" type="date" id="Tdate" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">

                    <select class="custom-select md-form" required id="Fselect">
                        <option value="date"> Daily </option>
                        <option value="month"> Monthly </option>
                        <option value="year"> Yearly </option>
                    </select>

                </div>
            </div>
            <div>
                <div id="f2chart" style="border: green solid 2px;"></div>
            </div>
        </div>

    </div>
</div>





<br>
<!----------------------------------------------------------------------------------------------------------------------------------------------->






<div class="card">
    <div class="card-content">
        <div class="col-sm-12">
            <div>
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#t1" role="tab" aria-controls="description" aria-selected="true">Temperature Sensor </a>
                        </li>

                    </ul>
                </div>
                <div class="card-body">

                    <div class="tab-content mt-3">
                        <div class="tab-pane active" id="t1" role="tabpanel">
                            <h5>Hourly data collected for one day.</h5>
                            <div id="t1chart" style="width:100%; height: 394px;"></div>
                            <a href="https://developers.google.com/chart/" class="card-link text-danger">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<br>
<!----------------------------------------------------------------------------------------------------------------------------------------------->





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