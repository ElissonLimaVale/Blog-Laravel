@extends('/Layouts/Layout')

@section('content')

<div class="widget">
    <div class="widget-head">
        <h4 class="widget-title">Edit Post</h4>
    </div>
    <div class="widget-body">
        <div class="col-md-12">
            <form class="form" method="post" action="{{route('Site.Posts.Update')}}">
                @csrf
                <input name="id" value="{{$post->id}}" hidden/>
                <fieldset>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="title">Post Title</label>
                            <input id="title" name="title" class="form-control" value="{{$post->title}}" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">Post Description</label>
                            <input id="description" name="description" class="form-control" value="{{$post->description}}" />
                        </div>
                        <div class="form-group col-md-12">
                            <label for="post">Post</label>
                            <textarea id="post" name="post" class="form-control" rows="5">{{$post->post}}</textarea>
                        </div>
                    </div>
                </fieldset>
                <section class="footer">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </section>
            </form>
        </div>
    </div>
</div>

@endsection
