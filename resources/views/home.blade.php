@include('template.header')
<!--form-->


<!-- table-->

<div class="container">
<div class="row">
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>id</th>
      <th>title</th>
      <th>description</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
  @if(count($articles)>0)
  @foreach($articles->all() as $article)
    <tr>
      <td>{{$article->id}}</td>
      <td>{{$article->title}}</td>
      <td>{{$article->description}}</td>
    <td>
    <a href='{{url("/")}}' class="label label-primary">Read</a> |
     <a href='{{url("/update/{$article->id}")}}' class="label label-success">Update</a> |
      <a href='{{url("/delete/{$article->id}")}}' class="label label-danger">Delete</a>
    </td>
    </tr>
  

@endforeach
@endif
    
  </tbody>
</table> 
</div>
</div>

@include('template.footer')