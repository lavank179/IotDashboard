<div class="card" style="background: transparent;">
    <div class="card-content">
        <div class="card-title" style="text-align: center;">
            <h2>IoT Dashboard</h2>

        </div>
    </div>







    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card text-center py-5" style="background: transparent;">
                <table class="table table-bordered">


                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">
                                <h3> Lights & Fans </h3>
                            </th>

                            <th scope="col">

                                <!-- Button trigger modal -->
                                <a data-toggle="modal" data-target="#exampleModal">
                                    <i class="far fa-plus-square fa-2x"></i>
                                </a>

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

                                <!-- Button trigger modal
                                <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal" style="background: transparent;">
                                    </button> -->


                            </th>
                        </tr>
                    </thead>
                    <tbody id="devicesCollection">
                    </tbody>
                </table>

            </div>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-content">
                    <div id="chart1">
                    </div>
                </div>
            </div>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-content">
                    <div id="chart2">
                    </div>
                </div>
            </div>
            <p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
        </div>


    </div>

</div>