@extends('layout.index')
@section('content')
<!-- ============================================================== -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Danh sách lương nhân viên</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lý lương</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Lương nhân viên</li>
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
        <!-- /.col-lg-12 -->
        <div class="row">
            <div class="col">

            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">

                    <div class="card-body">
                        <div id="data-tables_filter" class="dataTables_filter">
                            <div class="form-group searchs col-md-6">
                                <div class="search">
                                    <label>Năm</label>
                                    <select id="year" name="year" class="form-control" style="-webkit-appearance: auto;"
                                        onchange="filterTable()">
                                        <option selected>Chọn năm</option>
                                        @php
                                        $uniqueYears = [];
                                        @endphp
                                        @foreach($luong as $l)
                                        @php
                                        $year = date('Y', strtotime($l->luong_thang));
                                        @endphp
                                        @if (!in_array($year, $uniqueYears))
                                        <option value="{{ $year }}" id="year">{{ $year }}</option>
                                        @php
                                        $uniqueYears[] = $year;
                                        @endphp
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="search">
                                    <label>Tháng</label>
                                    <select id="month" name="month" class="form-control"
                                        style="-webkit-appearance: auto;" onchange="filterTable()">
                                        <option selected>Chọn Tháng</option>
                                        @php
                                        $uniqueMonth = [];
                                        @endphp
                                        @foreach($luong as $l)
                                        @php
                                        $month = date('m', strtotime($l->luong_thang));
                                        $year = date('Y', strtotime($l->luong_thang));
                                        @endphp
                                        @if (!in_array($month, $uniqueMonth))
                                        <!-- <option value="{{ $month }}" id="month" data-year="{{ $year }}">{{ $month }}
                                    </option> -->
                                        <option value="{{ $month }}" id="month">{{ $month }}</option>
                                        @php
                                        $uniqueMonth[] = $month;
                                        @endphp
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="search">
                                    <label>HỌ TÊN NHÂN VIÊN</label>
                                    <input type="text" id="employeeName" placeholder="Nhập tên" oninput="filterTable()">
                                </div>
                            </div>
                            <!-- <div class="btn-group mb-4">
                                <form action="{{url('private/luong/update')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" name=""
                                        value="cập nhật" />
                                </form>
                            </div> -->
                            <table class="table table-striped table-bordered" id="data-tables">
                                <thead>
                                    <tr align="center">
                                        <th>LƯƠNG THÁNG</th>
                                        <th>HỌ TÊN NHÂN VIÊN</th>
                                        <th>SỐ NGÀY LÀM VIỆC</th>
                                        <th>LƯƠNG NHẬN</th>
                                        <th>CHI TIẾT</th>
                                        <th>CẬP NHẬT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($luong as $l)
                                    <!-- <tr class="even gradeC" align="center"> -->
                                    <tr class="even gradeC" align="center"
                                        data-filtertables-year="{{ date('Y-m', strtotime($l->luong_thang)) }}">
                                        <th>{{date('m / Y',strtotime($l->luong_thang))}}</th>
                                        <td>{{$l->tbl_hosonhanvien->ho_ten}}</td>
                                        <td>{{round($l->so_gio_lam_viec,1)}}</td>
                                        <td>
                                            @if(isset($l->tong_tien_luong))
                                            {{number_format(($l->tong_tien_luong))}}
                                            @endif
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-primary"
                                                href="{{url('private/luong/chitiet/'.$l->id_bangluong)}}">Xem Chi
                                                Tiết</a>
                                        </td>
                                        <td>
                                            {{date('H:i d-m-Y',strtotime($l->updated_at))}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.row -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    @endsection