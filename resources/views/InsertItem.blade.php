@extends('layouts.layout')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="container-fluid p-0">
        <div class="row m-5 p-5 d-flex align-items-center">
            <h2 class="text-center mb-5" id="carousel-heading">Add Product</h2>
            <div class="insert-movie bg-dark p-5 text-white">
                <form action="/addProduct" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="d-flex">
                        <div class="left">
                            <br><label for="insertName" class="pe-5 pb-2 pt-0">Input Product Name:  </label>
                            <br><label for="insertName" class="pe-5 pb-2 pt-0">Input Product Price:  </label>
                            <br><label for="insertName" class="pe-5 pb-2 pt-0">Input Product Description:  </label>
                            <br><label for="insertName" class="pe-5 pb-2 pt-0">Input Product Category:  </label>
                        </div>
                        <div class="d-flex flex-column">
                            <input type="text" name="name" placeholder="Input Product Name" class="mt-1 mb-1">
                            <input type="text" name="price" placeholder="Input Price" class="mt-1 mb-1">
                            <input type="text" name="desc" placeholder="Input Description" class="mt-1 mb-1">
                            <input type="text" name="category" placeholder="Input Category" class="mt-1 mb-1">
                        </div>
                    </div>

                    <label for="InserImage">Insert Product Image: </label><input type="file" name="img" id="insertImage" class="mt-3 mb-3">


                    <br><input type="submit" value="Insert" class="btn" style="background-color: #F4E04D">
                    @if ($errors->any())
                        <div class="form-text">{{ $errors->first() }}</div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
