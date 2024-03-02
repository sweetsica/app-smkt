{{-- @if(session()->has('access_key')==false)
    <script>
        window.location.href = "https://soundcloud.com/iamkanjo/thang-da-xem-live-at-montauk";
    </script>
@else --}}
<!DOCTYPE html>
<html>
<head>
    <title>S-MKT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <br/>
    <h2>Đối tượng khách hàng</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@sortablelink('id')</th>
            {{-- <th>@sortablelink('type','Loại')</th> --}}
            <th>@sortablelink('name', 'Tên')</th>
            <th>@sortablelink('url', 'URL')</th>
            <th>@sortablelink('note', 'Ghi chú')</th>
            <th>@sortablelink('theme', 'Chủ đề')</th>
            <th>@sortablelink('area', 'Khu vực')</th>
            <th>@sortablelink('rate', 'Đánh giá')</th>
            <th>@sortablelink('age', 'Độ tuổi')</th>
            <th>@sortablelink('sex', 'Giới tính')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data['customers'] as $info)
            <tr>
                <td style="width: 4%;">{{$info->id}}</td>
                <td style="width: 12%;">{{$info->name}}</td>
                <td>{{$info->url}}</td>
                <td>{{$info->note}}</td>
                <td style="width: 6%;">{{$info->theme}}</td>
                <td>{{$info->area}}</td>
                <td>{{$info->rate}}</td>
                <td>{{$info->age}}</td>
                <td>{{$info->sex}}</td>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $data['customers']->appends(\Request::except('page'))->render() !!}
</div>

<div class="container">
    <br />
    <h2>Nhóm tiềm năng</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@sortablelink('id')</th>
            {{-- <th>@sortablelink('type','Loại')</th> --}}
            <th>@sortablelink('name', 'Tên')</th>
            <th>@sortablelink('url', 'URL')</th>
            <th>@sortablelink('note', 'Ghi chú')</th>
            <th>@sortablelink('theme', 'Chủ đề')</th>
            <th>@sortablelink('rate', 'Đánh giá')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data['groups'] as $info)
            <tr>
                <td style="width: 4%;">{{$info->id}}</td>
                <td style="width: 12%;">{{$info->name}}</td>
                <td>{{$info->url}}</td>
                <td>{{$info->note}}</td>
                <td style="width: 6%;">{{$info->theme}}</td>
                <td>{{$info->rate}}</td>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $data['groups']->appends(\Request::except('page'))->render() !!}
</div>

<div class="container">
    <br />
    <h2>Chủ đề tiềm năng</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>@sortablelink('id')</th>
            {{-- <th>@sortablelink('type','Loại')</th> --}}
            <th>@sortablelink('name', 'Tên')</th>
            <th>@sortablelink('note', 'Ghi chú')</th>
            <th>@sortablelink('rate', 'Đánh giá')</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data['themes'] as $info)
            <tr>
                <td style="width: 4%;">{{$info->id}}</td>
                <td style="width: 12%;">{{$info->name}}</td>
                <td>{{$info->note}}</td>
                <td>{{$info->rate}}</td>
                </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $data['themes']->appends(\Request::except('page'))->render() !!}
</div>

</body>
</html>
@endif
