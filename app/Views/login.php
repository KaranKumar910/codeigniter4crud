<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
    .row{
        margin-left:30px ;
        
    }
    .container{
        margin-top: 10%;
        margin-left: 30%;
    }
</style>
<body style="background-image: linear-gradient(200deg,#34e8eb,#ed5853,#c733e8);height: auto;">
<!-- <div data-aos="flip-left"></div> -->
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <div data-aos="flip-left">  
                    <form  method="POST" >
                        <div class="card card-primary">
                            <div class="card-header">
                                <strong><i class="fa fa-plus"></i> Login</strong>
                            </div>

                            <div class="card-body">
                            
                                <div class="form-group">
                                    <label><strong>Enter Email</strong></label>
                                    <input type="text" name="email" placeholder="Enter Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><strong>Enter Password</strong></label>
                                    <input type="Password" name="password" placeholder="Enter Password" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url()?>/sign_up">
                                    <button type="button"  class="btn btn-success" style="float:right;"> signup</button>
                                </a>
                                <button type="submit" name="submit" class="btn btn-success" style="float: left;">Login</button>
                            </div>

                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
  AOS.init();
</script>