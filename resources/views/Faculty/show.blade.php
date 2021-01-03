<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin DashBoard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body>
<div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>DashBoard</h3>
            </div>
            <ul class="lisst-unstyled components">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>            

                <li>
                    <a href="/faculty" class="active">Faculties</a>
                </li>

                <li>
                    <a href="/news">News And Announcements</a>
                </li>
                
                <li>
                    <a href="/event">Events</a>
                </li>

                <li>
                    <a href="/achievement">Achievements</a>
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
                <h1 class="display-5">Faculty Details</h1>
                <hr class="my-4">
                
                <button class="btn btn-success" style="margin-bottom:20px" onclick="return back()">Back</button>
                <div class="container">
                    <img class="card-img-top" src="{{ asset('uploads/FacultyImage/'.$fac->facultyimage) }}" alt="Card image" style="width:200px;height:200px">
                    <!-- {{$fac->facultyimage}}                       -->
                </div>

                <div class="container"> 
                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">First Name :</div>
                        <div class="col-8">{{$fac->facultyfirstname}}</div>
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Last Name :</div>
                        <div class="col-8">{{$fac->facultylastname}}</div>
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Email ID :</div>
                        <div class="col-8">{{$fac->facultyemailid}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Faculty ID :</div>
                        <div class="col-8">{{$fac->facultyid}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Designation :</div>
                        <div class="col-8">{{$fac->facultydesignation}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Qualification :</div>
                        <div class="col-8">{{$fac->facultyqualification}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Joining Date :</div>
                        <div class="col-8">{{$fac->joiningdate}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Date Of Birth :</div>
                        <div class="col-8">{{$fac->facultydob}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Gender :</div>
                        <div class="col-8">{{$fac->facultygender}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Experience :</div>
                        <div class="col-8">{{$fac->facultyexperience}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">National Publications :</div>
                        <div class="col-8">{{$fac->nationalpublication}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">International Publications :</div>
                        <div class="col-8">{{$fac->internationalpublication}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Achievements :</div>
                        <div class="col-8">{{$fac->facultyachievement}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Address :</div>
                        <div class="col-8">{{$fac->facultyaddress}}</div>
                    </div>


                    <!-- <form>                
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">First Name:</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultyfirstname}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clientid">Last Name</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultylastname}}">
                            </div>                        
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">Email Id</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultyemailid}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clientid">Faculty Id</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultyid}}">
                            </div>                        
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">Designation</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultydesignation}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clientid">Qualification</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultyqualification}}">
                            </div>                        
                        </div>

                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">Joining Date</label>
                                <input type="text" class="form-control" readonly value="{{$fac->joiningdate}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clientid">Date Of Birth</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultydob}}">
                            </div>                        
                        </div>

                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">Faculty Gender</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultygender}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clientid">Faculty Experience</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultyexperience}}">
                            </div>                        
                        </div>

                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">National Publication</label>
                                <input type="text" class="form-control" readonly value="{{$fac->nationalpublication}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clientid">International Publication</label>
                                <input type="text" class="form-control" readonly value="{{$fac->internationalpublication}}">
                            </div>                        
                        </div>

                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="clientid">Achievements</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultyachievement}}">
                            </div>                        
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="clientid">Address</label>
                                <input type="text" class="form-control" readonly value="{{$fac->facultyaddress}}">
                            </div>                        
                        </div>
                    </form>                     -->
                </div>
                <button class="btn btn-primary"><a href="../{{$fac->facultyid}}/edit">Edit Faculty</a></button>



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
     <script>
      function back(){
        window.history.back();
      }
    </script>

</body>

</html>