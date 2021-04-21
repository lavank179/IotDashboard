<div class="row">
    <div class="col-lg-3">
        <div class="card text-center" id="lig" style="height: 420px;">
            <div class="card-header" style="background: white;">
                <h3 style="color: #3266FF;"> Lights&nbsp; </h3>

            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tbody id="devicesCollectionLight">
                    </tbody>
                </table>
                <button class="btn btn-primary btn-block btn-md" type="button" data-toggle="modal" data-target="#exampleModal">
                    <i class="far fa-plus-square fa-2x"></i>
                </button>
            </div>
        </div>
        <br>
    </div>

    <div class="col-lg-3">
        <div class="card text-center" id="fans" style="height: 420px;">
            <div class="card-header" style="background: white;">
                <h3 style="color: #3266FF;"> Fans&nbsp; </h3>

            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tbody id="devicesCollectionFan">
                    </tbody>
                </table>
                <button class="btn btn-primary btn-block btn-md" type="button" data-toggle="modal" data-target="#exampleModal">
                    <i class="far fa-plus-square fa-2x"></i>
                </button>

            </div>
        </div>
        <br>
    </div>

    <div class="col-lg-3 text-center">
        <div class="card">
            <div id="chartA1" style="width: 100%; height: 420px;">

            </div>
        </div>
        <br>

    </div>



    <div class="col-lg-3 text-center">
        <div class="card">
            <p class="live"><i class="fa fa-circle fa-xs text-danger Blink"></i> Live </p>
            <divLive id="chartdiv1" style="width: 100%; height: 23vh;">

            </divLive>
            <h6 id="gc1"></h6>
        </div>
        <br>
        <div class="card">
            <p class="live"><i class="fa fa-circle fa-xs text-danger Blink"></i> Live </p>
            <div id="chartdiv3" style="width: 100%; height: 23vh;">
            </div>
            <h6 id="gc2"></h6>

        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-3 text-center">
        <div class="card">
            <p class="live"><i class="fa fa-circle fa-xs text-danger Blink"></i> Live </p>
            <div id="chartdiv2" style="width: 100%; height: 24vh;">
            </div>
            <h6>Units: 200 | Lights: 2</h6>
        </div>
        <br>
        <div class="card">
            <p class="live"><i class="fa fa-circle fa-xs text-danger Blink"></i> Live </p>
            <div id="chartdiv4" style="width: 100%; height: 24vh;">

            </div>
            <h6>Temp: 30&#8451; / 86&#8457;</h6>
        </div>
        <br>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div id="chartA2" style="width: 100%; height: 60.8vh;">
            </div>
        </div>
        <br>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
    </div>
</div>


<br><br>
<div class="card">
    <!-- <iframe width="720" height="480" src="http://192.168.0.102:8080/videofeed?Username=lavan1&Password=8072097287"></iframe> -->
    <iframe width="100%" height="600" src="http://192.168.0.102:4747"></iframe>
</div>
<br><br><br>
<p>This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.</p>
<br><br><br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Add a Device </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" style="border: none; background: transparent;"><i class="fas fa-times"></i></button>
            </div>
            <div class="modal-body">
                <!-- Name -->
                <div class="md-form mt-3">
                    <input type="text" id="form-Dname" class="form-control" name="name" placeholder="for ex. Light1 or Fan1">
                    <label for="form-firstname">Name</label>
                </div>
                <!-- Last-Name -->
                <div class="md-form">
                    <input type="text" id="form-Did" class="form-control" name="ID" placeholder="for ex. 111 or 112">
                    <label for="form-lastname"> ID </label>
                </div>
                <!-- Last-Name -->
                <div class="md-form">
                    <label> Category </label><br>
                    <select class="custom-select md-form" required id="CatSelect">
                        <option value="light"> Light </option>
                        <option value="fan"> Fan </option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" id="subAdd">Save changes</button>
            </div>
        </div>
    </div>
</div>