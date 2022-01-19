@extends('/Layouts/Layout')

@section('content')

<div class="widget">
    <div class="widget-head">
        <h4 class="widget-title">Create Post</h4>
    </div>
    <div class="widget-body">
        <div class="col-md-12">
            <form class="form" method="post" action="{{route('Site.Post.Create')}}">
                @csrf
                <div class="form-group col-md-6">
                    <label for="title">Post Name</label>
                    <input id="title" name="title" class="form-control" />
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Post Description</label>
                    <input id="description" name="description" class="form-control" />
                </div>
                <div class="form-group col-md-6">
                    <label for="description">Post</label>
                    <input id="description" name="description" class="form-control" />
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
</div>

@endsection
