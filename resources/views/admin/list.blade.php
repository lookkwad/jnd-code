@extends('layouts.app')
@section('title', 'Admin')
@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Admin</h1>
        </div>

        <div class="row">
            @foreach ($links_list as $item)
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row justify-content-between">

                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-auto">
                                            Short url : <a href="{{ url($item->short_url) }}" target="_blank"> {{ url($item->short_url) }} </a> 
                                        </div>
                                        <div class="col-md-auto mb-2">
                                            <button type="button" class="btn btn-info btn-sm copy" data-links="{{ url($item->short_url) }}"><i class="fas fa-copy"></i></button>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            Long url : <a href="{{ $item->long_url }}" target="_blank"> {{ $item->long_url }} </a> 
                                        </div>
                                        <div class="col-md-12">
                                            User : {{ $item->firstname." ".$item->lastname }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 text-right">
                                    <a href="{{ url('admin/edit/'.$item->id) }}" class="btn btn-warning btn-sm" data-id="{{ $item->id }}"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-danger btn-sm delete ml-1" data-id="{{ $item->id }}"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.delete').click(function() {
                Swal.fire({
                    title: "Delete Links?",
                    icon: "warning",
                    showCancelButton: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        var id = $(this).data('id');
                        
                        let datas = {
                            "id": id
                        }
                        
                        $.ajax({
                            url: '/admin/delete',
                            type: 'POST',
                            data: datas,
                            success: function(response) {
                                Swal.fire({
                                    title: "Success!",
                                    icon: "success",
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.reload();
                                    }
                                });
                            },
                            error: function(error) {
                                Swal.fire("Error", "", "error");
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
