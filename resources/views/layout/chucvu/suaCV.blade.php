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
                    <h2 class="pageheader-title">Sửa chức vụ</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lý</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Quản lý chức vụ</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Sửa</li>
                            </ol>
                        </nav>
                    </div>
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
                     <h5 class="card-header">Sửa chức vụ</h5>
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
                         <form name="myform" class="needs-validation" method="POST"
                             action="{{url('private/chucvu/sua/'.$chucvu->id_chucvu)}}"
                             onsubmit="return validatechucvu()" novalidate>
                             {{ csrf_field() }}
                             <div class="row">
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                     <!--<div class="valid-feedback">
                                            Looks good!
                                        </div> -->
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
                     <a class="btn btn-secondary" href="javascript:history.back()">Quay Lại</a>
                 </div>
             </div>
             <!-- ============================================================== -->
             <!-- end validation form -->
             <!-- ============================================================== -->
         </div>
     </div>
 </div>

 @endsection