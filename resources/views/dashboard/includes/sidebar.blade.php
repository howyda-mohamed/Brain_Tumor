<div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
        <h3 class="px-3 text-light mt-5">Menu</h3>
        <nav class="navbar-dark ">
            <ul class="navbar-nav">
                <li>
                    <div class="active">
                        <a href="{{route('patient.patient_home')}}" class="nav-link px-3 my-2">
                            <span class="me-2"><i class="fa-solid fa-house"></i></span>
                            <span>Home</span>
                        </a>
                    </div>
                </li>

                <li>
                    <div>
                        <a href="{{route('patient.doctors')}}" class="nav-link px-3  py-2 my-2">
                            <span class="me-2"><i class="fa-solid fa-user-doctor"></i></span>
                            <span>Doctors</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="{{route('patient.show_mri')}}" class="nav-link px-3  py-2 my-2">
                            <span class="me-2"><i class="fa-solid fa-list-check"></i></span>
                            <span>Categories</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="{{route('patient.center')}}" class="nav-link px-3  py-2 my-2">
                            <span class="me-2"><i class="fa-solid fa-location-dot"></i></span>
                            <span>Radiology Centers</span>
                        </a>
                    </div>
                </li>

                <li>
                    <div>
                        <a href="" class="nav-link px-3  py-2 my-2">
                            <span class="me-2"><i class="fa-solid fa-gear"></i></span>
                            <span>Settings</span>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
