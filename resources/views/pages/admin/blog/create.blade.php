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
                <!-- Place the first <script> tag in your HTML's <head> -->
                <script src="https://cdn.tiny.cloud/1/8htcs2m2n03rmg8dbr9dhfupzckkc16co1pzuf80yst8q9tj/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>

                <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
                <script>
                    tinymce.init({
                        selector: 'textarea',
                        plugins: [
                            // Core editing features
                            'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
                            // Your account includes a free trial of TinyMCE premium features
                            // Try the most popular premium features until Mar 4, 2026:
                            'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'ai', 'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
                        ],
                        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                        tinycomments_mode: 'embedded',
                        tinycomments_author: 'Author name',
                        mergetags_list: [
                            { value: 'First.Name', title: 'First Name' },
                            { value: 'Email', title: 'Email' },
                        ],
                        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
                        uploadcare_public_key: '532672c6d11822cd9a7e',
                    });
                </script>
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
