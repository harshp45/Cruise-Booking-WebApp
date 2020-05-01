<?php
session_start();
?>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
    
      
    
      <ul class="sidebar-nav">
        <!-- <li><img src="images/DSC_0803.JPG" height="50" width="50"> -->
      <a href="#">Hi,<?php echo $_SESSION['user_name'];?></a></li>
        <li><a href="/listusers">Users</a></li>
        <li><a href="/listproviders">Providers</a></li>
        <li><a href="/listplaces">Places</a></li>
        <li><a href="/listhotels">Hotels</a></li>
        <li><a href="/listcountry">Countries</a></li>
        <li><a href="/liststate">States</a></li>
        <li><a href="/listcity">City</a></li>
        
      </ul>
      
    </div>
    <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
          <!-- <img src="images/DSC_0803.JPG" height="50" width="50"> -->
            </a>
          </li>
          <li><a href="#">Hi,<?php echo $_SESSION['user_name'];?></a></li>
        </ul>
      </div>
    </nav> 