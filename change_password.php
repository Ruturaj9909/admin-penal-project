<?php
require_once("inc/head.php");
?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <?php
        require_once("inc/sidebar.php ");
        ?>

        <!-- Content Start -->
        <div class="content">
            <?php
            require_once("inc/nav.php");
            ?>


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-8 ">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">Change Password </h4>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">old password</label>
                                    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div >
                                <button type="submit" class="btn btn-primary">change password</button>
                                
                            </form>
                        </div>
                    </div>

                    <!-- <div class="col-md-6 text-center">
                        <h3>This is blank page</h3>
                    </div>
                </div> -->
                </div>
                <!-- Blank End -->


                <?php
                //require_once("inc/footer.php");//
                ?>
            </div>
            <!-- Content End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>

        <?php
        require_once("inc/script.php");
        ?>

        <!-- Template Javascript -->
        <script src="theme/js/main.js"></script>
</body>

</html>