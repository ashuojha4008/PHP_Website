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
        body {
            min-height: 75vh;
            background-image: url('./Image/adminshopping.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .card{
            left: 60%;
        }

     
    </style>
</head>

<body>
    <div class="container">
        <div class="card mt-5 admin" style="width: 25rem;">
            <div class="card-body ">
                <form>
          
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold fs-3 text-danger">Admin Login</span>
                    </div>
  
  
                    <div class="form-outline mb-4">
                      <input type="username" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Username</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="button">Submit
                      </button>
                    </div>
                  </form>
                
            </div>
          </div>
    </div>
</body>

</html>