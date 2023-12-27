@extends('layout.index')
@section('content')
<!-- ============================================================== -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Danh sách nhân viên khen thưởng</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lý nhân viên</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Danh sách nhân viên khen thưởng
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="data-tables">
                        <thead>
                            <tr align="center">
                                <th>Ngày Quyết Định</th>
                                <th>Người Đề Xuất</th>
                                <th>Người Duyệt</th>
                                <th>Số Tiền</th>
                                <th>Lý Do</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($thuong as $t)
                            <tr class="even gradeC" align="center">
                                <td>{{$t->updated_at}}</td>
                                <td>{{$t->tbl->hosonhanvien->ho_ten}}</td>
                                <td>{{$t->nguoi_duyet_2}}</td>
                                <td>{{$t->gia_tri}}</td>
                                <td>{{$t->ly_do}}</td>
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