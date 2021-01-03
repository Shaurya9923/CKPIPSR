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
                    <a href="/achievements">Achievements</a>
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
                <h1 class="display-5">Add Faculty Form</h1>
                <hr class="my-4">
                
                <button class="btn btn-success" onclick="return back()">Back</button>
            
                <form style="margin:20px;padding:20px;" method="POST" action="/faculty" enctype="multipart/form-data">                
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="facultyfirstname">First Name</label>
                            <input type="text" class="form-control" name="facultyfirstname" id="facultyfirstname" placeholder="Enter Your First Name" required value="{{old('facultyfirstname')}}">
                            @error('facultyfirstname')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror

                        </div>    
                        
                        <div class="form-group col-md-6">
                            <label for="facultylastname">Last Name</label>
                            <input type="text" class="form-control" id="facultylastname" name="facultylastname" placeholder="Enter Your Last Name" required value="{{old('facultylastname')}}">
                            @error('facultylastname')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>

                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="facultyemailid">Email ID</label>
                            <input type="email" class="form-control" id="facultyemailid" name="facultyemailid" placeholder="Email Id" required value="{{old('facultyemailid')}}">
                            @error('facultyemailid')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="facultyid">Faculty ID</label>
                            <input type="number" class="form-control" id="facultyid" name="facultyid" placeholder="Enter Faculty Id" required value="{{old('facultyid')}}">
                            @error('facultyid')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="facultydesignation">Designation</label>
                            <input type="text" class="form-control" name="facultydesignation" id="facultydesignation" placeholder="Enter Designation of faculty" required value="{{old('facultydesignation')}}">
                            @error('facultydesignation')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                        
                        <div class="form-group col-md-6">
                            <label for="facultyqualification">Qualification </label>
                            <input type="text" class="form-control" name="facultyqualification" id="facultyqualification" placeholder="Enter Qualification of faculty" required value="{{old('facultyqualification')}}">
                            @error('facultyqualification')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>

                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="joiningdate">Joining Date </label>
                            <input type="date" class="form-control" name="joiningdate" id="joiningdate" placeholder="Email" required value="{{old('joiningdate')}}">
                            @error('joiningdate')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="facultydob">Faculty Date Of Birth</label>
                            <input type="date" class="form-control" name="facultydob" id="facultydob" placeholder="Email" required value="{{old('facultydob')}}">
                            @error('facultydob')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="facultyexperience">Faculty Academic Experience</label>
                            <input type="number" class="form-control" name="facultyexperience" id="facultyexperience" placeholder="Email" required value="{{old('facultyexperience')}}">
                            @error('facultyexperience')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>        
                    </div>


                    <div style="margin-top:10px;margin-bottom: 10px">
                    Faculty Gender :
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="facultygender" id="facultygender" value="male" checked>
                            <label class="form-check-label" for="facultygender">
                        Male    
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="facultygender" id="facultygender" value="female">
                            <label class="form-check-label" for="facultygender">
                            Female
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nationalpublication">National Publications</label>
                            <input type="number" class="form-control" name="nationalpublication" id="nationalpublication" placeholder="Number of National Publication" required value="{{old('nationalpublication')}}">
                            @error('nationalpublication')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    

                        <div class="form-group col-md-6">
                            <label for="internationalpublication">International Publications</label>
                            <input type="number" class="form-control" name="internationalpublication" id="internationalpublication" placeholder="Number of International Publication" required value="{{old('internationalpublication')}}">
                            @error('internationalpublication')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="facultyachievement">Achievements</label>
                            <input type="text" class="form-control" name="facultyachievement" id="facultyachievement" placeholder="Faculty Achievement" value="{{old('facultyachievement')}}">                            
                        </div>    
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="facultyaddress">Address</label>
                            <input type="text" class="form-control" name="facultyaddress" id="facultyaddress" placeholder="Faculty living address" value="{{old('facultyaddress')}}">
                        </div>    
                    </div>

                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="facultyimage">Faculty Image</label>
                            <input type="file" class="form-control" name="facultyimage" id="facultyimage" placeholder="Image Here">
                        </div>    
                    </div>

                    <button type="submit" value="/faculty" class="btn btn-success">Add Faculty</button>
                </form>
                <!-- @if($errors->any())
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif -->
                
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