@extends('admin.layouts.master')
@section('title')
    ویرایش کاربر
@endsection
@section('page-header')
    <div class="row my-1">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">ویرایش کاربر</h1>
        </div>
        <div class="col-sm-6">
            <div class="float-sm-left">
                <a href="/" class="btn btn-info ">بازگشت به صفحه اصلی</a>
            </div>
        </div>
    </div>
@endsection
@section('main-content')
    <form action="{{route('users.update' , ['user'=>$user])}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">نام : </label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="family">نام خانوادگی : </label>
                    <input type="text" name="family" class="form-control" id="family" value="{{$user->family}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">تلفن : </label>
                    <input type="text" name="phone" class="form-control" id="phone" value="{{$user->phone}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">ایمیل : </label>
                    <input type="text" name="email" class="form-control" id="email" value="{{$user->email}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="role">نقش :</label>
                    <select class="form-select" name="role" aria-label="نقش">
                        @foreach(Config::get('constants.role') as $role)
                            <option value="{{$role}}" {{($role==$user->role) ? 'selected' : ''}}>{{$role}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">ثبت</button>
    </form>
@endsection
