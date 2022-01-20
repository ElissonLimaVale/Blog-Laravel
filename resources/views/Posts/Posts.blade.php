@extends('Layouts/Layout')

@section('content')
    <div class="widget">
        <div class="widget-head">
            <h4 class="widget-title">Post List</h4>
        </div>
        <div class="widget-body">
            <table id="table-posts" class="table" style="width: 100%;">
                <thead>
                    <tr>
                        <td>Post Title</td>
                        <td>Post Description</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts ?? '' as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td><a href="{{route('Site.Posts.Edit', $post->id)}}"><i class="fa fa-pencil"></i></a></td>
                            <td><a href="{{route('Site.Posts.Delete', $post->id)}}"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('Scripts')
    <script>
        $(document).ready(() => {
            $('#table-posts').DataTable();
        });
    </script>
@endsection

