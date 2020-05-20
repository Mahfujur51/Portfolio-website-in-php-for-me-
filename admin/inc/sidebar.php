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
        <a class="nav-link" data-toggle="collapse" href="#ui-portfolio" aria-expanded="false" aria-controls="ui-portfolio">
          <span class="menu-title">Working Portfolio</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-file-image menu-icon"></i>
        </a>
        <div class="collapse" id="ui-portfolio">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="addportfolio.php">Add Portfolio</a></li>
            <li class="nav-item"> <a class="nav-link" href="showporfolio.php">Manage Portfolio</a></li>
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
        <a class="nav-link" data-toggle="collapse" href="#ui-working" aria-expanded="false" aria-controls="ui-working">
          <span class="menu-title">Working Field</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-laptop menu-icon"></i>
        </a>
        <div class="collapse" id="ui-working">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="addworking.php">Add Working</a></li>
            <li class="nav-item"> <a class="nav-link" href="showworking.php">Manage Work</a></li>
          </ul>
        </div>
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
    

    </ul>
  </nav>