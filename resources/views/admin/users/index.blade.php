@extends('admin.layouts.master')
@section('title')
    جدول کاربران
@endsection
@section('page-header')
    <div class="row my-1">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">جدول کاربران</h1>
        </div>
        <div class="col-sm-6">
            <div class="float-sm-left">
                <a href="{{route('users.create')}}" class="btn btn-info">ساخت کاربر</a>
                <a href="/" class="btn btn-info ">بازگشت به صفحه اصلی</a>
            </div>
        </div>
    </div>
@endsection
@section('main-content')
    <table class="table text-center">
        <thead>
        <tr>
            <th>نام</th>
            <th>نام خانوادگی</th>
            <th>تلفن</th>
            <th>ایمیل</th>
            <th>نقش</th>
            <th>ویرایش</th>
            <th>حذف</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->family}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td><a href="{{route('users.edit' , ['user'=>$user])}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a></td>
                <td>
                    <form action="{{route('users.destroy' , ['user'=>$user])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
