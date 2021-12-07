<?php include "header.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Add</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div><?php 
                if(isset($_GET['id'])):
                $getProductById = $product->getProductById($_GET['id']);
                foreach ($getProductById as $value) :  ?>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName"></label>
              <input type="text" id="inputName" class="form-control" name="name" value="<?php echo $value['name'];?>">
            </div>
            <div class="form-group">
              <label for="inputStatus">Manufactures</label>
              <select id="inputStatus" class="form-control custom-select" name="manu">
                <option selected value=<?php echo $value['manu_id']; ?>><?php echo $value['manu_name']; ?></option>
                <?php foreach ($getAllManu as $muvalue) :  ?>
                  <option value=<?php echo $muvalue['manu_id']; ?>>
                  <?php echo $muvalue['manu_name']; ?>
                </option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputStatus">Protypes</label>
              <select id="inputStatus" class="form-control custom-select" name="type">
                <option selected disabled>Select one</option>
                <?php foreach ($getAllProtypes as $typevalue) :  ?>
                  <option value=<?php echo $typevalue['type_id']; ?>>
                  <?php echo $typevalue['type_name']; ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group">
              <label for="inputClientCompany">Price</label>
              <input  type="number" id="inputClientCompany" class="form-control" name="price" value="<?php echo $value['price'];?>">
            </div>
            <div class="form-group">
              <label for="inputStatus">Feature</label>
              <select id="inputStatus" class="form-control custom-select" name="feature">
                <option selected disabled>Select one</option>
                  <option value=0>0</option>
                  <option value=1>1</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputClientCompany">Image</label>
              <input type="file" name="image" id="fileToUpload" class="form-control"  accept="<?php echo $value['image'];?>" >
            </div>
            <div class="form-group">
              <label for="inputDescription">Description</label>
              <textarea id="inputDescription" class="form-control" rows="4" name="desc"><?php echo $value['description'];?></textarea>
            </div>
          </div>
          <?php 
           endforeach;
          endif;
           ?>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" name="submit" value="Create new Porject" class="btn btn-success float-right">
      </div>
    </div>
  </section>
  </form>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "footer.html"; ?>