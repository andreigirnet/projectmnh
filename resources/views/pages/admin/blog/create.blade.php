@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Edit Blog</div>
        <div class="formEdit">
            <form action="{{route('blog.store')}}" method="POST" class="registerEmployeeForm" enctype="multipart/form-data">
                @csrf
                <input type="file" name="fileInput">
                <label class="formLabel" for="editName">Blog Title</label>
                <input class="formInputProfile" type="text" id="editName" name="title" >
                <label class="formLabel" for="editName">Blog Description</label>
                <input class="formInputProfile" type="text" id="editName" name="description" >
                <label class="formLabel" for="editEmail">Content</label>



                <textarea name="blogContent">
                  Welcome to TinyMCE!
                </textarea>
                <button type="submit" class="adminButton">Create</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
