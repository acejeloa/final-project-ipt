<nav class="d-flex align-items-center justify-content-around bg-primary">

    <h2 class="p-2 text-dark" style="font-size:23px; font-weight:400;">IPT Mini Capstone Project</h2>

    <div class="ctext-white d-flex align-items-center justify-content-around" id="navbarSupportedContent">
        <ul class=" d-flex align-items-center justify-content-around links" style="list-style: none;">
            <li class="nav-item links">
                <a class="nav-link text-dark {{ 'dashboard' == request()->path() ? 'active' : '' }}"
                    href="{{ '/dashboard' }}">dashboard</a>
            </li>
            <li class="nav-item links">
                <a class="nav-link text-dark {{ 'recent-post' == request()->path() ? 'active' : '' }}"
                    href="{{ '/recent-post' }}">Post</a>
            </li>

            {{-- @role('admin')
                <span class="nav-line"></span>

                <span class="nav-line"></span>

                <span class="nav-line"></span>

                <div class="dropdown">
                    <a class="btn dropdown-toggle text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" id="select3">

                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link text-dark {{ 'log' == request()->path() ? 'active' : '' }}"
                                href="{{ '/log' }}">Logs</a>
                        </li>
                        <span class="nav-line"></span>

                        <span class="nav-line"></span>

                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link text-dark {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                href="{{ route('admin.users.index') }}">Users</a>
                        </li>
                        <li class="nav-item">
                            <a style="margin-left: 20px"
                                class="nav-link text-dark {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                href="{{ '/my-post' }}">My Posts</a>
                        </li>

                    </div>

                </div>
            @endrole --}}
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ '/logout' }}">Logout</a>
            </li>
    </div>
</nav>

<style>
    .links {
        margin-left: 10px;
        margin-right: 10px;
    }

    #profile-name a {
        text-decoration: none;
        color: rgb(225, 222, 222);
    }

    #profile-name a:hover {
        background-color: rgba(255, 255, 255, 0);

    }

    .navbar-nav a {
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 5px;
        width: 120px;
        margin: 5px;
        text-align: center;
    }

    #select {
        color: dimgray;
    }


    #select2 li:hover {
        background-color: rgb(17, 162, 172);
    }
</style>
