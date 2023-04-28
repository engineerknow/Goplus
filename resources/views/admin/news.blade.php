@extends('layout.header_admin')

@section('content')
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addpromotion">
        เพิ่มข่าวสาร
    </button>

    <div class="card_newx mt-3">
        รายการข่าวสาร
        <hr style="background-color: red;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="8%">ลำดับที่</th>
                    <th width="20%">รูปภาพ</th>
                    <th>ชื่อข่าวสาร</th>
                    <th>รายละเอียด</th>
                    <th>เปิด/ปิด</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tiny as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td><img src="{{ asset('image/tinymce/' . $item->image) }}" alt="" width="150px;"></td>
                        <td>
                            <p>ชื่อ : {{ $item->title }}</p>
                            <p>คำอธิบาย : {{ $item->description }}</p>
                        </td>
                        <td>{{ $item->type }}</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" style="color: red;">
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <button type="button" class="btn btn-danger text-white m-2 col-6" data-bs-toggle="modal"
                                    data-bs-target="#editpromotion{{ $item->id }}" style="color: red;">EDIT</button>
                                <button type="button" class="btn btn-danger text-white m-2 col-6" data-bs-toggle="modal"
                                    data-bs-target="#deletepromotion{{ $item->id }}" style="color: red;">DELETE</button>
                            </div>
                        </td>
                    </tr>
                    <div class="modal fade" id="editpromotion{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="editpromotion{{ $item->id }}Label"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form action="{{ route('admin.news.update', $item->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('patch')
                                    @csrf
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="editpromotion{{ $item->id }}Label">
                                            แก้ไขข่าวสาร
                                        </h1>
                                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button> --}}
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-5 text-center">
                                            <img src="{{ asset('image/tinymce/' . $item->image) }}" alt=""
                                                width="150px">
                                        </div>
                                        <div class="mb-3 mx-5">
                                            <input type="text" name="title" value="{{ $item->title }}"
                                                class="form-control" placeholder="Title" style="border-radius: 15px;">
                                        </div>
                                        <div class="mb-3 mx-5">
                                            <input type="text" name="description" value="{{ $item->description }}"
                                                class="form-control" placeholder="Description" style="border-radius: 15px;">
                                        </div>
                                        <div class="mb-3 mx-5">
                                            <textarea class="tinymce" name="body">{{ $item->body }}</textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">บันทึก</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">ปิด</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="deletepromotion{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="deletepromotion{{ $item->id }}Label"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('admin.news.delete', $item->id) }}" method="post">
                                    @csrf
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="deletepromotion{{ $item->id }}Label">
                                            ลบข่าวสาร</h1>
                                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                    </div>
                                    <div class="modal-body text-center">
                                        ยืนยันลบข่าวสารนี้ ?
                                        <input type="hidden" name="image" value="{{ $item->image }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">ยืนยัน</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">ปิด</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="addpromotion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="addpromotionLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('admin.news.add') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addpromotionLabel">เพิ่มข่าวสาร</h1>
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 mx-5">
                            <input type="file" class="form-control" name="image" style="border-radius: 15px;">
                        </div>
                        <div class="mb-3 mx-5">
                            <input type="text" name="title" class="form-control" placeholder="Title"
                                style="border-radius: 15px;">
                        </div>
                        <div class="mb-3 mx-5">
                            <input type="text" name="description" class="form-control" placeholder="Description"
                                style="border-radius: 15px;">
                        </div>
                        <div class="mb-3 mx-5">
                            <textarea class="tinymce" name="body"></textarea>
                        </div>
                        <input type="hidden" name="type" value="promotion">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">บันทึก</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection