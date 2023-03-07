@extends('main')
@section('content')
<h1>Flex page</h1>
<div class="d-flex flex-wrap justify-content-between">
<div class="col-lg-4 col-md-6 col-sm-12 mb-3 px-2">
    <div class="p-3 border text-black">
        <button type="button" class="btn btn-primary">Tambah</button>
        <button type="button" class="btn btn-primary">Import</button>
        <button type="button" class="btn btn-primary">Export</button>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 mb-3 px-2">
    <div class="p-3 border">
        <div class="input-group">
            <input type="text" aria-label="Search" class="form-control">
            <span class="input-group-text">Search</span>
          </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 mb-3 px-2">
    <div class="p-3 border">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">2020</a></li>
              <li><a class="dropdown-item" href="#">2021</a></li>
              <li><a class="dropdown-item" href="#">2022</a></li>
            </ul>
          </div>
    </div>
</div>
</div>

@endsection

