@extends('layout.index')
@section('content')
<!-- ============================================================== -->
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách chi tiết kỹ luật nhân viên: {{$nhanvien->ho_ten}}</h1>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="data-tables">
                        <thead>
                            <tr align="center">
                                <th>Lần phạt</th>
                                <th>Người đề xuất</th>
                                <th>Chức vụ người đề xuất</th>
                                <th>Số thứ tự</th>
                                <th>Lý do</th>
                                <th>Mức phạt</th>
                                <th>Người duyệt</th>
                                <th>Chức vụ người duyệt</th>
                                <th>Ngày kỷ luật</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $count=0; $stt=1 ?>
                            @foreach($kyluat as $kl)
                            <tr class="even gradeC" align="center">
                                <td>{{$stt++}}</td>
                                <td>{{$kl->ly_do}}</td>
                                <td>{{$kl->gia_tri}}</td>
                                <td>{{date(' d-m-Y',strtotime($kl->created_at))}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <span class="d-flex justify-content-between">
                        <a class="btn btn-danger mt-3"
                            href="{{url('private/quyetdinhthoiviecNV/'.$nhanvien->id_nhanvien)}}"
                            title="Lập quyết định"> <i class="fa fa-eye"></i> Duyệt</a>
                        <a class="btn btn-primary mt-3" href="{{url('private/kyluat/danhsach')}}" title="Quay lại"> <i
                                class="fa fa-eye"></i> Quay lại</a>
                    </span>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection