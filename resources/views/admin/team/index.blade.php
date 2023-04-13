@include('admin.pages.stayle')


  <body>
    <div class="container-scroller">
 
      <!-- partial:partials/_sidebar.html -->
    @include('admin.pages.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.pages.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <!-- content-wrapper ends -->
     
          

          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">All </h4>
                {{-- <p class="card-description"> Add class <code>.table-hover</code>
                </p> --}}
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th class="text-light">Name</th>
                        <th class="text-light">Phone</th>
                        <th class="text-light">Type</th>
                        <th class="text-light">Link</th>
                        <th class="text-light">Photo</th>
                        <th class="text-light">Edit</th>
                        <th class="text-light">Delete</th>
                      </tr>
                    </thead>
                        
                    <tbody>
                        @foreach ($trainers as $trainer)

                      <tr>
                        <td>{{ $trainer->name }}</td>
                        <td>{{ $trainer->phone }}</td>
                        <td>{{ $trainer->type }}</td>
                        <td>{{ $trainer->link }}</td>
                        <td class="text-center">
                                <img   style="width: 100px; height:100px" src="{{ asset('storage/'.$trainer->photo) }}" alt="">

                        </td>

                        
                        <td>
                            <a class="btn btn-success" href="{{ route('train.edit',$trainer->id) }}">Edit</a> 
                      
                        </td>
                        <td>
                          <form action="{{ route('train.destroy',$trainer->id) }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                          <button type="submit" class="btn btn-danger " onclick="return confirm('Are you sure')">Delete</button>
                        </form>

                        </td>

                        @endforeach

                      </tr>
                     

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>













          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

  </body>
</html>