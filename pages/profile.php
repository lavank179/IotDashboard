<div class="card">
    <div class="card-content text-center">
        <h3> This is profile section...</h3>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <?php

        use function PHPSTORM_META\type;

        if (isset($_SESSION['email'])) { ?>
            <?php // Query if email exists in db
            include('./controllers/db.php');
            $mail = $_SESSION['email'];
            $sql = "SELECT * From users WHERE email = '{$mail}' ";
            $result = mysqli_query($conn, $sql); ?>
            <div class="card">
                <div class="card-content text-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First</th>
                                            <th scope="col">Last</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <h5>Name :</h5>
                                            </td>
                                            <td> <?php echo '<h5>' . $row['name'] . '</h5>'; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <h5>Email :</h5>
                                            </td>
                                            <td> <?php echo '<h5>' . $row['email'] . '</h5>'; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <h5>Phone :</h5>
                                            </td>
                                            <td> <?php echo '<h5>' . $row['phone'] . '</h5>'; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>
                                                <h5>Time :</h5>
                                            </td>
                                            <td> <?php echo '<h5>' . date("Y-m-d H:m:s A", strtotime($row['timed'])) . '</h5>'; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-sm-3"></div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<p>This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.</p>
<br><br><br>
<?php } else {
            echo "<>
         alert('A valid session was not exist. Please Login to Access.');
         window.location.href='index.php';
         </>";
        } ?>