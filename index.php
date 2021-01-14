<?php
include('config.php');
$query=("SELECT * FROM user");
$stmt=$conn->prepare($query);
    // executer la requette
$stmt->execute();
$result=$stmt->get_result();
//pre_r($result)
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   
</head>
  <body class="bg-light">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h3 class="text-center text-info">Advenced crud using php and mysql</h3>
                  <hr>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  <h3 class="text-center text-info">Add Record</h3>
                  <form method="post" action="actions.php" enctype="multipart/form-data">
                    <div class="form-group">
                       
                        <input id="my-input" class="form-control" type="text" placeholder ="User Name" name="name">
                    </div>
                    <div class="form-group">
                       
                        <input id="my-input" class="form-control" type="text" placeholder ="User Email" name="email">
                    </div>
                    <div class="form-group">
                       
                        <input id="my-input" class="form-control" type="text" placeholder ="User Phone" name="phone">
                    </div>
                    <div class="form-group">
                       
                        <input id="my-input" class="form-control" type="file"  name="image">
                    </div>
                    <div class="form-group">
                       <button type="submit" name="add" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> Add</button>
                       <button type="submit" name="update" class="btn btn-warning btn-block"><i class="fas fa-edit"></i> Edit</button>
                        
                    </div>
                      
                  </form>
              </div>
              <div class="col-md-8">
                <h3 class="text-center text-info">Records in database :</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Eamil</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                    <?php
                    while($row=($result->fetch_assoc())){ ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><img src="<?php echo $row['image'];?>" width="40px" height="20px"></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td>
                                
                                <button type="submit" name="update" class="btn btn-warning "><i class="fas fa-edit"></i> Edit</button>
                                <button type="submit" name="add" class="btn btn-danger "><i class="fas fa-trash"></i> Delete</button>
                       
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                   
                </table>
              </div>
          </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>