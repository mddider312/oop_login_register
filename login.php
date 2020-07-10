<?php include 'header.php';?>

    <div class="card">
        <h5 class="card-header text-center">&nbsp;User Login</h5>
        <div class="card-body" style="width: 30rem; margin:0 auto;">
            <form  autocomplete="off">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="nope" >
               
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="new_password" >
              </div>
              
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

<?php include 'footer.php' ?>