<div class="row">
    <div class="col-lg-3">
        <div class="card text-center hoverable" id="lig" style="height: 420px;">
            <div class="card-header">Lights</div>
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
        <div class="card text-center hoverable" id="fans" style="height: 420px;">
            <div class="card-header">Fans</div>
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
        <div class="card hoverable">
            <div class="card-header">Light-Fan comparison</div>
            <div class="card-body">
                <div id="chartA1" style="width: 100%; height: 100px;">

                </div>
            </div>

        </div>
        <br>

    </div>



    <div class="col-lg-3 text-center">
        <div class="card hoverable">
            <p class="live"><i class="fa fa-circle fa-xs text-danger Blink"></i> Live </p>
            <div id="chartdiv1" style="width: 100%; height: 23vh;">

            </div>
            <h6 id="gc1"></h6>
        </div>
        <br>
        <div class="card hoverable">
            <p class="live"><i class="fa fa-circle fa-xs text-danger Blink"></i> Live </p>
            <div id="chartdiv2" style="width: 100%; height: 23vh;">
            </div>
            <h6 id="gc2"></h6>

        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-3 text-center">
        <div class="card hoverable">
            <p class="live"><i class="fa fa-circle fa-xs text-danger Blink"></i> Live </p>
            <div id="chartdiv3" style="width: 100%; height: 24vh;">
            </div>
            <h6 id="gc3"></h6>
        </div>
        <br>
        <div class="card hoverable">
            <p class="live"><i class="fa fa-circle fa-xs text-danger Blink"></i> Live </p>
            <div id="chartdiv4" style="width: 100%; height: 24vh;">

            </div>
            <h6 id="gc4"></h6>
        </div>
        <br>
    </div>
    <div class="col-lg-4">
        <div class="card text-center hoverable">
            <div class="card-header">Temperature & humidity</div>
            <div class="card-body">
                <div id="chartA2" style="width: 100%; height: 47.5vh;">
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="col-lg-5">
        <div class="card text-center hoverable">
            <div class="card-header">Weather Data</div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Temperature</th>
                            <th scope="col">Humidity</th>
                            <th scope="col">Moisture</th>
                            <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include('./controllers/db.php');
                        $sql = "SELECT * From sensors ORDER BY timed DESC LIMIT 5";
                        $result = mysqli_query($conn, $sql);
                        $i = 0;
                        $j = 0;
                        while ($row = mysqli_fetch_array($result)) { ?>
                            <tr>
                                <td><?php echo $row['temperature']; ?></td>
                                <td><?php echo $row['humidity']; ?></td>
                                <td><?php echo $row['moisture']; ?></td>
                                <td><?php echo $row['timed']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
        <br>
    </div>
</div>


<br><br>
<!-- Default switch -->
<div class="btn bg-light text-center hoverable">
    <div class="custom-control custom-switch">
        <input class="custom-control-input" type="checkbox" id="camswitch" />
        <label class="custom-control-label" for="camswitch"> Surveillance Camera/CCTV </label>
    </div>
</div>
<br><br>
<div id="camera" class=""><iframe class="card hoverable" width="100%" height="600" src="http://192.168.0.102:4747"></iframe></div>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

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