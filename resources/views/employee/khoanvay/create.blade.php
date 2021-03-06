@extends('employee.layouts.app')

@section('title')
    Tạo mới khoản vay
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 text-center">
                @include('employee.template-parts.status')
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Tạo mới khoản vay</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                    <form action="{{route('employee.khoan-vay.store')}}" method="POST">

                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="gia_tri">Giá trị khoản vay (VNĐ)</label>
                            <input type="number" step="1000" min="1000" class="form-control" id="gia_tri" name="gia_tri" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Tạo mới</button>

                    </form>
            </div>
        </div>
    </div>
@endsection
