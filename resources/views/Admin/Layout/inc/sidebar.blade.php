<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>


                <li>
                    <a href="{{route('adminHome')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-home">Home</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user"></i>
                        <span key="t-dashboards">Admins</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admins.index')}}" key="t-admins">Admins List</a></li>
                        <li><a href="{{route('admins.create')}}" class="create-model" key="t-default">add admin</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-offer"></i>
                        <span key="t-dashboards">Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('services.index')}}" key="t-admins">Services List</a></li>
                        <li><a href="{{route('services.create')}}" class="create-model" key="t-default">add service</a></li>
                    </ul>
                </li>

{{--                <li>--}}
{{--                    <a href="{{route('services.index')}}" class="waves-effect">--}}
{{--                        <i class="bx bxs-offer"></i>--}}
{{--                        <span key="t-Service">Services</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li>
                    <a href="{{route('Qualifications.index')}}" class="waves-effect">
                        <i class="bx bxs-graduation"></i>
                        <span key="t-Qualifications">Qualifications</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('contacts.index')}}" class="waves-effect">
                        <i class="bx bxs-conversation"></i>
                        <span key="t-contact">Contact us</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
