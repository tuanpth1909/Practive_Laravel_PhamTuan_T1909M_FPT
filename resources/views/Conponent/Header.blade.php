<div class="col">
    <form class="form-inline" action="{{ route('Search') }}" method="post">
        <div class="form-group mx-sm-3 mb-2">
            <input type="search" class="form-control" name="search">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
    @csrf
    </form>
</div>
<div class="col"><a class="btn btn-primary" href="{{ route('Display') }}" role="button">Trang chủ</a></div>
<div class="col"><div clas="add">
        <a class="btn btn-primary" href="{{ url('Add_show') }}" role="button">Thêm</a>
    </div>
</div>
