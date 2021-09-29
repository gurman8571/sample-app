<x-nav />
<div class="container mt-5">
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
        @foreach($data as $item)
    <th scope="row">1</th>
      <td>{{$item['name']}}</td>
      <td>{{$item['email']}}</td>
    </tr>
    @endforeach
  </tbody>

</table>
</div>