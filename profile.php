<?php include 'header.php';?>

    <div class="card" >
        <div class="card-header">
          <h5 style="float: left;">&nbsp;User Profile </h5>
          <a class="btn btn-info" href="index.php" style="float: right;">Back</a>
        </div>
        <div class="card-body" style="width: 50rem; margin:0 auto;">
             <form  autocomplete="off">
               <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter name" autocomplete="nope" >
               
              </div>
               <div class="form-group">
                <label for="Username">Username</label>
                <input type="text" class="form-control" name="username" id="uaername" aria-describedby="username" placeholder="Enter username" autocomplete="nope" >
               
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="nope" >
               
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="new_password" >
              </div>
              
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

<?php include 'footer.php' ?>