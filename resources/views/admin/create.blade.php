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
     
          

          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description"> Basic form elements </p>
                <form class="forms-sample " action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control  text-light"  placeholder="Title">
                  </div>
               
                 
                  {{-- <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" id="exampleSelectGender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div> --}}

                  <div class="form-group">
                    <label>File upload</label>
                    <div class="input-group col-xs-12">
                      <input type="file" class="form-control text-light">
                      
                    </div>
                  </div>

                 
                  <div class="form-group">
                    <label >Content</label>
                    <textarea class="form-control  text-light" name="content" rows="4"></textarea>
                  </div>

                  <div class="form-group">
                    <label >Description</label>
                    <textarea class="form-control  text-light" name="description" rows="4"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
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