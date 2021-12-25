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
  <form action="addus.php" method="post">
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
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">User Name</label>
                <input type="text" id="username" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="inputName">Password</label>
                <input type="text" id="password" class="form-control" name="pass">
              </div>

              <div class="form-group">
                <label for="inputClientCompany">Email</label>
                <input type="text" id="email" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Phone</label>
                <input type="text" id="phone" class="form-control" name="phone">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Full Name</label>
                <input type="text" id="fullname" class="form-control" name="fullname">
              </div>
              <div class="form-group">
                <label for="inputStatus">Roles</label>
                <select id="inputStatus" class="form-control custom-select" name="roles">
                  <option selected disabled>Select one</option>
                  <option value=1>admin</option>
                  <option value=2>user</option>
                </select>
              </div>
            </div>
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
<!-- <script>
    var username = document.querySelector('#username');
    var fullname = document.querySelector('#fullname');
    var email = document.querySelector('#email');
    var phone = document.querySelector('#phone');
    var password = document.querySelector('#password');
    var form = document.querySelector('form');

    function showError(input, message) {
      let parent = intput.parentElement;
      let small = parent.querySelector('small')
      parent.classList.add('error')
      small.innerText = ' '
    }

    function showSuccess(input) {
      let parent = intput.parentElement;
      let small = parent.querySelector('small')
      parent.classList.remove('error')
      small.innerText = ' '
    }

    function checkEmail(input) {
      const regexEmail =
        /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
      intput.value = intput.value.strim()
      let isEmailError = !regexEmail.test(input.value)
      if (regexEmail.test(input.value)) {
        showSuccess(intput)
      } else showError(intput, 'Email Invalid')
      return isEmailError
    }

    function checkPhone(input) {
      const regexPhone =
        /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
      intput.value = intput.value.strim()
      let isPhoneError = !regexPhone.test(input.value)
      if (regexPhone.test(input.value)) {
        showSuccess(intput)
      } else showError(intput, 'Phone Invalid')
      return isPhoneError
    }

    function checkFullname(input) {
      const regexFullname =
        /^([\w]{3,})+\s+([\w\s]{3,})+$/i;
      intput.value = intput.value.strim()
      let isFullnameError = !regexFullname.test(input.value)
      if (regexFullname.test(input.value)) {
        showSuccess(intput)
      } else showError(intput, 'Full Name Invalid')
      return isFullnameError
    }

    function checkLenght(intput, min, max) {
      intput.value = intput.value.strim()
      if (input.value.lenght < min) {
        showError(intput, `Phải có ít nhất ${min} kí tự!`)
        return true;
      }
      if (input.value.lenght > max) {
        showError(intput, `Không được quá ${max} kí tự!`)
        return true;
      }

      return false
    }

    form.addEventListener('submit', function(e) {
      e.preventDefault()
      let isPhoneError = checkEmail(phone)
      let isFullnameError = checkEmail(fullname)
      let isPasswordError = checkLenght(password, 3, 15)
      let isUsernameError = checkLenght(username, 3, 15)
    })  
  
</script> -->

<?php include "footer.html"; ?>