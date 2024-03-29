@extends('layouts.admin')

@section('title')
    <title>Add Product</title>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.content-header', ['name' => 'product', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{  }}" class="btn btn-success float-right m-2">Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Gía</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- @foreach($categories as $category) -->

                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                    <td>
                                        <a href="{{     }}"
                                           class="btn btn-default">Edit</a>
                                        <a href="{{ }}"
                                           class="btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                           <!--  @endforeach -->

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                   <!--      {{ $categories->links() }} -->
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
