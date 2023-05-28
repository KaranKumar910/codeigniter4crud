<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
    .row{
        margin-left:30px ;
    }
    .card{
        background:rgb(0,0,0,.7);
		color: white;
    }
</style>

<?php
     $db = \Config\Database::connect(); 
     $query = $db->table('employee')->where('id',$id)->get();
     if($query->getNumRows()){
        $row = $query->getRow();
    
?>
<body style="background-image: linear-gradient(200deg,#34e8eb,#ed5853,#c733e8);height: auto;">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: white">Update Employee details</h2>
                    <form method="POST" action="<?= base_url('home/edit_employee/'.$employee->id) ?>" id="addemployee">
                        <div class="card card-primary">
                            <div class="card-header">
                                <strong><i class="fa fa-plus"></i> Add Employee</strong>
                            </div>

                            <div class="card-body">
                            
                                <div class="form-group">
                                <label for="name">Name:</label>
                                    <input type="text" name="name" class="form-control" pattern="[a-zA-Z]+" value="<?=$row->name?>" required>
                                    <span class="error" id="nameError"></span>
                                </div>
                                <div class="form-group">
                                    <label><strong>Mobile</strong></label>
                                    <input type="text" name="mobile" class="form-control" pattern="[3456789][0-9]{9}" value="<?=$row->mobile?>" required>
                                    <span class="error" id="mobileError"></span>
                                </div>
                                <div class="form-group">
                                    <lable><strong>Email</strong></lable>
                                    <input type="email" name="email" class="form-control" value="<?=$row->email?>" required>
                                </div>
                                <div class="form-group">
                                    <label><strong>Data of Birth</strong></label>
                                    <input type="date" name="dob" class="form-control" value="<?=$row->dob?>" required>
                                </div>
                            
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="submit" class="btn btn-success" style="float: left;">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
 }
 else{
    echo ' 
        <div class="alert alert-danger">
            Employee Not Found
        </div>
    ';
 }
?>
<script>
    const form = document.getElementById('addemployee');
    const nameInput = document.getElementById('name');
    const mobileInput = document.getElementById('mobile');
    const nameError = document.getElementById('nameError');
    const mobileError = document.getElementById('mobileError');
    

    form.addEventListener('submit', function (event) {
      let isValid = true;

      // Validate name (allow alphanumeric only, no special characters)
      const nameRegex = /^[a-zA-Z0-9]+$/;
      if (!nameRegex.test(nameInput.value)) {
        nameError.textContent = 'Name should contain alphanumeric characters only.';
        isValid = false;
      } else {
        nameError.textContent = '';
      }

      // Validate mobile number (10 digits, not starting with 0, 1, 2, 3, 4, or 5)
      const mobileRegex = /^[6789]\d{9}$/;
      if (!mobileRegex.test(mobileInput.value)) {
        mobileError.textContent = 'Mobile number should be a 10-digit number starting with 6, 7, 8, or 9



</script>