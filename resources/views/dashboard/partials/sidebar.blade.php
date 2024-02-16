<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>

            @role('super admin')
            <li class="nav-heading">Super Admin</li>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Manajement Admin</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/manajement-admin">
                            <i class="bi bi-circle"></i><span>Data Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Create Admin</span>
                        </a>
                    </li>
                </ul>


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Pengaturan situs</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/settings-situs">
                            <i class="bi bi-circle"></i><span>Setting Situs</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Manajement Database</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/manajement-database-backup">
                            <i class="bi bi-circle"></i><span>Backup</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/manajement-database-import">
                            <i class="bi bi-circle"></i><span>Impor</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard/manajement-database-eksport">
                            <i class="bi bi-circle"></i><span>Eksport</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#role-user" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Manajement Roles User</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="role-user" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/role-user">
                            <i class="bi bi-circle"></i><span>Data Roles User</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->
        @endrole



        @role(['admin', 'super admin'])
            {{-- admin --}}
            <li class="nav-heading">Admin</li>
            {{-- Manejement content --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Manajement Content</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/manajement-content">
                            <i class="bi bi-circle"></i><span>data content</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- end Manajement content --}}


            {{-- pengelolaan pengguna --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Pengelolaan Pengguna</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Chart.js</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>ApexCharts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>ECharts</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->
            {{-- end pengelolaan pengguna --}}

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->
        @endrole
    </ul>

</aside>
