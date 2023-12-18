@extends('layout.index')
@section('content')
<!-- ============================================================== -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <h1 class="page-header">DANH SÁCH NHÂN VIÊN KHEN THƯỞNG</h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="data-tables">
                        <thead>
                            <tr align="center">
                                <th>Mã nhân viên</th>
                                <th>Tên nhân viên bị kỷ luật</th>
                                <th>Chức vụ</th>
                                <th>Ngày quyết định</th>
                                <th>Trạng thái</th>
                                <th style="width:230px">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($thuong as $t)
                            <tr class="even gradeC" align="center">

                                @foreach ($nhanvien as $nv)
                                @if($nv->id_nhanvien==$t->nguoi_huong)
                                <td>{{$nv->ho_ten}}</td>
                                <td>{{$nv->tbl_chucvu->ten_chuc_vu}}</td>
                                @endif
                                @endforeach

                                <td>{{$t->tbl_hosonhanvien->ho_ten}}</td>
                                <td>{{$t->updated_at}}</td>
                                <td>đã duyệt</td>
                                <td>

                                    <a class="btn btn-primary" href="{{url('private/thuong/canhan/'.$nv->id_nhanvien)}}"
                                        title="Xem chi tiết"> <i class="fa fa-eye"></i> Chi tiết
                                    </a>
                                </td>
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

<!-- /#page-wrapper -->
@endsection