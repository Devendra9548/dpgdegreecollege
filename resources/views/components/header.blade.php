<!-- ============ TOP BAR ============ -->
<div class="dpg-topbar">
    <div class="container-xxl">
        <div class="d-flex align-items-center justify-content-between py-2 gap-3">
            <a href="tel:+917065046229"><i class="fa-solid fa-phone me-1"
                    style="color:var(--dpg-yellow)"></i>+91-70650-46229</a>

            <div class="d-flex align-items-center gap-3">
                <!-- Bade screen (1200px+) par top bar me links -->
                <ul class="top-links list-unstyled d-none d-xl-flex flex-wrap mb-0">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Information Corner</a></li>
                    <li><a href="#">ERP Login</a></li>
                    <li><a href="#">E-Learning</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">IGNOU Study Center</a></li>
                    <li><a href="#">ITEP</a></li>
                    <li><a href="#">Examination</a></li>
                    <li><a href="#">Placement</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>

                <!-- Social icons: har screen par dikhte hain -->
                <div class="social d-flex gap-2">
                    <a href="#" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============ MAIN HEADER ============ -->
<header class="dpg-header sticky-top">
    <div class="container-xxl">
        <nav class="navbar navbar-expand-xl py-2">

            <!-- Logo + vertical line + address -->
            <a class="navbar-brand dpg-brand d-flex align-items-center gap-3 me-3" href="#"
                aria-label="DPG Universe - Sector 34 Gurugram">
                <img src="/assets/logo.webp" alt="DPG Universe - NAAC Accredited College">
                <span class="divider"></span>
                <span class="address">
                    <span class="l1">Sector -34</span>
                    <span class="l2">Gurugram</span>
                </span>
            </a>

            <!-- Apply Now + search + hamburger -->
            <div class="d-flex align-items-center gap-2 ms-auto order-xl-last">
                <a href="#" class="btn btn-dpg">Apply Now</a>
                <a href="#" class="btn btn-search d-none d-sm-inline-block" aria-label="Search"><i
                        class="fa-solid fa-magnifying-glass"></i></a>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#dpgNav" aria-controls="dpgNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars fs-3" style="color:var(--dpg-teal-dark)"></i>
                </button>
            </div>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-xl-center dpg-nav" id="dpgNav">
                <ul class="navbar-nav align-items-xl-center">
                    <!-- Submenu wala item (copy karke aur items me bhi laga sakte ho) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">About Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">About DPG</a></li>
                            <li><a class="dropdown-item" href="#">Vision &amp; Mission</a></li>
                            <li><a class="dropdown-item" href="#">Governing Body</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">Admission</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Academics</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Departments</a></li>
                            <li><a class="dropdown-item" href="#">Courses Offered</a></li>
                            <li><a class="dropdown-item" href="#">Academic Calendar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Infrastructure</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Campus Life</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">IQAC</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Alumni</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Research</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">NAAC</a></li>
                </ul>

                <!-- Quick Links: sirf 1200px se chhoti screen par (top bar ke links yahan aate hain) -->
                <div class="dpg-nav__quick d-xl-none">
                    <p class="dpg-nav__quick-title">Quick Links</p>
                    <ul class="list-unstyled row row-cols-2 g-2 mb-0">
                        <li class="col"><a href="#">Home</a></li>
                        <li class="col"><a href="#">Information Corner</a></li>
                        <li class="col"><a href="#">ERP Login</a></li>
                        <li class="col"><a href="#">E-Learning</a></li>
                        <li class="col"><a href="#">Gallery</a></li>
                        <li class="col"><a href="#">IGNOU Study Center</a></li>
                        <li class="col"><a href="#">ITEP</a></li>
                        <li class="col"><a href="#">Examination</a></li>
                        <li class="col"><a href="#">Placement</a></li>
                        <li class="col"><a href="#">Feedback</a></li>
                        <li class="col"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>

        </nav>
    </div>
</header>