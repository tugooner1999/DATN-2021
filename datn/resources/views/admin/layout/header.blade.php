<base href="{{asset('')}}">
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="index.html"><b>
                    <img src="plugins/images/admin-logo.png" alt="home" class="dark-logo" />
                    <!--This is light logo icon--><img src="{{asset('assets/admin/plugins/images/admin-logo-dark.png')}}" alt="home"
                        class="light-logo" />
                </b>
                <span class="hidden-xs">
                    <img src="plugins/images/admin-text.png" alt="home" class="dark-logo" />
                    <!--This is light logo text--><img src="{{asset('assets/admin/plugins/images/admin-text-dark.png')}}" alt="home"
                        class="light-logo" />
                </span> </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                    <input class="form-control form-control-navbar" type="search" id="search" placeholder="Search" aria-label="Search"> <a href=""><i
                            class="fa fa-search"></i></a>
                </form>
            </li>
            <li>
                <a class="profile-pic" href="{{route('admin.profile')}}"> <img src="{{asset('assets/admin/plugins/images/users/varun.jpg')}}" alt="user-img"
                        width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
            </li>
        </ul>
    </div>
</nav>