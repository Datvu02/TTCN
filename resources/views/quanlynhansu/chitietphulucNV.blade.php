@extends('layout.index')
@section('content')


        <div id="page-wrapper">
            <div class="container-fluid">
                    <div class="col-lg-12">
                       
                    <h1 class="page-header">PHỤ LỤC HỢP ĐỒNG: {{$hopdong->id_hopdong}}</h1>
                       
                    </div>
                   
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- /.col-lg-12 -->
                                    @if(session('thongbao'))
                                    <div class="alert alert-success">
                                    {{session('thongbao')}}
                                    </div>
                                    @endif
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr align="center">
                                                <th>LOẠI PHỤ LỤC</th>
                                                @if(isset($chitiet->thay_doi_luong))
                                                <th>MỨC LƯƠNG CŨ</th>
                                                <th>MỨC LƯƠNG MỚI</th>
                                                
                                                
                                                @elseif(isset($chitiet->id_chucvu_moi))
                                                <th>CHỨC VỤ CŨ</th>
                                                <th>PHỤ CẤP CŨ</th>
                                                <th>CHỨC VỤ MỚI</th>
                                                <th>PHỤ CẤP MỚI</th>
                                                @elseif(isset($chitiet->id_loaihopdong_moi))
                                                <th>LOẠI HỢP ĐỒNG CŨ</th>
                                                <th>LOẠI HỢP ĐỒNG MỚI</th>
                                                @elseif(isset($chitiet->noi_dung_khac))
                                                <th>NỘI DUNG</th> 
                                                @endif     
                                                <th>NGÀY BẮT ĐẦU</th>
                                                <th>NGÀY KẾT THÚC</th>
                                                                      
                                                <th style="">TÁC VỤ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                            <tr class="even gradeC" align="center">
                                                
                                                <td>{{$loaiphuluc->ten_phu_luc}}</td>
                                                
                                                
                                                
                                                @if(isset($chitiet->thay_doi_luong))
                                                <td>{{number_format($hopdong->muc_luong_chinh)}}</td>
                                                <td>{{number_format($chitiet->thay_doi_luong)}}</td>
                                                
                                                
                                                @elseif(isset($chitiet->id_chucvu_moi))
                                                <td>{{$nhanvien->tbl_chucvu->ten_chuc_vu}}</td>
                                                <td>Ăn trưa: {{$hopdong->tbl_phucap->an_trua}}<br>
                                                    Xăng xe: {{$hopdong->tbl_phucap->xang_xe}}<br>
                                                    Khác: {{$hopdong->tbl_phucap->khac}}<br>
                                                    Tổng tiền : {{$hopdong->tbl_phucap->tong_tien_phu_cap}}<br>
                                                </td>
                                                <td>{{$chitiet->tbl_chucvu->ten_chuc_vu}}</td>
                                                <td>
                                                    Ăn trưa: {{$chitiet->tbl_phucap->an_trua}}<br>
                                                    Xăng xe: {{$chitiet->tbl_phucap->xang_xe}}<br>
                                                    Khác: {{$chitiet->tbl_phucap->khac}}<br>
                                                    Tổng tiền : {{$chitiet->tbl_phucap->tong_tien_phu_cap}}<br></td>
                                                
                                                @elseif(isset($chitiet->id_loaihopdong_moi))
                                                <td>{{$hopdong->tbl_loaihopdong->ten_hop_dong}}</td>
                                                <td>{{$chitiet->tbl_loaihopdong->ten_hop_dong}}</td>
                                                @elseif(isset($chitiet->noi_dung_khac))
                                                <td>{{$chitiet->noi_dung_khac}}</td>
                                                @endif 
                                                <td>{{$chitiet->ngay_bat_dau}}</td>
                                                <td>{{$chitiet->ngay_ket_thuc}}</td>
                                                
                                                
                                                <td>
                                                  
                                                    <a class="btn btn-danger" href="" onclick="return confirm('Bạn có chắc chắn muốn xóa phụ lục này không?');" title="Xóa"> <i class="fa fa-trash"></i> Xóa</a></td>   
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