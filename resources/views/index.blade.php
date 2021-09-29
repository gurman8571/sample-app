<x-nav />
<div class="container mt-5">
  @if($data->count())
<table class="table table-success table-striped">

  <thead>
    <tr>
    <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>

    </tr>
  </thead>
  <tbody>
    
    <tr>
        @foreach($data as $key =>$item)
    <th scope="row">{{$key+1}}</th>
      <td>{{$item['name']}}</td>
      <td>{{$item['email']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
<h1 class=" text-center mt-5">no deatils to show</h1>
@endif
</div>