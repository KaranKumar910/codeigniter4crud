<?php namespace App\Controllers; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- CSS and JavaScript links -->

<style type="text/css">
    <style type="text/css">
	#l{
		color: red;font-size: 15px;
	}
	.table thead tr th{
		color: red;font-size: 15px;
	}
	.table{
		background:rgb(0,0,0,.9);
		color: white;
	}
	.main-panel{
		overflow-x: hidden
	}

</style>
</style>
<body style="background-image: linear-gradient(200deg,#34e8eb,#ed5853,#c733e8);height: auto;">
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: white">List of Employee</h2>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#.</th>
                                <th>Employee Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>DOB</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $db = \Config\Database::connect(); 
                            $query = $db->table('employee')->get(); 
                            foreach ($query->getResult() as $row) {
                                echo '<tr>
                                        <td>'.$i++.'.</td>
                                        <td>'.$row->name.'</td>
                                        <td>'.$row->mobile.'</td>
                                        <td>'.$row->email.'</td>
                                        <td>'.$row->dob.'</td>
                                        <td><a href="'.site_url('home/edit_employee/'.$row->id).'" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a></td>
                                        <td><a  href="'.site_url('home/delete_employee/'.$row->id).'" class="delete btn btn-danger">Delete</a></td>
                                    </tr>';
                            }
                            ?>
                        </tbody>
                    </table>

                    <a href="<?php echo base_url();?>/employee">
                        <button type="button" class="btn btn-success" style="float:right;">Add Employee</button>
                    </a>
                </div>
            </div>
        </div>
    
</div>
</body>

<script>
    $(document).ready(function(){

$(".delete").click(function(event){
    alert("Delete?");
    var href = $(this).attr("href")
    var btn = this;

     $.ajax({
       type: "GET",
       url: href,
       success: function(response) {

         if (response == "Success")
         {
           $(btn).closest('tr').fadeOut("slow");
         }
         else
         {
           alert("Error");
         }

       }
     });
    event.preventDefault();
 })
});
</script>