@include('template.header')
<div class="container">

    <div class="row">
           <div class="col-md-6">
               <form class="form-horizontal" method="POST" action="{{url('/insert')}}" >
                              {{csrf_field() }}

                            <fieldset>
                              <legend>adding new fruits in stock</legend>
                              @if(count($errors)>0)
                              @foreach($errors->all() as $error)
                                  <div class="alert alert-danger">
                                  {{$error}}
                                  </div>
                              @endforeach
                              @endif
                              <div class="form-group">
                                <label for="inputEmail" class="col-lg-2 control-label">title</label>
                                <div class="col-lg-10">
                                  <input class="form-control" id="inputEmail" placeholder="title" type="text" name="title">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">description</label>
                                <div class="col-lg-10">
                               <textarea class="form-control" name="description" placeholder="description"></textarea>
                                </div>
                              </div>
                              
                              
                            
                              <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                  
                                 <a href="{{url('/')}}"  class="btn btn-primary">Back</a>
                                </div>
                              </div>
                            </fieldset>
                  </form>
           </div>
    </div>
</div>


@include('template.footer')