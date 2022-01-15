@extends('Layouts/Layout')

@section('content')

<h1>Home</h1>

@endsection

@section('Scripts')
<script>
    $(document).ready(() => {
        $(document.querySelector("table")).DataTable();
    });
</script>
@endsection