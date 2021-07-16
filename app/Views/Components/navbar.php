<nav class="navbar navbar-custom navbar-expand-lg navbar-dark">

    <a class="navbar-brand " href="/">
        <img src="/images/logo.png" alt="" srcset="" style="height:6vh;" class="mr-2">
        SCHOLARS PORTAL

    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto mr-5">
            <li class="nav-item ">
                <a class="nav-link nav-btn mr-4" href="/">Home</a>
            </li>
            <?php if (session()->user_type == "user") : ?>
                <li class="nav-item">
                    <a class="nav-link nav-btn mr-4" href="/user/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-btn mr-4" href="/login/logout">Logout</a>
                </li>
            <?php elseif (session()->user_type == "admin") : ?>
                <li class="nav-item">
                    <a class="nav-link nav-btn mr-4" href="/admin/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-btn mr-4" href="/login/logout">Logout</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link nav-btn mr-4" href="login">Login</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>