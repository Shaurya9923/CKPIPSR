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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <style>
    .container {
        padding: 2rem 0rem;
        }

    h4 {
        margin: 2rem 0rem 1rem;
        }

    .table-image {
        td, th {
            vertical-align: middle;
        }   
    }    
    </style>
    
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
                    <a href="/achievement">Achievements</a>
                </li>

                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                </li>
            </ul>
        </nav>

        <div id="content">        
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn  btn-outline-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                </div>
            </nav>    

            <div class="container-fluid">
                <h1 class="display-5">Events</h1>
                <hr class="my-4">
                <button class="btn btn-primary" style="margin-bottom:20px"><a href="event/create">Add Event</a></button>
                    
                    @if(session('messageadd'))
                        <div class="alert alert-success">{{session('messageadd')}}</div>
                    @endif

                    @if(session('messageup'))
                        <div class="alert alert-success">{{session('messageup')}}</div>
                    @endif

                    @if(session('messagedel'))
                        <div class="alert alert-danger">{{session('messagedel')}}</div>
                    @endif
                
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered" id="myTable">
                                <thead>
                                <tr class="bg-dark text-light">
                                    <th scope="col">Event Title</th>
                                    <th scope="col">Event Type</th>
                                    <th scope="col">Event Date</th>                                    
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($eve as $event)
                                <tr>                                
                                    <td scope="row">{{$event->eventtitle}}</td>
                                    <td>{{$event->eventtype}}</td>
                                    <td>{{$event->eventdate}}</td>                                    
                                    <td>
                                    <button type="button" class="btn btn-primary"><a href="event/{{$event->eventid}}/show"><i class="far fa-eye"></i></a></button>
                                    <button type="button" class="btn btn-success"><a href="event/{{$event->eventid}}/edit"><i class="fas fa-edit"></i></a></button>
                                    <button type="button" class="btn btn-danger"><a href="event/{{$event->eventid}}/delete"><i class="far fa-trash-alt"></i></a></button>
                                    </td>                                
                                </tr>                            
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button class="btn btn-info" onclick="return back()">Back</button>




                
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
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
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
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>