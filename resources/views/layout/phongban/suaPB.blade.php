 
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
                    <h2 class="pageheader-title">Sửa Phòng Ban </h2>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
     
            <div class="row">
                <!-- ============================================================== -->
                <!-- validation form -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                      
                        <div class="card-body">
                            @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                {{$err}}<br>
                                @endforeach
                            </div>
                            @endif
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                {{session('thongbao')}}
                                </div>
                            @endif
                        <form name="myform" class="needs-validation" method="POST" action="{{url('private/phongban/sua/'.$phongban->id_phongban)}}" onsubmit="return validatephongban()" novalidate>
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <!--<div class="valid-feedback">
                                            Looks good!
                                        </div> -->
                                        <div class="form-row">
                                            <div class="form-group col-md-2">
                                                <label for="id_phongban">Mã Phòng Ban</label>
                                                <input type="text" class="form-control" id="id_phongban" name="id_phongban" placeholder="" value="{{$phongban->id_phongban}}" disabled>
                                                <span id="maphongban"></span>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="ten_phong_ban">Tên Phòng Ban</label>
                                                <input type="text" class="form-control" id="ten_phong_ban" name="ten_phong_ban" placeholder="" value="{{$phongban->ten_phong_ban}}">
                                                <span id="phongban"></span>
                                            </div> 
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <button class="btn btn-primary" type="submit">Sửa</button>
                                            <button class="btn btn-default" type="reset">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <a class="btn btn-secondary" href="javascript:history.back()" >Quay Lại</a>
                                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- end validation form -->
                <!-- ============================================================== -->
            </div>
    </div>
</div>

@endsection