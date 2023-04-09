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
                        <th class="text-light">Title</th>
                        <th class="text-light">content</th>
                        <th class="text-light">Description</th>
                        <th class="text-light">Photo</th>
                        <th class="text-light">Action</th>
                      </tr>
                    </thead>
                        
                    <tbody>
                        @foreach ($blogs as $blog)

                      <tr class="">
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</td>
                        <td>{{ $blog->description }}</td>
                        <td class="text-center">
                                <img   style="width: 100px; height:100px" src="{{ asset('storage/'.$blog->photo) }}" alt="">

                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('blog.edit',['blog'=>$blog->id]) }}">Edit</a>
                        </td>
                      </tr>
                     
                      @endforeach

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