<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Artikel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">Edit Artikel</h3>
            </div>
            <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="<?= BASEURL; ?>/DashboardArtikel/ubah" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <input type="hidden" name="id" id="id" value="<?= $data['article']['id']; ?>">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" value="<?= $data['article']['title']; ?>">
                            </div>
                        </div>
                        <script>
                            function updateHiddenInput(selectElement) {
                                var selectedValue = selectElement.value;
                                document.getElementById('hidden_category_id').value = selectedValue;
                                console.log('Selected Value:', selectedValue);
                            }
                        </script>
                        <!-- Bagian Category -->
                        <div class="form-group row">
                            <label for="role" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select class="form-control select2" style="width: 100%;" name="category_id" onchange="updateHiddenInput(this)">
                                    <?php foreach ($data['category'] as $category): ?>
                                        <option value="<?= $category['category_name']; ?>"><?= $category['category_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- Input hidden for Category -->
                        <input type="hidden" name="category_id" id="hidden_category_id" value="<?= $data['category'][0]['category_name']; ?>">

                        <!-- Bagian Author -->
                        <div class="form-group row">
                            <label for="author" class="col-sm-2 col-form-label">Author</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="author" name="author" value="<?= $_SESSION['username']; ?>" readonly>
                            </div>
                        </div>
                        <!-- Input hidden for Author -->
                        <input type="hidden" name="author_id" value="<?= $_SESSION['username']; ?>" >

                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Publish Date</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="deskripsi" name="publish_date" value="<?= $data['article']['publish_date']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="images" class="col-sm-2 col-form-label">tumbnail</label>
                          <div class="col-sm-10">
                              <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                              <small class="form-text text-muted">Select multiple images for the event (Hold Ctrl/Cmd to select multiple images)</small>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="content" name="content" <?= $data['article']['content']; ?>></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Save</button>
                        <a href="<?= BASEURL; ?>/DashboardArtikel" class="btn btn-default float-right">Cancel</a>
                    </div>
                <!-- /.card-footer -->
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>