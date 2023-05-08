@if(session('notification'))
<div class="alert alert-danger" role="alert">
    {{session('notification')}}
</div>
@endif