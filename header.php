<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Elevate Forklift & Access</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"/>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
    <?php $currentPage = basename($_SERVER['PHP_SELF']);
    if ($currentPage != 'index.php') {
        echo '<link rel="stylesheet" href="assets/css/forklifts.css">';
    }
    ?>
<!-- Responsive CSS -->
  <link rel="stylesheet" href="assets/css/responsive.css" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="./" class="logo d-flex align-items-center me-auto">
                <img src="assets/images/logo.png" alt="">
            </a>
            <div class="right_menu">
                <div class="dark_btn">
                    <a class="btn-getstarted" href="#exampleModal"  data-bs-toggle="modal"><i class="fa-brands fa-wpforms"></i><span>Get A Quote</span></a>
                    <a class="btn-getstarted-line" href="#"><i class="fa-solid fa-phone"></i><span>+13 4444
                            5562</span></a>
                </div>
                <nav id="navmenu" class="navmenu">
                    <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

                        <ul>
                            <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
                            <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">About us</a></li>

                            <?php
                            // Check if the current page is one of the dropdown children
                            $forkliftPages = ['new-forklifts.php', 'used-forklifts.php'];
                            $isForkliftPage = in_array($currentPage, $forkliftPages);
                            ?>

                            <li class="dropdown">
                                <a href="#" class="<?= $isForkliftPage ? 'active' : '' ?>">
                                    <span>Forklifts for Sale</span>
                                    <i class="fa-solid fa-chevron-down toggle-dropdown"></i>
                                </a>
                                <ul>
                                    <li><a href="new-forklifts.php" class="<?= ($currentPage == 'new-forklifts.php') ? 'active' : '' ?>">New Forklifts</a></li>
                                    <li><a href="used-forklifts.php" class="<?= ($currentPage == 'used-forklifts.php') ? 'active' : '' ?>">Used Forklifts</a></li>
                                </ul>
                            </li>

                            <li><a href="hire-forklifts.php" class="<?= ($currentPage == 'hire.php') ? 'active' : '' ?>">Hire Forklift</a></li>
                            <li><a href="parts.php" class="<?= ($currentPage == 'parts.php') ? 'active' : '' ?>">Forklift Parts and Services</a></li>
                            <li><a href="blogs.php" class="<?= ($currentPage == 'service.php') ? 'active' : '' ?>">Blogs</a></li>
                            <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact us</a></li>
                        </ul>

                    <i class="mobile-nav-toggle d-xl-none fa-solid fa-bars">
                    </i>
                </nav>
            </div>
        </div>
    </header>