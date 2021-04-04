<p>This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.</p>
<div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3">
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
        <p>This is some text to adjust the space.</p>
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3">
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
        <p>This is some text to adjust the space.</p>
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3 text-center">
        <div class="card">
            <div id="chartA1" style="width: 100%; height: 394px;">

            </div>
            <h6>Units: 200 | Lights: 3</h6>
        </div>
        <br>

    </div>



    <div class="col-sm-3 col-md-3 col-lg-3 text-center">
        <div class="card">
            <div id="chartdiv1" style="width: 100%; height: 23vh;">

            </div>
            <h6>Units: 200 | Lights: 3</h6>
        </div>
        <br>
        <div class="card">
            <div id="chartdiv2" style="width: 100%; height: 23vh;">

            </div>
            <h6>Units: 200 | Lights: 2</h6>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3 text-center">

        <div id="chartdiv3" style="border: 2px black solid; width: 100%; height: 30vh;">

        </div>
        <p>Units: 150 | Fans: 1</p>

        <br>
        <div id="chartdiv4" style="border: 2px black solid; width: 100%; height: 30vh;">

        </div>
        <p>Temp: 30&#8451; / 86&#8457;</p>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="card">
            <div id="chartA2" style="width: 100%; height: 24vh;">

            </div>
            <h6>Units: 200 | Lights: 2</h6>
        </div>
    </div>
</div>
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