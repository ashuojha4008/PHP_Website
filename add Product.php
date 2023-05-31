<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="contain.css">

    <title>Document</title>
    <style>
        body{
            background-color: #A7727D;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card mt-5 mb-5" style="width: 50rem;">
            <div class="card-body">
              <h3 class="card-title">Add Products</h3>

              <form action="">

                <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" placeholder="Name">
                    </div>
                  </div>

                  <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Price:</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" placeholder="Price">
                    </div>
                  </div>

                  <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Image:</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" placeholder="Quantity">
                    </div>
                  </div>

                  <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" placeholder="Description">
                    </div>
                  </div>

                  <div class="form-group row mt-5">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                    
                    <div class="col-sm-10">
                      <!-- <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> -->

                      <button class="btn btn-danger btn-lg btn-block" type="button">Active
                    </button>
                    <button class="btn btn-success btn-lg btn-block" type="button">Inactive
                    </button>
                    </div>
                  </div>

                  
                  <div class="mt-5">
                    <button class="btn btn-primary btn-lg btn-block" type="button">Submit
                    </button>
                  </div>

              </form>
              
            </div>
          </div>
    </div>
</body>
</html>