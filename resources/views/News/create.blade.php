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
                    <a href="/faculty">Faculties</a>
                </li>

                <li>
                    <a href="/news" class="active">News And Announcements</a>
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
                <h1 class="display-5">Add News And Announcement Form</h1>
                <hr class="my-4">
                
                <button class="btn btn-success" onclick="return back()">Back</button>
            
                <form style="margin:20px;padding:20px;" method="POST" action="/news" enctype="multipart/form-data">                
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="newsid">News Id</label>
                            <input type="text" class="form-control" name="newsid" id="newsid" placeholder="News Id" value="{{old('newsid')}}"}}>
                            @error('newsid')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="newstitle">Title</label>
                            <input type="text" class="form-control" id="newstitle" name="newstitle" placeholder="News Title" value="{{old('newstitle')}}">
                            @error('newstitle')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>

                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="newsdetail">Details</label>
                            <input type="text" class="form-control" id="newsdetail" name="newsdetail" placeholder="News Details" value="{{old('newsdetail')}}">
                            @error('newsdetail')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>                            
                    </div> 

                    <div class="form-row">                        
                        <div class="form-group col-md-6">
                            <label for="facultyid">Date</label>
                            <input type="date" class="form-control" id="newstime" name="newstime" placeholder="Enter Date" value="{{old('newstime')}}">
                            @error('newstime')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>                                       
                    
                                 
                    
                    <!-- <div class="form-row">
                        <div class="form-group">
                            <label for="facultyimage">Event Image</label>
                            <input type="file" class="form-control" name="facultyimage" id="facultyimage" placeholder="Image Here">
                        </div>    
                    </div> -->

                    <button type="submit" class="btn btn-success">Add</button>
                </form>


                
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