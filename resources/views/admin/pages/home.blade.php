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
        @include('admin.pages.body')
          <!-- content-wrapper ends -->
     
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

  </body>
</html>