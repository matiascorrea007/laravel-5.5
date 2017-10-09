@if(Session::has('message'))
<div class="alert alert-success alert-dismissable" >
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <a href="#" class="alert-link"></a>
  {{Session::get('message')}}
</div>
@endif

