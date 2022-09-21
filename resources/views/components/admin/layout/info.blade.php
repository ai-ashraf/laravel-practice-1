<div class="container-fluid px-4">
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                <?php

                    $sql="SELECT * FROM package ";
                    $rs = mysqli_Query($conn,$sql);
                    $count = mysqli_num_rows($rs);
                ?>
                    <h3 class="fs-2"><?php echo $count; ?></h3>
                    <p class="fs-5">Packages</p>
                </div>
                <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                <?php

                    $sql="SELECT * FROM booking ";
                    $rs = mysqli_Query($conn,$sql);
                    $booking_count = mysqli_num_rows($rs);
                ?>
                    <h3 class="fs-2"><?php echo $booking_count; ?></h3>
                    <p class="fs-5">Booking</p>
                </div>
                <i
                    class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                <?php

                    $sql="SELECT * FROM user ";
                    $rs = mysqli_Query($conn,$sql);
                    $user_count = mysqli_num_rows($rs);
                ?>
                    <h3 class="fs-2"><?php echo $user_count; ?></h3>
                    <p class="fs-5">Users</p>
                </div>
                <i class="fa-solid fa-user-group fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                <?php

                    $sql="SELECT * FROM review ";
                    $rs = mysqli_Query($conn,$sql);
                    $review_count = mysqli_num_rows($rs);
                ?>
                    <h3 class="fs-2"><?php echo $review_count; ?></h3>
                    <p class="fs-5">Reviews</p>
                </div>
                <i class="fa-solid fa-star fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>

        </div>
    </div>
