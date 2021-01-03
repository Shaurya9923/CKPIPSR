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
                    <a href="/event" class="active">Events</a>
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
                <h1 class="display-5">Event Details</h1>
                <hr class="my-4">
                
                <button class="btn btn-success" style="margin-bottom:20px" onclick="return back()">Back</button>
                <div class="container">
                    <img class="card-img-top" src="{{ asset('uploads/EventImage/'.$eve->eventimage) }}" alt="Card image" style="width:200px;height:200px">
                </div>

                <div class="container">                

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Event Id :</div>
                        <div class="col-8">{{$eve->eventid}}</div>
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Title :</div>
                        <div class="col-8">{{$eve->eventtitle}}</div>
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Type :</div>
                        <div class="col-8">{{$eve->eventtype}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Date :</div>
                        <div class="col-8">{{$eve->eventdate}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Coordinator :</div>
                        <div class="col-8">{{$eve->eventcoordinator}}</div>                        
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Conducted By :</div>
                        <div class="col-8">{{$eve->eventconductedby}}</div>
                    </div>

                    <div class="row" style="font-size:20px;font-weight:400;padding:10px;color:black">
                        <div class="col-4">Event Details :</div>
                        <div class="col-8">{{$eve->eventdetail}}</div>
                    </div>
                    <!-- <form>                
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">Event Id</label>
                                <input type="text" class="form-control" readonly value="{{$eve->eventid}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clientid">Title</label>
                                <input type="text" class="form-control" readonly value="{{$eve->eventtitle}}">
                            </div>                        
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">Type</label>
                                <input type="text" class="form-control" readonly value="{{$eve->eventtype}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clientid">Date</label>
                                <input type="text" class="form-control" readonly value="{{$eve->eventdate}}">
                            </div>                        
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">Co-ordinator</label>
                                <input type="text" class="form-control" readonly value="{{$eve->eventcoordinator}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="clientid">Conducted By </label>
                                <input type="text" class="form-control" readonly value="{{$eve->eventconductedby}}">
                            </div>                        
                        </div>

                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="clientid">Event Details</label>
                                <textarea class="form-control" readonly rows=5 value="{{$eve->eventdetail}}"></textarea>
                            </div>                            
                        </div>                    
                    </form>                     -->
                </div>
                <button class="btn btn-primary"><a href="../{{$eve->eventid}}/edit">Edit Faculty</a></button>



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