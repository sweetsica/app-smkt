@extends('template.master')
@section('page-css')
    <!-- DataTables -->
    <link href="{{asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{asset('admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css')}}">

    <!-- jquery.vectormap css -->

    <link rel="stylesheet" href="{{asset('admin/assets/libs/morris.js/morris.css')}}" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
@endsection
@section('page-content')
<div class="container-fluid">
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row card-body" style="display: flex; flex-wrap: nowrap" >
                            <div class="col-sm-3 col-md-3" style="display: flex; flex-wrap: nowrap; flex: 1 1 5rem">
                                <form method="post" action="{{route('sample.import')}}" enctype="multipart/form-data">
                                    @csrf
                                    <input class="form-control col-md-3" style="flex: 1 1 5rem" type="file" name="sample_file">
                                    <input type="submit" style="flex: 1 1 5rem; text-align:center" class="col-md-3 btn btn-primary waves-effect waves-light" value="Nhập">
                                </form>
                            </div>
                            <div class="col-sm-6 col-md-6" style="flex: 1 1 5rem">
                                <input class="btn btn-primary waves-effect waves-light" type="submit" value="Thêm">
                            </div>
                        </div>
                        <form action="{{route('sample.store')}}" method="POST" class="form-control">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="width: 100%; display:flex; flex-wrap:wrap">
                                    <thead>
                                        <tr>
                                            <th style="flex: 1 1 5rem;">Loại</th>
                                            <th style="flex: 1 1 5rem;">Tên</th>
                                            <th style="flex: 1 1 5rem;">Chủ đề</th>
                                            <th style="flex: 1 1 5rem;">Ghi chú</th>
                                            <th style="flex: 1 1 5rem;">Khu vực</th>
                                            <th style="flex: 1 1 5rem;">Đánh giá ( /10)</th>
                                            <th style="flex: 1 1 5rem;">URL</th>
                                            <th style="flex: 1 1 5rem;">Tuổi</th>
                                            <th style="flex: 1 1 5rem;">Nam(Nữ)</th>
                                            <th style="flex: 1 1 5rem;">Nghề nghiệp</th>
                                        </tr>
                                            <tr>
                                                <input type="hidden" name="user_id" value="2">
                                                <td><select class="form-control select2" name="type">
                                                    <option value></option>
                                                    <option value='0'>Người dùng</option>
                                                    <option value='1'>Nhóm</option>
                                                    <option value='2'>Chủ đề</option>
                                                </select></td>
                                                <td><input class="form-control" type='text' name='name'></td>
                                                <td><input class="form-control" type='text' name='theme'></td>
                                                <td><input class="form-control" type='text' name='note'></td>
                                                <td><input class="form-control" type='text' name='area'></td>
                                                <td><input class="form-control" type='number' name='rate'></td>
                                                <td><input class="form-control" type='text' name='url'></td>
                                                <td><input class="form-control" type='number' name='age'></td>
                                                <td><select class="form-control select2" name="sex">
                                                    <option value></option>
                                                    <option value='0'>Nam</option>
                                                    <option value='1'>Nữ</option>
                                                </select></td>
                                                <td><input class="form-control" type='text' name='job'></td>
                                            </tr>
                                    </thead>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Nội dung</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li>
                            Tiềm năng
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    @if($data['sample_customers'] ?? "")
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Khách tiềm năng</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="sorting sorting_asc">Tên</th>
                                        <th>Tuổi</th>
                                        <th>Giới tính</th>
                                        <th>Nghề nghiệp</th>
                                        <th>Ghi chú</th>
                                        <th>Khu vực</th>
                                        <th>Đánh giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data['sample_customers'] as $sample_customer)
                                    <tr>
                                        <th scope="row">{!!$sample_customer['id']!!}</th>
                                        <td>
                                            @if($sample_customer['url'])
                                                <a href="{!!$sample_customer['url']?$sample_customer['url']:'#'!!}">
                                                    {!!$sample_customer['name']!!}
                                                </a>
                                            @else
                                                {!!$sample_customer['name']!!}
                                            @endif
                                        </th>
                                        <td>{!!$sample_customer['age']!!}</th>
                                        <td>{!! $sample_customer['sex']== 0 ? 'Nam' : 'Nữ' !!}</th>
                                        <td>{!!$sample_customer['job']!!}</th>
                                        <td>{!!$sample_customer['note']!!}</th>
                                        <td>{!!$sample_customer['area']!!}</th>
                                        <td>{!!$sample_customer['rate']!!}</th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($data['sample_groups'] ?? "")
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nhóm tiềm năng</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên</th>
                                        <th>Tuổi</th>
                                        <th>Chủ đề</th>
                                        <th>Ghi chú</th>
                                        <th>Khu vực</th>
                                        <th>Đánh giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data['sample_groups'] as $sample_group)
                                    <tr>
                                        <th scope="row">{!!$sample_group['id']!!}</th>
                                        <td>{!!$sample_group['name']!!}</th>
                                        <td>{!!$sample_group['age']!!}</th>
                                        <td>{!!$sample_group['theme']!!}</th>
                                        <td>{!!$sample_group['note']!!}</th>
                                        <td>{!!$sample_group['area']!!}</th>
                                        <td>{!!$sample_group['rate']!!}</th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($data['sample_themes'] ?? "")
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Chủ đề tiềm năng</h4>
                        <div class="table mb-0">
                            <table class="table table-striped table-bordered dt-responsive nowrap" id="datatable-buttons">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên</th>
                                        <th>Chủ đề</th>
                                        <th>Ghi chú</th>
                                        <th>Khu vực</th>
                                        <th>Đánh giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data['sample_themes'] as $sample_theme)
                                    <tr>
                                        <th scope="row">{!!$sample_theme['id']!!}</th>
                                        <td>{!!$sample_theme['name']!!}</th>
                                        <td>{!!$sample_theme['theme']!!}</th>
                                        <td>{!!$sample_theme['note']!!}</th>
                                        <td>{!!$sample_theme['area']!!}</th>
                                        <td>{!!$sample_theme['rate']!!}</th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
@section('page-js')
    <!-- JAVASCRIPT -->
    <script src="{{asset('admin/assets/libs/morris.js/morris.min.js')}}"></script>

    <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('admin/assets/js/app.js')}}"></script>

    <script src="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script src="{{asset('admin/assets/js/pages/sweet-alerts.init.js')}}"></script>

    <!-- Required datatable js -->
    <script src="{{asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Datatable init js -->
    <script src="{{asset('admin/assets/js/pages/datatables.init.js')}}"></script>

    <script src="{{asset('admin/assets/js/app.js')}}"></script>

    <!-- Buttons examples -->
    <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

    <script src="{{asset('admin/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="{{asset('admin/assets/libs/select2/js/select2.min.js')}}"></script>

@endsection
