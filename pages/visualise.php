<h5> Light 4 Data of the given time period. Filteration based on the daily, monthly and yearly wise.Filteration based on the daily, monthly and yearly wise </h5>

<div class="card">
    <div class="col-sm-12 LIGHT">
        <ul class="nav nav-tabs" id="bologna-listL" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#g1" role="tab" aria-controls="description" aria-selected="true">
                    <h6>Light 1</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#g2" role="tab" aria-controls="history" aria-selected="false">
                    <h6>Light 2</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#g3" role="tab" aria-controls="deals" aria-selected="false">
                    <h6>Light 3</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#g4" role="tab" aria-controls="deals" aria-selected="false">
                    <h6>Light 4</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#g5" role="tab" aria-controls="deals" aria-selected="false">
                    <h6>All Lights</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#g6" role="tab" aria-controls="deals" aria-selected="false">
                    <h6>Light Zones</h6>
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane" id="g1" role="tabpanel" aria-labelledby="history-tab">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterLight1', 16)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="l1chart"></div>
                </div>
            </div>

            <div class="tab-pane" id="g2" role="tabpanel" aria-labelledby="deals-tab">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterLight2', 17)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="l2chart"></div>
                </div>
            </div>

            <div class="tab-pane" id="g3" role="tabpanel" aria-labelledby="deals-tab">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterLight3', 18)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="l3chart"></div>
                </div>
            </div>
            <div class="tab-pane" id="g4" role="tabpanel" aria-labelledby="deals-tab">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterLight4', 19)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="l4chart"></div>
                </div>
            </div>

            <div class="tab-pane" id="g5" role="tabpanel" aria-labelledby="deals-tab">
                <div class="filterLightAll" role="alert">
                    <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
                </div>
                <div class="row filterLightAll">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterLightAll', 51)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="l5chart"></div>
                </div>
            </div>

            <div class="tab-pane" id="g6" role="tabpanel" aria-labelledby="deals-tab">
                <div class="filterLightZones" role="alert">
                    <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
                </div>
                <div class="row filterLightZones">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterLightZones', 60)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="l6chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>





<br>
<!----------------------------------------------------------------------------------------------------------------------------------------------->




<div class="card">
    <div class="col-sm-12 FAN">
        <ul class="nav nav-tabs" id="bologna-listF" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#f1" role="tab" aria-controls="description" aria-selected="true">
                    <h6>Fan 1</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#f2" role="tab" aria-controls="history" aria-selected="false">
                    <h6>Fan 2</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#f3" role="tab" aria-controls="history" aria-selected="false">
                    <h6>All Fans</h6>
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane" id="f1" role="tabpanel" aria-labelledby="history-tab">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterFan1', 19)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="f1chart"></div>
                </div>
            </div>

            <div class="tab-pane" id="f2" role="tabpanel" aria-labelledby="deals-tab">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterFan2', 18)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="f2chart"></div>
                </div>
            </div>

            <div class="tab-pane" id="f3" role="tabpanel" aria-labelledby="deals-tab">
                <div class="filterFanAll" role="alert">
                    <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
                </div>
                <div class="row filterFanAll">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterFanAll', 52)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="f3chart"></div>
                </div>
            </div>

        </div>
    </div>
</div>





<br>
<!----------------------------------------------------------------------------------------------------------------------------------------------->





<div class="card">
    <div class="col-sm-12 FAN">
        <ul class="nav nav-tabs" id="bologna-listS" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#T" role="tab" aria-controls="description" aria-selected="true">
                    <h6>Temperature</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#H" role="tab" aria-controls="history" aria-selected="false">
                    <h6>Humidity</h6>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Soil" role="tab" aria-controls="history" aria-selected="false">
                    <h6>Soil Moisture</h6>
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane" id="T" role="tabpanel" aria-labelledby="history-tab">
                <div class="filterSen1" role="alert">
                    <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
                </div>
                <div class="row filterSen1">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterFan1', 19)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="s1chart"></div>
                </div>
            </div>

            <div class="tab-pane" id="H" role="tabpanel" aria-labelledby="deals-tab">
                <div class="filterSen2" role="alert">
                    <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
                </div>
                <div class="row filterSen2">
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
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2">
                        <div class="md-form">
                            <button id="sidebarCollapse" class="btn btn-secondary btn-block btn-md" onclick="getCSVdata('filterFan2', 18)">
                                <i class="fad fa-download"></i> Download as CSV
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3">

                        <select class="custom-select md-form" required id="Fselect">
                            <option value="date"> Daily </option>
                            <option value="month"> Monthly </option>
                            <option value="year"> Yearly </option>
                        </select>

                    </div>
                </div>
                <div>
                    <div id="s2chart"></div>
                </div>
            </div>
            <div class="tab-pane active" id="Soil" role="tabpanel">
                <div class="filterSen3" role="alert">
                    <span class="alert alert-danger"> &nbsp;&nbsp;No data Found. please give the necessary Input. </span>
                </div>
                <div class="row filterSen3">
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
                <div id="s3chart"></div>
            </div>

        </div>
    </div>
</div>






<br>
<!----------------------------------------------------------------------------------------------------------------------------------------------->