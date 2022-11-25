@if ($errors->any())

@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <p><i class="mdi mdi-block-helper me-2"></i>{{$error}}</p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

    </button>
</div>
@endforeach
@endif