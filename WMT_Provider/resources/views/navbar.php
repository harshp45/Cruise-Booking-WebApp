<?php
session_start();
?>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
    
      
    
      <ul class="sidebar-nav">
        <!-- <li><img src="images/DSC_0803.JPG" height="50" width="50"> -->
      <a href="/listproviders/edit">Hi,<?php echo $_SESSION['provider_name'];?></a></li>
        <li><a href="/listcruises">Cruises</a></li>
        <li><a href="/listaccesories">Accessories</a></li>
        <li><a href="/listjobs">Jobs</a></li>
        <li><a href="/listorders">Orders</a></li>
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
          <li><a href="/listproviders/edit">Hi,<?php echo $_SESSION['provider_name'];?></a></li>
        </ul>
      </div>
    </nav> 