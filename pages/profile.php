<div align='center'>
    <i class="material-icons" style="font-size:60px;color:black">account_circle</i>
</div>
<br>
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

            <div class="card" style="background-color: black; color:white;">
                <div class="card-content text-left">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php while ($row = mysqli_fetch_array($result)) { ?>

                                <div id="center">

                                    <h1 align='center'>Your Profile</h1>

                                    <div id="contentbox">

                                        <div id="signup">
                                            <div id="signup-st">
                                                <form action="" method="POST" id="signin" id="reg">
                                                    <!-- <div id="reg-head" class="headrg">Your Profile</div> -->
                                                    <table border="0" align="center" cellpadding="2" cellspacing="0">

                                                        <tr id="lg-1">
                                                            <!-- <td class="tl-1"><div align="left" id="tb-name">Username:</div></td> -->
                                                            <td>Name:<?php echo '<h5>' . $row['name'] . '</h5>'; ?></td>
                                                        </tr>

                                                        <tr id="lg-1">
                                                            <!-- <td class="tl-1"><div align="left" id="tb-name">Email id:</div></td> -->
                                                            <td>Email id: <?php echo '<h5>' . $row['email'] . '</h5>'; ?></td>
                                                        </tr>

                                                        <tr id="lg-1">
                                                            <!-- <td class="tl-1"><div align="left" id="tb-name">Phone no:</div></td> -->
                                                            <td>Phone no: <?php echo '<h5>' . $row['phone'] . '</h5>'; ?></td>
                                                        </tr>

                                                        <tr id="lg-1">
                                                            <!-- <td class="tl-1"><div align="left" id="tb-name">Time:</div></td> -->
                                                            <td class="tl-4">Time:<?php echo '<h5>' . date("Y-m-d H:m:s A", strtotime($row['timed'])) . '</h5>'; ?></td>
                                                        </tr>

                                                    </table>

                                            </div>
                                        </div>
                                        <!-- <div id="login">
                        <div id="login-sg">
                        <div id="st"><a href="logout.php" id="st-btn">Sign Out</a></div>
                        <div id="st"><a href="deleteac.php" id="st-btn">Delete Account</a></div>
                        </div>
                        </div> -->
                                    </div>
                                </div>

                            <?php
                                // close while loop 
                            }
                            ?>



                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="col-sm-3"></div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<!-- <p>This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.This is some text to adjust the space.</p> -->
<br><br><br>
<?php } else {
            echo "<>
         alert('A valid session was not exist. Please Login to Access.');
         window.location.href='index.php';
         </>";
        } ?>