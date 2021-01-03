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
                    <a href="/news">News And Announcements</a>
                </li>
                
                <li>
                    <a href="/event">Events</a>
                </li>

                <li>
                    <a href="/achievement" class="active">Achievements</a>
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
                <h1 class="display-5">Edit Achievement</h1>
                <hr class="my-4">
                
                <button class="btn btn-success" onclick="return back()">Back</button>
            
                <form style="margin:20px;padding:20px;" method="POST" action="/achievement/{{$achieve->achievementid}}" enctype="multipart/form-data">
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="newsid">Achievement Id</label>
                            <input type="text" class="form-control" name="achievementid" id="achievementid" placeholder="Enter Achievement Id" value="{{$achieve->achievementid}}">
                            @error('achievementid')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                        <div class="form-group col-md-6">
                            <label for="newstitle">Achievement Title</label>
                            <input type="text" class="form-control" id="achievementtitle" name="achievementtitle" placeholder="Enter Achievement Title" value="{{$achieve->achievementtitle}}">
                            @error('achievementtitle')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>

                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="newsdetail">Achievement Details</label>
                            <input type="text" class="form-control" id="achievementdetail" name="achievementdetail" placeholder="Achievement Detail " value="{{$achieve->achievementdetail}}">
                            @error('achievementdetail')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>                            
                    </div>
                    
                    
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="newstime">Date</label>
                            <input type="date" class="form-control" name="achievementdate" id="achievementdate" placeholder="Achievement Date" value="{{$achieve->achievementdate}}">
                            @error('achievementdate')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>                        
                    </div> 
                    <div class="form-row">
                        <div class="form-group">
                            <label for="achievementimage">Achievement Image</label>
                            <input type="file" class="form-control" name="achievementimage" id="achievementimage" placeholder="Image Here" value="{{$achieve->achievementimage}}">
                            @error('achievementimage')
                            <div style="color:red;margin:10px">{{$message}}</div>
                            @enderror
                        </div>    
                    </div>                    
                    <button type="submit" class="btn btn-success">Edit</button>
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