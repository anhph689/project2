@extends('admin.layouts.default')

@section('title')
    @parent
     Danh sách sản phẩm
@endsection

@push('styles')
    <style>
        .img-product{
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <div class="p-4" style="min-height: 800px;">
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{session('message')}}
            </div>
        @endif
        <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
        <a href="{{route('admin.products.addProduct')}}" class="btn btn-info">Thêm mới</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Image</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listProduct as $key => $value)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->price}}</td>
                        <td>
                            <img class="img-product" src="{{asset($value->image)}}" alt="">
                        </td>
                        <td>
                            <button class="btn btn-warning">Sửa</button>
                            <button class="btn btn-danger">Xóa</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$listProduct->links('pagination::bootstrap-5')}}
    </div>
@endsection

@push('scripts')

@endpush
