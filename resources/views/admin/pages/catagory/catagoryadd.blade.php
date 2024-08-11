@extends('admin.master')

<style>
    /* generic */

    body {
        background-color: #eee;
        color: #444;
        font-family: sans-serif;
    }

    .catagoty {
        width: 90%;
        padding-left: 60px
    }
</style>

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 catagoty ">
        <h1 class="h3 mb-0 text-gray-800 ">Catagory Create</h1>
        <a href="{{ route('catagory-list') }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm px-4 py-3"><i
                class=" fa-sm text-white-50"></i>Back</a>
    </div>

    <div class=" container px-4 py-4">
        <form action="" method="post">
            @csrf

            <div class="row">
                <div class="col-md-6 py-2">
                    <label for="catagoryName">Catagory Name</label>
                    <input type="text" name="name" class=" form-control">
                </div>
                <div class="col-md-6 py-2">
                    <label for="mainCatagory"> Main Catagory</label>
                    <select name="" id="" class=" form-control">
                        <option value="">Root</option>
                        <option value="">cat 2</option>
                    </select>
                </div>

            </div>
            <label for="discaption py-2">Discaption</label>
            <textarea name="discaption" class=" form-control" id=""></textarea>

            <input type="submit" class=" px-4 py-3 btn btn-primary mt-5">

        </form>
    </div>
@endsection
