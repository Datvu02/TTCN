@extends('layout.index')
@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <h1 class="page-header">DANH SÁCH HỢP ĐỒNG</h1>

        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    @if(session('thongbao'))
                    <div class="alert alert-success ">
                        {{session('thongbao')}}
                    </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <h3>Nhân viên: {{$nhanvien->ho_ten}}</h3>
                    <a class="btn btn-info mb-5" href="{{url('private/laphopdong/'.$nhanvien->id_nhanvien)}}"
                        title="Lập phụ lục"> <i class="fa fa-edit"></i> Thêm hợp đồng mới</a>
                    <h3 style="">Hợp đồng mới nhất (hợp đồng đang sử dụng):</h3>
                    <table class="table table-striped table-bordered table-hover">

                        <thead>
                            <tr align="center">
                                <th>SỐ HỢP ĐỒNG</th>

                                <th>NGÀY LẬP HỢP ĐỒNG</th>

                                <th>LOẠI HỢP ĐỒNG</th>
                                <th>NGƯỜI LẬP HỢP ĐỒNG</th>


                                <th style="width: 210px;">TÁC VỤ</th>
                                <th>HÀNH ĐỘNG</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hopdong as $hd)
                            @if($hd->trang_thai==1)
                            <tr class="even gradeC" align="center">
                                <td>{{$hd->id_hopdong}}</td>


                                <td>{{date('d-m-Y',strtotime($hd->created_at))}}</td>

                                <td>{{$hd->tbl_loaihopdong->ten_hop_dong}}</td>
                                <td>{{$hd->nguoi_laphd}}</td>
                                <td>
                                    <a class="btn btn-warning " href="" title="Sửa"> <i class="fa fa-edit"></i> Sửa</a>
                                    <a class="btn btn-danger" href=""
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa nhân sự này không?');"
                                        title="Xóa"> <i class="fa fa-trash"></i> Xóa</a>
                                </td>
                                </td>

                                <td>
                                    <a class="btn btn-primary" href="{{url('private/chitietHD/'.$hd->id_nhanvien)}}"
                                    title="Xem"> <i class="fa fa-eye"></i> Xem</a>
                                    <a class="btn btn-primary mb-2"
                                        href="{{url('private/laphopdong/pdf/'.$hd->id_hopdong)}}" title="Xuất file pdf">
                                        <i class="fa fa-edit"></i> Xuất file pdf</a>
                                    <a class="btn btn-info mb-2" href="{{url('private/phuluc/'.$hd->id_hopdong)}}"
                                        title="Lập phụ lục"> <i class="fa fa-edit"></i> Quản lý phụ lục</a>

                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>



                        {{-- hop dong cu --}}


                    </table>



                    <h3 class=" mt-5">Các hợp đồng cũ:</h3>



                    <table class="table table-striped table-bordered table-hover">
                        <thead>

                            <tr align="center">
                                <th>SỐ HỢP ĐỒNG</th>

                                <th>NGÀY LẬP HỢP ĐỒNG</th>

                                <th>LOẠI HỢP ĐỒNG</th>
                                <th>NỘI DUNG CÔNG VIỆC</th>
                                <th>NGÀY BẮT ĐẦU HỢP ĐỒNG</th>
                                <th>LƯƠNG</th>
                                <th>PHỤ CẤP</th>
                                <th>NGÀY KẾT THÚC HỢP ĐỒNG</th>
                                <th>NGƯỜI LẬP HỢP ĐỒNG</th>




                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hopdong as $hd)
                            @if($hd->trang_thai==0)
                            <tr class="even gradeC" align="center">
                                <td>{{$hd->id_hopdong}}</td>


                                <td>{{date('d-m-Y',strtotime($hd->created_at))}}</td>

                                <td>{{$hd->tbl_loaihopdong->ten_hop_dong}}</td>
                                <td>
                                    @if(isset($hd->noi_dung_cv))
                                    {{$hd->noi_dung_cv}}
                                    @else
                                    Theo hợp đồng
                                    @endif
                                </td>
                                <td>{{$hd->ngay_bat_dau_hop_dong}}</td>
                                <td>{{number_format($hd->muc_luong_chinh)}} đ/tháng</td>
                                <td>{{number_format($hd->phu_cap)}} đ/tháng</td>
                                <td>{{$hd->ngay_ket_thuc_hop_dong}}</td>
                                <td>{{$hd->nguoi_laphd}}</td>

                                {{-- <a class="btn btn-primary " href="{{url('private/chitiethopdong/'.$hd->id_hopdong)}}"
                                title="Xem"> <i class="fa fa-edit"></i> Xem</a> --}}

                                {{-- <a class="btn btn-info mb-2" href="{{url('private/phuluc/'.$hd->id_hopdong)}}"
                                title="Lập phụ lục"> <i class="fa fa-edit"></i> Quản lý phụ lục</a>
                                <br> --}}

                                {{-- <a class="btn btn-warning " href="" title="Sửa"> <i class="fa fa-edit"></i> Sửa</a>
                                   
                                    
                                    <a class="btn btn-danger" href="" onclick="return confirm('Bạn có chắc chắn muốn xóa nhân sự này không?');" title="Xóa"> <i class="fa fa-trash"></i> Xóa</a></td> --}}


                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
            <a class="btn btn-secondary" href="javascript:history.back()">Quay Lại</a>
        </div>
        <!-- /.row -->
    </div>

    <!-- /.container-fluid -->
</div>
@endsection