<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin DashBoard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>DashBoard</h3>
            </div>
            <ul class="lisst-unstyled components">
                <li>
                    <a href="index.html" class="active">Home</a>
                </li>            

                <li>
                    <a href="/faculty">Faculties</a>
                </li>

                <li>
                    <a href="/news">News And Announcements</a>
                </li>
                
                <li>
                    <a href="/event">Events</a>
                </li>

                <li>
                    <a href="/achievement">Achievement</a>
                </li>

                <li>
                    <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                </li>
            </ul>
        </nav>

        <div id="content">        
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn  btn-outline-success">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                </div>
            </nav>    

            <div class="container-fluid">
                <h1 class="display-5">Home</h1>
                <hr class="my-4">
                <div class="container">
                    
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12"  style="margin-bottom:20px">
                        <div class="card  bg-primary"  style="height:300px">
                            <i class="fa fa-chalkboard-teacher fa-6x" style="margin-right:auto;padding-top:20px;color:white"></i>
                            <div class="card-body">
                                <h2 class="card-title" style="color:white">Faculties</h2>
                                <h3 class="card-text" style="color:white ">No Of Faculties : {{$count1}} </h3>
                                <a href="/faculty" class="btn btn-dark">Edit</a>
                            </div>
                        </div>                
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12"  style="margin-bottom:20px;">
                        <div class="card bg-danger"  style="height:300px">
                            <i class="fa fa-bullhorn fa-6x" style="margin-right:auto;padding-top:20px;color:white"></i>
                            <div class="card-body">
                                <h2 class="card-title" style="color:white">News And Announcements</h2>
                                <h3 class="card-text" style="color:white ">Total : {{$count4}} </h3>
                                <a href="#" class="btn btn-dark">Edit</a>
                            </div>
                        </div>                
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12"  style="margin-bottom:20px">
                        <div class="card"  style="height:300px;background-color:orange">
                            <i class="fa fa-calendar fa-6x" style="margin-right:auto;padding-top:20px;color:white"></i>
                            <div class="card-body">
                                <h2 class="card-title" style="color:white">Events</h2>
                                <h3 class="card-text" style="color:white ">Total : {{$count2}} </h3>
                                <a href="#" class="btn btn-dark">Edit</a>
                            </div>
                        </div>                
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12"  style="margin-bottom:20px">
                        <div class="card  bg-info"  style="height:300px">
                            <i class="fa fa-graduation-cap fa-6x" style="margin-right:auto;padding-top:20px;color:white"></i>
                            <div class="card-body">
                                <h2 class="card-title" style="color:white">Courses</h2>
                                <h3 class="card-text" style="color:white ">Total : 1 </h3>
                                <a href="#" class="btn btn-dark">Edit</a>
                            </div>
                        </div>                
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 col-12"  style="margin-bottom:20px">
                        <div class="card  bg-secondary"  style="height:300px">
                            <i class="fa fa-trophy fa-6x" style="margin-right:auto;padding-top:20px;color:white"></i>
                            <div class="card-body">
                                <h2 class="card-title" style="color:white">Achievements</h2>
                                <h3 class="card-text" style="color:white ">Total : {{$count3}} </h3>
                                <a href="#" class="btn btn-dark">Edit</a>
                            </div>
                        </div>                
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12 col-12"  style="margin-bottom:20px">
                        <div class="card  bg-primary"  style="height:300px">
                            <i class="fa fa-credit-card fa-6x" style="margin-right:auto;padding-top:20px;color:white"></i>
                            <div class="card-body">
                                <h2 class="card-title" style="color:white">Fees</h2>
                                <h3 class="card-text" style="color:white ">Total : 7 </h3>
                                <a href="#" class="btn btn-dark">Edit</a>
                            </div>
                        </div>                
                    </div>

                <div>


                </div>
            </div>

        </div>    
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

        <script>

            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });

        </script>


</body>

</html>