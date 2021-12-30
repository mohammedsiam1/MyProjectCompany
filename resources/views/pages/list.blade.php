<div id="wrapper2">

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="adjust-nav">



            <span class="logout-spn">
                <a href="#" style="color:#fff; ">التحكم </a>
            </span>



        </div>
    </div>



    <nav class="navbar-default navbar-side" role="navigation">
        <div style="border-radius: 5%;" class="myul">
            <div class="sidebar-collapse">
                <ul style="border-radius:5%;" class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="#"><i style="border-radius: 5%;" class="fa fa-desktop "></i> لوحة التحكم </a>
                    </li>

                    @foreach ($alllinks['data'] as $linke)
                        <li class=" nav-item start">
                            <a href="" id_link={{ $linke->id }} class="linkClickNow nav-link nav-toggle">
                                <span class="title">{{ $linke->linksName }}</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="sub-menu" style="text-align: center;">
                                <div class="resultlink" style="text-align: center;">


                                </div>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>




    <div class="row">
        <div class="col-lg-12 ">
            <div style="margin-left: 150px;margin-right: 350px;align-content: center;" class="alert alert-info">
                <strong style="align-content: center"> اهلا بك في لوحة التحكم الخاصة بك </strong> اليس لديك مهمة اليوم ؟
            </div>

        </div>
    </div>
    @yield('contant')
    @include('pages.CallLinks')
</div>
