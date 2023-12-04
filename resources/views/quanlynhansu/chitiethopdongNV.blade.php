@extends('layout.index')
@section('content')


<div id="page-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <h1 class="page-header"> Chi tiết hợp đồng: {{$hopdong  ->id_hopdong}} </h1>

        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="data-tables">
                        <thead>
                            <tr align="center">

                                <th>TÊN NHÂN VIÊN</th>
                                <th>SỐ HỢP ĐỒNG</th>
                                <th>LOẠI HỌP ĐỒNG</th>
                                <th>NGÀY BẮT ĐẦU HỢP ĐỒNG</th>
                                <th>MỨC LƯƠNG CƠ BẢN</th>
                                <th>PHỤ CẤP</th>
                                <th>NGÀY KẾT THÚC HỢP ĐỒNG</th>
                                <th>TRẠNG THÁI</th>
                                <th>NGƯỜI LẬP HỢP ĐỒNG</th>
                                <th>TÁC VỤ</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr class="even gradeC" align="center">


                                <td>{{$hopdong->tbl_hosonhanvien->ho_ten}}</td>
                                <td>{{$hopdong->id_hopdong}}</td>
                                <td>{{$hopdong->tbl_loaihopdong->ten_hop_dong}}</td>
                                <td>{{$hopdong->ngay_bat_dau_hop_dong}}</td>
                                <td>{{$hopdong->muc_luong_chinh}}</td>
                                <td>{{$hopdong->phu_cap}}</td>

                                @if(isset($hopdong->ngay_ket_thuc_hop_dong))
                                <td>{{date('d-m-Y',strtotime($hopdong->ngay_ket_thuc_hop_dong))}}</td>
                                @else
                                <td>Vô hạn</td>
                                @endif
                                @if((date('m',strtotime($hopdong->ngay_bat_dau_hop_dong))-(date('m',strtotime($hopdong->ngay_ket_thuc_hop_dong))))
                                <=2) 
                                    <td class="label label-danger">Sắp hết hạn </td>
                                @else
                                    <td class=" label label-success">Còn hạn</td>
                                @endif
                                <td>{{$hopdong->nguoi_laphd}}</td>
                                <td>
                                    <a class="btn btn-danger" href=""
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa nhân sự này không?');"
                                        title="Xóa"> <i class="fa fa-trash"></i> Xóa</a>
                                </td>
                                </td>

                            </tr>

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