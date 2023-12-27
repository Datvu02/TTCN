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
                    <h2 class="pageheader-title">Chấm công </h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lý</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lý chấm công</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Lịch sử chấm công</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
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
                        <div class="ovf" style="overflow:auto">

                            <table class="table table-striped table-bordered table-hover "
                                id="data-tables">

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
                                        echo "<th>Ngày" . $i."</th>";
                                    }
                                    ?>
                                        <th>Tổng</th>
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
                                        <?php
                                                $day = date("d");
                                                // Tạo các ô cho mỗi ngày trong tháng
                                                for ($i = 1; $i <= $daysInMonth; $i++) {
                                                    if ($i == $day) {
                                                        echo '<td><input type="checkbox" value=' . $i. '></td>';
                                                    }else{
                                                        echo "<td></td>";
                                                    }
                                                }
                                                ?>
                                        <td>
                                            
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
</div>

@endsection