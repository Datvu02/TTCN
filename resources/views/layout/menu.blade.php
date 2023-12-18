<!-- left sidebar -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Quản lý</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column" style="overflow-y: auto;">
                    <li class="nav-divider text-center">
                        Menu
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/chucvu/danhsach') ? 'active':null}}"
                            href="{{url('private/chucvu/danhsach')}}">Danh sách chức vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/nhanvien/danhsach') ? 'active':null}} "
                            href="{{url('private/nhanvien/danhsach')}}">Danh sách nhân viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/kyluat/danhsach') ? 'active':null}}"
                            href="{{url('private/kyluat/danhsach')}}">Danh sách nhân viên kỷ luật</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/thuong/danhsach') ? 'active':null}}"
                            href="{{url('private/thuong/danhsach')}}">Danh sách nhân viên khen thưởng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/loaiykien/danhsach') ? 'active':null}}"
                            href="{{url('private/loaiykien/danhsach')}}">Danh sách loại ý kiến</a>
                    </li>
                    <li class="nav-item"><a class="nav-link {{Request::is('private/ykien/danhsach') ? 'active':null}}"
                            href="{{url('private/ykien/danhsach')}}"> Danh sách ý kiến </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Hồ
                            sơ nhân viên</a>
                        <div id="submenu-3"
                            class="collapse submenu {{Request::is('private/laphoso')||Request::is('private/thongtincanhan')||Request::is('private/'.Auth::user()->id_nhanvien.'/hopdong')? 'show':null}}"
                            style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{Request::is('private/laphoso') ? 'active':null}}"
                                        href="{{url('private/laphoso')}}">Lập hồ sơ nhân viên</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{Request::is('private/thongtincanhan') ? 'active':null}}"
                                        href="{{url('private/thongtincanhan')}}">Thông tin cá nhân</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  {{Request::is('private/'.Auth::user()->id_nhanvien.'/hopdong') ? 'active':null}}"
                                        href="{{url('private/'.Auth::user()->id_nhanvien.'/hopdong')}}">Hợp đồng cá
                                        nhân</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Quản
                            lý chấm công & lương</a>
                        <div id="submenu-4"
                            class="collapse submenu {{Request::is('private/luong/danhsach')|| Request::is('private/luong')|| Request::is('private/chamcong') ? 'show':null}}"
                            style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link  {{Request::is('private/luong/danhsach') ? 'active':null}}"
                                        href="{{url('private/luong/danhsach')}}">Lương nhân viên</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  {{Request::is('private/luong') ? 'active':null}}"
                                        href="{{url('private/luong')}}">Lương & Thuế</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{Request::is('private/chamcong') ? 'active':null}}"
                                        href="{{url('private/chamcong')}}">Chấm công</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/thongtin/congty') ? 'active':null}}"
                            href="{{url('private/thongtin/congty')}}">Thông tin công ty</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->