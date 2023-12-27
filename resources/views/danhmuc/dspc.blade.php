@extends('layout.index')
@section('content')
<!-- ============================================================== -->

<!-- /#page-wrapper -->
<!-- ============================================================== -->


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">DANH SÁCH PHỤ CẤP THEO CHỨC VỤ</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lý lương</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bảng phụ cấp</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
        @endif
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="data-tables">
                        <thead>
                            <tr align="center">
                                <th>Vị trí</th>

                                <th>Tiền ăn trưa</th>
                                <th>Tiền xăng</th>
                                <th>Khác</th>
                                <th>Tổng tiền phụ cấp</th>
                                <th>Tác vụ</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($phucap as $pc)
                            <tr class="even gradeC" align="center">
                                <td>{{$pc->tbl_chucvu->ten_chuc_vu}}</td>

                                <td>{{number_format($pc->an_trua)}} đ/tháng</td>
                                <td>{{number_format($pc->xang_xe)}} đ/tháng</td>
                                <td>{{number_format($pc->khac)}} đ/tháng</td>
                                <td>{{number_format($pc->tong_tien_phu_cap)}} đ/tháng</td>
                                <td><a class="btn btn-warning" href="{{url('private/phucap/sua/'.$pc->id_chucvu)}}"><i
                                            class="fa fa-edit mr-2"></i>Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection