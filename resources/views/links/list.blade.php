@extends('layouts.app')
@section('title', 'Links')
@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Links</h1>
            <a href="{{ route('links_create') }}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"> Create link</a>
        </div>

        <div class="row">
            @foreach ($links_list as $item)
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-auto">
                                    Short url : <a href="{{ url($item->short_url) }}" target="_blank"> {{ url($item->short_url) }} </a> 
                                </div>
                                <div class="col-md-auto mb-2">
                                    <button type="button" class="btn btn-info btn-sm copy" data-links="{{ url($item->short_url) }}"><i class="fas fa-copy"></i></button>
                                </div>
                                <div class="col-md-12">
                                    Long url : <a href="{{ $item->long_url }}" target="_blank"> {{ $item->long_url }} </a> 
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
            $('.copy').click(function() {
                var text_copy = $(this).data('links');
                var textarea = $('<textarea>');
                $('body').append(textarea);
                textarea.val(text_copy).select();
                document.execCommand('copy');
                textarea.remove();
            });
        });
    </script>
@endsection
