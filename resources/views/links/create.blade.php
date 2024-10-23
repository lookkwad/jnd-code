@extends('layouts.app')
@section('title', 'Create Links')
@section('style')

@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Create Links</h1>
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
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label>Long URL</label>
                            <input type="text" class="form-control" id="long_url" name="long_url" placeholder="https://example.com/long-url">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <label>Short URL</label>
                        </div>
                        <div class="col-md-11">
                            <input type="text" class="form-control" id="short_url" name="short_url" readonly>
                        </div>
                        <div class="col-md-auto">
                            <button type="button" class="btn btn-info" id="copy"><i class="fas fa-copy"></i></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('links') }}" class="btn btn-secondary">Cancel</a>
                            <a class="btn btn-primary" id="create_url"> Create your link</a>
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
                const long_url = $('#long_url').val();

                let datas = {
                    "long_url": long_url,
                }
                  
                $.ajax({
                    url: '/links/insert',
                    type: 'POST',
                    data: datas,
                    success: function(response) {
                        var url = window.location.origin;
                        $('#short_url').val(url+'/'+response);
                    },
                    error: function(error) {
                        showError(error);
                    }
                });
            });

            $('#copy').click(function() {
                var copyText = $("#short_url");
                copyText.select();
                document.execCommand('copy');
            });
        });
    </script>
@endsection
