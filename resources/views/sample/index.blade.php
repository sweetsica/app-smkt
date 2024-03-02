{{--@if(session()->get('access_key')=='allowed'||session()->get('access_key')=='allowed-part')--}}
    <!DOCTYPE html>
<html>
<head>
    <title>S-HRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div style="text-align: center; margin-top:1%">
    <form method="post" action="{{route('sample.store')}}">
        @csrf
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">*Tên</th>
                    <th scope="col">Tuổi</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Lĩnh vực kinh doanh</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col">Chủ đề</th>
                    <th scope="col">Khu vực</th>
                    <th scope="col">Đường link</th>
                    <th scope="col">Đánh giá</th>
                    <th scope="col">*Loại</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input class="form-control" type="text" name="name">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="age">
                    </td>
                    <td class="form-check">
                        <input class="form-check-input" type="radio" name="sex">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="job">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="note">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="theme">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="area">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="url">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="rate">
                    </td>
                    <td>
                        <select class="form-select" name="type" aria-label="Default select example">
                            <option
                            <option value="1">Người</option>
                            <option value="2">Nhóm</option>
                            <option value="3">Chủ đề</option>
                        </select>
                    </td>
                    <td>
                        <button type="submit">Nhập</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>

{{--Khách--}}
<div class="w-auto p-3">
    <br />
    <div style="width:100%; float:left; display: flex">
        <h2 style="width:70%"><a href="#">Danh sách Khách tiềm năng</a></h2>
{{--        <h3 style="width:30%; float:right"><a href="{{route('logout')}}">Đăng xuất</a></h3>--}}
    </div>
    <table class="table table-bordered" id="edit_sample_datables" data-update-url="#">
        <thead>
        <tr>
            <th style="width:4%;">@sortablelink('id')</th>
            <th>@sortablelink('name','Tên')</th>
            <th>@sortablelink('job','Lĩnh vực kinh doanh')</th>
            <th style="width: 19%;">@sortablelink('theme','Chủ đề')</th>
            <th style="width: 10%;">@sortablelink('age','Độ tuổi')</th>
            <th style="width: 10%;">@sortablelink('sex', 'Giới tính')</th>
            <th style="width: 5%;">@sortablelink('url', 'Link')</th>
            <th style="width: 5%;">@sortablelink('area', 'Khu vực')</th>
            <th style="width: 8%;">Ghi chú</th>
            <th style="width: 10%;">@sortablelink('rate', 'Đánh giá')</th>
        </tr>
        </thead>
            <tbody>
                @foreach($data['sample_customers'] as $sample_customer)
                    <tr>
                        <td data-id="{{$sample_customer->id}}" data-name="id">{{$sample_customer->id}}</td>
                        <td data-id="{{$sample_customer->id}}" data-name="name">{{$sample_customer->name}}</td>
                        <td data-id="{{$sample_customer->id}}" data-name="job">{{$sample_customer->job}}</td>
                        <td data-id="{{$sample_customer->id}}" data-name="theme">{{$sample_customer->theme}}</td>
                        <td data-id="{{$sample_customer->id}}" data-name="age">{{$sample_customer->age}}</td>
                        <td data-id="{{$sample_customer->id}}" data-name="sex">{{$sample_customer->sex}}</td>
                        <td data-id="{{$sample_customer->id}}" data-name="url">{{$sample_customer->url}}</td>
                        <td data-id="{{$sample_customer->id}}" data-name="area">{{$sample_customer->area}}</td>
                        <td data-id="{{$sample_customer->id}}" data-name="note">{{$sample_customer->note}}</td>
                        <td data-id="{{$sample_customer->id}}" data-name="rate">{{$sample_customer->rate}}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
{{--    {!! $data['sample_customers']->appends(\Request::except('page'))->render() !!}--}}


</div>
{{--Nhóm--}}
<div class="w-auto p-3">
    <br />
    <div style="width:100%; float:left; display: flex">
        <h2 style="width:70%"><a href="#">Danh sách Nhóm seeding tiềm năng</a></h2>
        {{--        <h3 style="width:30%; float:right"><a href="{{route('logout')}}">Đăng xuất</a></h3>--}}
    </div>
    <table class="table table-bordered" id="edit_sample_datable_2" data-update-url="#">
        <thead>
        <tr>
            <th style="width:4%;">@sortablelink('id')</th>
            <th>@sortablelink('name','Tên')</th>
            <th style="width: 19%;">@sortablelink('theme','Chủ đề')</th>
            <th style="width: 10%;">@sortablelink('age','Độ tuổi')</th>
            <th style="width: 10%;">@sortablelink('sex', 'Giới tính')</th>
            <th style="width: 5%;">@sortablelink('url', 'Link')</th>
            <th style="width: 8%;">Ghi chú</th>
            <th style="width: 10%;">@sortablelink('rate', 'Đánh giá')</th>
        </tr>
        </thead>
            <tbody>
            @foreach($data['sample_groups'] as $sample_group)
                <tr>
                    <td data-id="{{$sample_group->id}}" data-name="id">{{$sample_group->id}}</td>
                    <td data-id="{{$sample_group->id}}" data-name="name">{{$sample_group->name}}</td>
                    <td data-id="{{$sample_group->id}}" data-name="description">{{$sample_group->description}}</td>
                    <td data-id="{{$sample_group->id}}" data-name="idPosition">{{$sample_group->idPosition}}</td>
                    <td data-id="{{$sample_group->id}}" data-name="idDepartment">{{$sample_group->idDepartment}}</td>
                    <td data-id="{{$sample_group->id}}" data-name="kpiValue">{{$sample_group->kpiValue}}</td>
                    <td data-id="{{$sample_group->id}}" data-name="mandayValue">{{$sample_group->mandayValue}}</td>
                    <td data-id="{{$sample_group->id}}" data-name="idParentTask">{{$sample_group->idParentTask}}</td>
                </tr>
            @endforeach
            </tbody>
    </table>
{{--    {!! $data['sample_groups']->appends(\Request::except('page'))->render() !!}--}}


</div>
{{--Chủ đề--}}
<div class="w-auto p-3">
    <br />
    <div style="width:100%; float:left; display: flex">
        <h2 style="width:70%"><a href="#">Danh sách chủ đề tiềm năng</a></h2>
        {{--        <h3 style="width:30%; float:right"><a href="{{route('logout')}}">Đăng xuất</a></h3>--}}
    </div>
    <table class="table table-bordered" id="edit_sample_datable_3" data-update-url="#">
        <thead>
            <tr>
                    <th style="width:4%;">@sortablelink('id')</th>
                    <th>@sortablelink('name','Tên')</th>
                    <th style="width: 19%;">@sortablelink('theme','Chủ đề')</th>
                    <th style="width: 10%;">@sortablelink('age','Độ tuổi')</th>
                    <th style="width: 10%;">@sortablelink('sex', 'Giới tính')</th>
                    <th style="width: 5%;">@sortablelink('url', 'Link')</th>
                    <th style="width: 8%;">Ghi chú</th>
                    <th style="width: 10%;">@sortablelink('rate', 'Đánh giá')</th>
                </tr>
        </thead>
            <tbody>
                @foreach($data['sample_themes'] as $sample_theme)
                    <tr>
                        <td data-id="{{$sample_theme->id}}" data-name="id">{{$sample_theme->id}}</td>
                        <td data-id="{{$sample_theme->id}}" data-name="name">{{$sample_theme->name}}</td>
                        <td data-id="{{$sample_theme->id}}" data-name="description">{{$sample_theme->description}}</td>
                        <td data-id="{{$sample_theme->id}}" data-name="idPosition">{{$sample_theme->idPosition}}</td>
                        <td data-id="{{$sample_theme->id}}" data-name="idDepartment">{{$sample_theme->idDepartment}}</td>
                        <td data-id="{{$sample_theme->id}}" data-name="kpiValue">{{$sample_theme->kpiValue}}</td>
                        <td data-id="{{$sample_theme->id}}" data-name="mandayValue">{{$sample_theme->mandayValue}}</td>
                        <td data-id="{{$sample_theme->id}}" data-name="idParentTask">{{$sample_theme->idParentTask}}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
{{--    {!! $data['sample_themes']->appends(\Request::except('page'))->render() !!}--}}

</div>
<!-- jQuery -->
{{--<script src="{{asset('js/edit-table/jquery.min.js')}}"></script>--}}

<script src="{{asset('js/edit-table/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/edit-table/edit-sample-table-data.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
{{--@else--}}
{{--    <script>--}}
{{--        window.location.href = "https://soundcloud.com/iamkanjo/thang-da-xem-live-at-montauk";--}}
{{--    </script>--}}
{{--@endif--}}
