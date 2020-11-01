<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript" src="{{asset('resources/js/jquery-3.3.1.slim.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('resources/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('resources/js/bootstrap.bundle.min.js')}}">
  </script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<style type="text/css">
  .wrapper{
  display: flex;
  width: 100%;
  align-items: stretch;
}

#sidebar{
  background: #7386D5;
  color: #fff;
  transition: all 0.3s;
  min-width: 250px;
  max-width: 250px;
  min-height: 100vh;
  width: 250px;
  position: fixed;
  top: 0;
  left: 0;
  height: 100vh;
  z-index: 9999;

}
#sidebar.active{
  margin-left: -250px;

}
a[data-toggle="collapse"]{
  position: relative;
}
.dropdown-toggle::after{
  display: block;
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
}
@media(max-width: 768px){
  #sidebar{
    margin-left: 0px;
  }
  #sidebar.active{
    margin-left: -80px !important;
    min-width: 80px;
    max-width: 80px;
    text-align: center;
  }
  #sidebar .sidebar-header strong{
  display: none;
  }

  #sidebar.active .sidebar-header h3{
  display: none;
  }
  #sidebar.active .sidebar-header strong{
  display: block;
  }
  #sidebar.active ul li a{
  padding: 20px 10px;
  font-size: 0.85em;
  }
  #sidebar.active ul li a i{
  margin-right: 0;
  display:  block;
  font-size: 1.8em;
  margin-bottom: 5px;
  }
  #sidebar .active ul ul a{
  padding: 10px !important;
  }
  .dropdown-toggle::after{
  top: auto;
  bottom: 10px;
  right: 50%;
  -webkit-transform:translateX(50%);
  -ms-transform:translateX(50%);
  transform: translateX(50%);
  transform: translateY(-50%);
  position: absolute; 

  }
}

@import "http://fonts.googlepis.com/css?family=Poppins:300,400,500,600,700";

body{
  font-family: 'Poppins', sans-serif;
  background: #fafafa;
}
p
{
  font-family: 'Poppins', sans-serif;
  font-size: 1.1em;
  font-weight: 300;
  line-height: 1.7em;
  color: #999;
}
a,a:hover,a:focus{
  color: inherit;
  text-decoration: none;
  transition: all 0.3s;
}

#sidebar .sidebar-header{
  padding: 20px;
  background: #6d7fcc;
}

#sidebar ul.components{
  padding: 20px 0;
  border-bottom: 1px solid #47748b;
}
#sidebar ul p{
  color: #fff;
  padding: 10px;
}

#sidebar ul li a{
  padding: 10px;
  font-size: 1.1em;
  display: block;
  text-align: left;
}

#sidebar ul li a:hover{
  color: #7386D5;
  background: #fff;
}

#sidebar ul li.active > a,a[aria-expanded="true"]{
  color:#fff;
  background: #6d7fcc;

}
ul ul a{
  font-size: 0.9em !important;
  padding-left: 30px !important;
  background: #6d7fcc;
}

#sidebar .sidebar-header strong{
  display: none;
}

#sidebar.active .sidebar-header h3{
  display: none;
}
#sidebar.active .sidebar-header strong{
  display: block;
}

#sidebar.active ul li a{
  padding: 20px 10px;
  text-align: centers;
  font-size: 0.85em;
}
#sidebar.active ul li a i{
  margin-right: 0;
  display:  block;
  font-size: 1.8em;
  margin-bottom: 5px;
}
#dismiss{
  width: 35px;
  height: 35px;
  position: absolute;
  top: 10px;
  right: 10px;
}
#sidebar .active ul ul a{
  padding: 10px !important;
}

#sidebar.active .dropdown-toggle::after{
  top: auto;
  bottom: 10px;
  right: 50%;
  -webkit-transform:translateX(50%);
  -ms-transform:translateX(50%);
  transform: translateX(50%);

}
a[data-toggle="collapse"]{
  position: relative;
}
.overlay{
  display: none;
  position: fixed;
  width: 100vw;
  height: 100vw;
  background: rgba(0,0,0,0.7);
  z-index: 998;
  opacity: 0;
  transition: all 0.5s ease-in-out;
}
.overlay.active{
  display: block;
  opacity: 1;
}

</style>
<script type="text/javascript">
  
  $(document).ready(function()
  {
    $("#sidebar").mCustomScrollbar({
      theme: 'minimal'
    });

    $('#dismiss, .overlay').on('click',function(){
      $('#sidebar').removeClass('active');
      $('.overlay').removeClass('active');
    });


      $('#sidebarCollapse').on('click',function(){
      $('#sidebar').addClass('active');
      $('.overlay').addClass('active');

      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded==true]').attr('aria-expanded', 'false');
    });
  });
  

</script>


  
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar"> 

      <div id="dismiss">
          <i class="fas fa-arrow-left"></i>        
      </div>
      <div class="sidebar-header">
      <h3>Bootstrap Sidebar</h3>
      <strong>BS</strong>
    </div>

    <ul class="list-unstyled components">
      <p>Dummy Heading</p>
      <li class="active">
        <a href="#homeSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
          <i class="fas fa-home"></i>
        Home</a>
        <ul class="collapse list-unstyled" id="homeSubMenu">
          <li>
            <a href="#">Home 1</a>
          </li>
          <li>
            <a href="#">Home2</a>
          </li>
          <li>
            <a href="#">Home3</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fas fa-copy"></i>
        About</a>

      </li>
    
    </ul>
    </nav>

    <div id="content">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
            <span>Toggle Bar</span>
          </button>
        </div>
      </nav>

    </div>
    <div class="overlay"></div>
  </div>

  