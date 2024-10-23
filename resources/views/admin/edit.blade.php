@extends('layouts.app')
@section('title', 'Edit Links')
@section('style')

@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit Links</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Search</h6>
            </div> --}}
            <div class="card-body">
                <form id="upload_form" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" class="form-control" id="links_id" name="links_id" value="{{ $links_edit->id }}">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label>Long URL</label>
                            <input type="text" class="form-control" id="long_url" name="long_url" placeholder="https://example.com/long-url" value="{{ $links_edit->long_url }}">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label>Short URL</label>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="short_url" name="short_url" value="{{ $links_edit->short_url }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('admin') }}" class="btn btn-secondary">Cancel</a>
                            <a class="btn btn-primary" id="create_url"> Edit</a>
                        </div>            
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#create_url').click(function() {
                
                const links_id = $('#links_id').val();
                const long_url = $('#long_url').val();
                const short_url = $('#short_url').val();

                let datas = {
                    "id": links_id,
                    "long_url": long_url,
                    "short_url": short_url,
                }
                  
                $.ajax({
                    url: '/admin/update',
                    type: 'POST',
                    data: datas,
                    success: function(response) {
                        Swal.fire({
                            title: "Success!",
                            icon: "success",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/admin';
                            }
                        });
                    },
                    error: function(error) {
                        showError(error);
                    }
                });
            });
        });
    </script>
@endsection
