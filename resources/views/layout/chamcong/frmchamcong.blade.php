@extends('layout.index')
@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">LỊCH SỬ CHẤM CÔNG</h2>
                </div>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        @if(session('thongbao'))
                        <div class="alert alert-success ">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="form-row">
                            <div class="col-md-6">
                                <label class="text-left">Export:</label>
                            </div>
                            <div class="col-md-6 text-right">
                                <label class="">Tìm kiếm:</label>
                            </div>
                        </div>

                        <table class="table table-striped table-bordered table-hover " id="data-tables">

                            <thead class="">
                                <tr align="center">
                                    <th>Số thứ tự</th>
                                    <th>Mã nhân viên</th>
                                    <th>Tên nhân viên</th>
                                    <th>Chức vụ</th>
                                    <?php
                                    // Lấy số ngày của tháng hiện tại
                                    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));

                                    // Tạo các cột cho mỗi ngày trong tháng
                                    for ($i = 1; $i <= $daysInMonth; $i++) {
                                        echo "<th>Ngày $i</th>";
                                    }
                                    ?>
                                    <th style="width:230px">Tổng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count=1 ?>
                                @foreach($nhanvien as $nv)
                                <tr class="even gradeC" align="center">
                                    <td>{{$count++}}</td>
                                    <td>{{$nv->id_nhanvien}}</td>
                                    <td>
                                        <p>{{$nv->ho_ten}}</p>
                                        @if(isset($nv->anh_dai_dien))
                                        <img src="{{url('upload/avatar/'.$nv->anh_dai_dien)}}"
                                            style="width: 75px;height: 55px;"></a>
                                        @endif
                                    </td>
                                    <td>{{$nv->tbl_chucvu->ten_chuc_vu}}</td>
                                    <!-- @if($nv->tinh_trang==1)
                                    <td class="label-success">Đang làm</td>
                                    @else
                                    <td class="label-danger">Đã nghĩ việc</td>
                                    @endif -->
                                    <?php
                                                // Tạo các ô cho mỗi ngày trong tháng
                                                for ($i = 1; $i <= $daysInMonth; $i++) {
                                                    echo "<td>Ngày $i</td>";
                                                }
                                                ?>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{url('private/quanly/suathongtin/'.$nv->id_nhanvien)}}"
                                            title="Chấm công">
                                            <i class="fa fa-edit"></i> Chấm công</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection