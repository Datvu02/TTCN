<!-- left sidebar -->
<!-- ============================================================== -->
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

                    <li class="nav-item ">
                        <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-1" aria-controls="submenu-1"><i
                                class="fa fa-fw fa-user-circle"></i>Quản lý hợp đồng - chức vụ<span
                                class="badge badge-success">6</span></a>
                        <div id="submenu-1"
                            class="collapse submenu {{Request::is('private/hopdong/danhsach')||Request::is('private/'.Auth::user()->id_nhanvien.'/hopdong')||Request::is('private/chucvu/danhsach') ? 'show':null}}"
                            style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{Request::is('private/chucvu/danhsach') ? 'active':null}}"
                                        href="{{url('private/chucvu/danhsach')}}">Danh sách chức vụ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{Request::is('private/hopdong/danhsach') ? 'active':null}}"
                                        href="{{url('private/hopdong/danhsach')}}">Danh sách hợp đồng</a>

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  {{Request::is('private/'.Auth::user()->id_nhanvien.'/hopdong') ? 'active':null}}"
                                        href="{{url('private/'.Auth::user()->id_nhanvien.'/hopdong')}}">Hợp đồng</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Quản lý
                            nhân viên</a>
                        <div id="submenu-2"
                            class="collapse submenu {{Request::is('private/laphoso')|| Request::is('private/kyluat/danhsach')|| Request::is('private/thuong/danhsach')||Request::is('private/danhsachnvpb')||Request::is('private/nhanvien/danhsach')||Request::is('private/nhanvien/1')||Request::is('private/nhanvien/2')? 'show':null}}"" style="">
                                    <ul class=" nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/thongtincanhan') ? 'active':null}}"
                            href="{{url('private/thongtincanhan')}}">Thông tin cá nhân</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/laphoso') ? 'active':null}}"
                            href="{{url('private/laphoso')}}">Lập hồ sơ nhân viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2-2" aria-controls="submenu-2-2">Danh sách nhân viên</a>
                        <div id="submenu-2-2"
                            class="collapse submenu {{Request::is('private/nhanvien/danhsach')||Request::is('private/nhanvien/1')||Request::is('private/nhanvien/2') ? 'show':null}}"
                            style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{Request::is('private/nhanvien/danhsach') ? 'active':null}} "
                                        href="{{url('private/nhanvien/danhsach')}}">Tất cả nhân viên</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/kyluat/danhsach') ? 'active':null}}"
                            href="{{url('private/kyluat/danhsach')}}">Danh sách nhân viên kỷ luật</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('private/thuong/danhsach') ? 'active':null}}"
                            href="{{url('private/thuong/danhsach')}}">Danh sách nhân viên khen thưởng</a>
                    </li>
                </ul>
            </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3"
                    aria-controls="submenu-3"><i class="fab fa-fw fa-wpforms"></i>Quản lý lương</a>
                <div id="submenu-3"
                    class="collapse submenu {{Request::is('private/luong/danhsach')||Request::is('private/phucap/danhsach')||Request::is('private/luong')||Request::is('private/chamcong')||Request::is('private/phucap/danhsach')||Request::is('private/chamcong/danhsach') ? 'show':null}}"
                    style="">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link  {{Request::is('private/luong') ? 'active':null}}"
                                href="{{url('private/luong')}}">Lương &
                                Thuế</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{Request::is('private/luong/danhsach') ? 'active':null}}"
                                href="{{url('private/luong/danhsach')}}">Lương nhân viên</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('private/chamcong') ? 'active':null}}"
                                href="{{url('private/chamcong')}}">Chấm
                                công</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('private/chamcong/danhsach') ? 'active':null}}"
                                href="{{url('private/chamcong/danhsach')}}">Danh sách chấm công</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('private/phucap/danhsach') ? 'active':null}}"
                                href="{{url('private/phucap/danhsach')}}">Bảng phụ cấp</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5"
                    aria-controls="submenu-5"><i class="fas fa-fw fa-file"></i>Quản lý thông tin công ty</a>
                <div id="submenu-5"
                    class="collapse submenu {{Request::is('private/thongtin/danhsachgioithieu')||Request::is('private/tintuc/danhsach') || Request::is('private/tintuc/danhsachtuyendung')||Request::is('private/thongtin/congty') ? 'show':null}}"
                    style="">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('private/thongtin/congty') ? 'active':null}}"
                                href="{{url('private/thongtin/congty')}}">Thông tin công ty</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- <li style="text-align: center"> <a href="{{url('private/')}}"> <img
                        src="{{url('upload/logo/'.$thongtinchinh->Hinh)}}"
                        style="margin-top: 40px;width: 70px;height: 70px;" class=""></a></li>
            <li style="text-align: center"><a class="navbar-brand" href="{{url('private/')}}"
                    style="color: #71748d;font-size: 15px;">{{$thongtinchinh->ten_cong_ty}}</a></li> -->
            </ul>
    </div>
    </nav>
</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->