<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style type="text/css">
    body{
        background-color: rgb(194, 230, 192);
    }
    .bg-image{
        background: url(uganda.jpg); 
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;         
         background-position: center center;
    
    }
    .logo{
        height: 40px;
        width: 40px;
    }
    .img-izq{
        height: 355px;
    }
</style>        
</head>
<body>

    <div class="main">
 
        <div class="container-fluid">
            

            <div class="row">
                <div class="col-2  p-0">
                    <!--NAV BAR -->                  
                    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark min-vh-100 sticky-top">
                    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi me-2" width="40px" height="32px">
                            <use xlink:href="#bootstrap"></use></svg>
                            <span class="fs-4">Sidebarr</span>                        
                    </a>
                    
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">
                                <svg class="bi me-2" width="16" height="15">
                                    <use xlink:href="#home"></use></svg>
                                    Home
                            </a>                            
                            
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">
                                <svg class="bi me-2" width="16" height="15">
                                    <use xlink:href="#home"></use></svg>
                                    Dashboard
                            </a>                            
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">
                                <svg class="bi me-2" width="16" height="15">
                                    <use xlink:href="#home"></use></svg>
                                    Orders
                            </a>                            
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white" aria-current="page">
                                <svg class="bi me-2" width="16" height="15">
                                    <use xlink:href="#home"></use></svg>
                                    Containers
                            </a>                            
                        </li>

                        
                    <hr>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    
                    </div>
                </div>
                
                <div class="col-10 bg-info p-0">
                    <nav class="navbar navbar-expand-lg navbar-dark"
                    style="background-color: black">
                   <a class="navbar-brand" href="#">
                     Geeksforgeeks
                   </a>
            
                   <div class="collapse navbar-collapse">
                       <ul class="navbar-nav mr-auto">
                           <li class="nav-item active">
                               <a class="nav-link" href="#">
                                 Home
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">
                                 Course
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="#">
                                 Job Portal
                               </a>
                           </li>
                       </ul>
                       <form class="form-inline my-2 my-lg-0">
                           <input class="form-control mr-sm-2"
                                  type="search"
                                  placeholder="Search"
                                  aria-label="Search" />
                       </form>
                   </div>
               </nav>
               <!-- ==========Contenido ========== -->
               <div class="container p-5">
                <div class="row">

                        <div class="col-md-4 p-1">
                        <div class="card">
                            <img src="https://ui-avatars.com/api/?size=256" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="card">
                            <img src="https://ui-avatars.com/api/?size=256" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-1">
                        <div class="card">
                            <img src="https://ui-avatars.com/api/?size=256" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
            
        </div>
    </div>
</body>
</html>