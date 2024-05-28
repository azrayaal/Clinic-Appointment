@include('layouts.header')
@include('layouts.sidebar')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Appointment</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/appointment">Appointment</a></li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form tambah appointment</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="/appointment/create" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                  <label for="doctor">Doctor</label>
                    <select name="doctor" class="form-control" id="doctor" required>
                        <option value="">Select Doctor</option>
                        <option value="doctor1">Doctor 1</option>
                        <option value="doctor2">Doctor 2</option>
                        <option value="doctor3">Doctor 3</option>
                        <!-- Add more options as needed -->
                    </select>
                  </div>

                  <div class="card-body">
                  <div class="form-group">
                    <label for="treatment">Treatment</label>
                        <select name="treatment" class="form-control" id="treatment" required>
                            <option value="">Select Treatment</option>
                            <option value="treatment1">Treatment 1</option>
                            <option value="treatment2">Treatment 2</option>
                            <option value="treatment3">Treatment 3</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="date">Date</label>
                      <input type="date" name="date" class="form-control" id="date" placeholder="choose appointment date" required />
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    <button type="submit" class="btn btn-secondary">
                      <a href="/appointment" style="color: white"><i class="fa fa-undo"></i> Cancel</a>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

@include('layouts.footer')