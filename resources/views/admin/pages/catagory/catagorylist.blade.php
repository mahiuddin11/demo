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
        <h1 class="h3 mb-0 text-gray-800 ">Catagory List</h1>
        <a href="{{ route('catagory-add') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm p-3"><i
                class=" fa-sm text-white-50"></i>New Catagory</a>
    </div>



    <div class=" table-responsive py-2 p-2">
        <table class="table table-bordered table-hover">
            <thead class=" thead-light">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Catagory Name</th>
                    <th scope="col">Main Catagory</th>
                    <th scope="col" width="40%">Discaption</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Iphone</td>
                    <td>Apple</td>
                    <td></td>
                    <td>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
@endsection
