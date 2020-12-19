<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>add Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"> add Project</h3>

        
        <div class="card-body p-0">
          <form action="" method="post">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                  <label for="project-manager">Project Manger:</label>
                  <input type="text" name="project-manager" id="project_manger" class="form-control">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea name="description"  id="description" class="form-control" cols="30" rows="10"></textarea>
                </div>
              </div>

         
        </div>
        <div class="card">
          <div class="form-group p-3">
            <button type="submit" class="btn btn-success">Save</button>
            <a href='?p=project' class="btn btn-danger">cancel</a>
          </div>
       </form>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
        <!-- Default box -->
       
</div>

    </section>
    <!-- /.content -->
  </div>