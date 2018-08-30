@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif