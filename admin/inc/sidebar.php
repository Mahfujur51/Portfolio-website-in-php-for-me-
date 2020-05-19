  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="images/faces/face1.jpg" alt="profile">
            <span class="login-status online"></span> <!--change to offline or busy as needed-->              
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2">Mahfujur</span>
            <span class="text-secondary text-small">Developer</span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <span class="menu-title">Dashboard</span>
          <i class="mdi mdi-home menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-title">About</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-account-box-outline menu-icon"></i>


        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="addabout.php">Add About</a></li>
            <li class="nav-item"> <a class="nav-link" href="showabout.php">Manage About</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-education" aria-expanded="false" aria-controls="ui-education">
          <span class="menu-title">Education</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-book-open-variant menu-icon"></i>
        </a>
        <div class="collapse" id="ui-education">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="addeducation.php">Add Education</a></li>
            <li class="nav-item"> <a class="nav-link" href="showeducation.php">Manage Education</a></li>
          </ul>
        </div>
      </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-experience" aria-expanded="false" aria-controls="ui-experience">
          <span class="menu-title">Experience</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-poll menu-icon"></i>
        </a>
        <div class="collapse" id="ui-experience">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="addexperience.php">Add Expericen</a></li>
            <li class="nav-item"> <a class="nav-link" href="showexperience.php">Manage Experience</a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-title">Icons</span>


          <i class="mdi mdi-contacts menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="updateproject.php">
          <span class="menu-title">Update Project</span>
          <i class="mdi mdi-clipboard-check menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">
          <span class="menu-title">Message</span>
          <i class="mdi mdi-message menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
          <span class="menu-title">Tables</span>
          <i class="mdi mdi-table-large menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Sample Pages</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
          </ul>
        </div>
      </li>

    </ul>
  </nav>