<!DOCTYPE html>
<html>
<head>
    <title>Demo Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <link rel="stylesheet" href="./app/css/icons.css">
    <link rel="stylesheet" href="./app/css/materialize.min.css">
    <link rel="stylesheet" href="./app/css/style.css">
    <link rel="stylesheet" href="./app/views/file.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- <form method="POST" action="/savefile" ">
        <button type="submit">Save</button>
    </form> -->
    <div id="banner">
        <div class="row" style="margin-bottom: 0px;">
        <div class="firstheader container center valign-wrapper" style="position:relative; float:left; padding-top:10px; margin-left:8%; margin-right: 30%;">
            <div class="uplbheader" style="position:relative;">
              <img class="banner-img" src="https://uplbosa.org/ui/images/uplb-logo2.png" style="width:100px;height: auto;">
            </div>
            <div class="upheader" style="position:relative;padding-left:10px;">
              <h5 class="center txtlogo uplbtext">University of the Philippines Los Baños</h5>
              <h4 class="center txtlogo osatext">Office of the Vice Chancellor for Student Affairs</h4>
            </div>
        </div>
        <div class="secondheader container center valign-wrapper" style="position:relative; float:left; padding-top:10px; margin-left:8%;">
            <div class="osaheader center" style="position:relative;">
              <img class="banner-img" src="https://uplbosa.org/ui/images/uplb-logo2.png">
            </div>
            <div class="upheader" style="position:relative; padding-left:2%">
              <h4 class="center txtlogo">Office of the Vice Chancellor for Student Affairs</h4>
            </div>
        </div>
        <div class="thirdheader container center" style="position:relative; float:left; padding-top:10px; margin-left:25%;">
            <div class="osaheader center" style="position:relative;">
              <img class="banner-img" src="https://uplbosa.org/ui/images/uplb-logo2.png">
            </div>
        </div>
    </div></div>

    <div id="prenav" class="tobefixed z-depth-3">
        <nav>
        <div class="nav-wrapper">
          <ul>
            <a id="sidenavbutton" href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="margin-left:2%;">menu</i></a>
          </ul>
                    <a href="https://uplbosa.org/" onclick="homepage()" id="osalogonav" class="brand-logo left" style="display:none;"><img src="https://uplbosa.org/ui/images/uplb-logo2.png" style="width: 50px; height: 50px; margin-top: 5px;"></a>
              <a href="https://uplbosa.org/" onclick="homepage()" id="osalogonav2" class="brand-logo center" style="display:none;"><img src="https://uplbosa.org/ui/images/uplb-logo2.png" style="width: 50px; height: 50px; margin-top: 5px;"></a>
          <div>
            <ul class="left hide-on-med-and-down">
                          <li><a href="https://uplbosa.org/">Home</a></li>
                          <li><a href="https://uplbosa.org/bulletin">Bulletin</a></li>
                                    <li style="min-width:100px;"><a class="dropdown-button" href="#!" data-activates="dropdown-studentOrgs">Student Orgs<i class="material-icons right">arrow_drop_down</i></a><ul id="dropdown-studentOrgs" class="dropdown-content" style="width: 310.688px; position: absolute; top: 0px; left: 255.55px; overflow: hidden; display: none; opacity: 1;">
        <li class="active unclick"><a class="black-text" href="#">Student Orgs</a></li>
        <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/orgs">Recognized Orgs</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/page-recognition">Apply For Recognition</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/org/guidelines">Recognition Guidelines</a></li>
          <li class="divider"></li><li class="divider"></li>
          </ul></li>
                          <li style="min-width:100px;"><a class="dropdown-button" href="#!" data-activates="dropdown-financialAssistance">Financial Assistance<i class="material-icons right">arrow_drop_down</i></a><ul id="dropdown-financialAssistance" class="dropdown-content" style="width: 206.413px; position: absolute; top: 0px; left: 412.125px; overflow: hidden; display: none; opacity: 1;">
        <li class="active unclick"><a class="black-text" href="#">Financial Assistance</a></li>
        <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/scholarships">Scholarships</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/assistantships">SA Program</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/page-sts">Socialized Tuition</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/slb">SLB Program</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/cashloans">Cash Loan Program</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/assistantships/vacancies">Job Vacancies</a></li>
          <li class="divider"></li><li class="divider"></li>
          </ul></li>
                          <li style="min-width:100px;"><a class="dropdown-button" href="#!" data-activates="dropdown-guidanceServices">Guidance Services<i class="material-icons right">arrow_drop_down</i></a><ul id="dropdown-guidanceServices" class="dropdown-content" style="width: 192.025px; position: absolute; top: 0px; left: 618.538px; overflow: hidden; display: none; opacity: 1;">
        <li class="active unclick"><a class="black-text" href="#">Guidance Services</a></li>
        <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/division/gcd">Guidance Counselors And Psychologists</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/jobplacement">University Job Fair</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/jobplacement/partners">Job Placement</a></li>
          <li class="divider"></li><li class="divider"></li>
          </ul></li>
                          <li style="min-width:100px;"><a class="dropdown-button" href="#!" data-activates="dropdown-aboutOsa&nbsp;&nbsp;&nbsp;&nbsp;">About OSA&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons right">arrow_drop_down</i></a><ul id="dropdown-aboutOsa&nbsp;&nbsp;&nbsp;&nbsp;" class="dropdown-content" style="width: 156.5px; position: absolute; top: 0px; left: 810.563px; overflow: hidden; display: none; opacity: 1;">
        <li class="active unclick"><a class="black-text" href="#">About OSA&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/page-mission">What Is OSA?</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/page-osam">What Is OSAM?</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/stories">News</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/page-director">Message From The Director</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/division">OVCSA Divisions</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/contact">Contact Us</a></li>
          <li class="divider"></li><li class="divider"></li>
          </ul></li>
                          <li style="min-width:100px;"><a class="dropdown-button" href="#!" data-activates="dropdown-downloads">Downloads<i class="material-icons right">arrow_drop_down</i></a><ul id="dropdown-downloads" class="dropdown-content" style="width: 143.488px; position: absolute; top: 0px; left: 967.063px; overflow: hidden; display: none; opacity: 1;">
        <li class="active unclick"><a class="black-text" href="#">Downloads</a></li>
        <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/download/saseparation">S.A. Separation Form</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/download/acadcal2019">Academic Calendar</a></li>
          <li class="divider"></li><li class="divider"></li>
              <li><a class="white-text" href="https://uplbosa.org/download/teldir2017">Telephone Directory</a></li>
          <li class="divider"></li><li class="divider"></li>
          </ul></li>
                      </ul>
            <ul class="right hide-on-med-and-down" style="height:65px;max-height:65px;">
                                                                          <li id="buttonlogin"><a class="loginbtn btn modal-trigger upgreen2" href="#loginmodal">Log In</a></li>
                            <li id="profiletab" style="background-color: transparent; margin-top:3px; display:none;"><a class="dropdown-button" href="#!" data-activates="loggedin"><img id="profileimage" style="height:55px; width:55px;" class="circle" src="https://uplbosa.org/ui/images/osa-logo.png"></a><ul id="loggedin" class="dropdown-content">
      <li style="background-color: rgba(0,0,0,0);" class="active unclick"><a class="black-text" href="#"></a></li>
      <li class="divider"></li><li class="divider"></li>
      <li><a href="https://uplbosa.org/myself" class="white-text">Profile</a></li>
      <li class="divider"></li><li class="divider"></li>
      <li><a href="https://uplbosa.org/my-orgs" class="white-text">Orgs</a></li>
      <li class="divider"></li><li class="divider"></li>
      <!-- <li><a href="https://uplbosa.org/clearance" class="white-text">Clearance</a></li>
      <li class="divider"></li><li class="divider"></li> -->
      <li><a href="https://uplbosa.org/isd" class="white-text">Study Permit</a></li>
      <li class="divider"></li><li class="divider"></li>
      <li><a href="https://uplbosa.org/logout" class="white-text">Log out</a></li>
      <li class="divider"></li><li class="divider"></li>
    </ul></li>   
                          
                                          
                               
                
                                  
            </ul>
            
            <!-- Mobile Version -->
            <ul id="slide-out" class="side-nav" style="display: none; width: 350px; transform: translateX(-100%);">
                          <li><a class="white-text" href="https://uplbosa.org/">Home</a></li>
                          <li><a class="white-text" href="https://uplbosa.org/bulletin">Bulletin</a></li>
                        <ul class="collapsible" data-collapsible="accordion">
                              <li>
                    <div class="collapsible-header">Student Orgs<i class="material-icons right">arrow_drop_down</i></div>
                    <div class="collapsible-body">
                      <ul>
                        <li class="divider"></li><li class="divider"></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/orgs">Recognized Orgs</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/page-recognition">Apply For Recognition</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/org/guidelines">Recognition Guidelines</a></li>
                                            <li class="divider"></li><li class="divider"></li>
                      </ul>
                    </div>
                  </li>
                              <li>
                    <div class="collapsible-header">Financial Assistance<i class="material-icons right">arrow_drop_down</i></div>
                    <div class="collapsible-body">
                      <ul>
                        <li class="divider"></li><li class="divider"></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/scholarships">Scholarships</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/assistantships">SA Program</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/page-sts">Socialized Tuition</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/slb">SLB Program</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/cashloans">Cash Loan Program</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/assistantships/vacancies">Job Vacancies</a></li>
                                            <li class="divider"></li><li class="divider"></li>
                      </ul>
                    </div>
                  </li>
                              <li>
                    <div class="collapsible-header">Guidance Services<i class="material-icons right">arrow_drop_down</i></div>
                    <div class="collapsible-body">
                      <ul>
                        <li class="divider"></li><li class="divider"></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/division/gcd">Guidance Counselors And Psychologists</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/jobplacement">University Job Fair</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/jobplacement/partners">Job Placement</a></li>
                                            <li class="divider"></li><li class="divider"></li>
                      </ul>
                    </div>
                  </li>
                              <li>
                    <div class="collapsible-header">About OSA&nbsp;&nbsp;&nbsp;&nbsp;<i class="material-icons right">arrow_drop_down</i></div>
                    <div class="collapsible-body">
                      <ul>
                        <li class="divider"></li><li class="divider"></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/page-mission">What Is OSA?</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/page-osam">What Is OSAM?</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/stories">News</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/page-director">Message From The Director</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/division">OVCSA Divisions</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/contact">Contact Us</a></li>
                                            <li class="divider"></li><li class="divider"></li>
                      </ul>
                    </div>
                  </li>
                              <li>
                    <div class="collapsible-header">Downloads<i class="material-icons right">arrow_drop_down</i></div>
                    <div class="collapsible-body">
                      <ul>
                        <li class="divider"></li><li class="divider"></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/download/saseparation">S.A. Separation Form</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/download/acadcal2019">Academic Calendar</a></li>
                                              <li class="sidedrop"><a href="https://uplbosa.org/download/teldir2017">Telephone Directory</a></li>
                                            <li class="divider"></li><li class="divider"></li>
                      </ul>
                    </div>
                  </li>
                          </ul>
              <li class="divider"></li><li class="divider"></li>
                                              <li><a class="loginbtn btn modal-trigger" href="#loginmodal">Log In</a></li>    
                    
                          
                
                      </ul>
          </div>
        </div>
      </nav>
    </div>









    <div style="overflow-x:auto;">
    <table>
        <?php $ctr=0; foreach (($arr?:[]) as $row): $ctr++; ?>
            <tr>
            <?php $idx=0; foreach (($row?:[]) as $cell): $idx++; ?>
            <?php if ($idx==1): ?>
                <?php else: ?>
                    <?php if ($ctr==1): ?>
                        
                            <th class="head">
                                <?= ($cell)."
" ?>
                            </th>
                        
                        <?php else: ?>
                            <td>
                                <?= ($cell)."
" ?>
                            </td>
                        
                    <?php endif; ?>
                
            <?php endif; ?>
            <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <a href="/">Upload another file</a>


    <script src="./app/js/jquery.min.js"></script>
  <script src="./app/js/jquery-ui.min.js"></script>
  <script src="./app/js/ajaxupload.min.js"></script>
  <script src="./app/js/materialize.min.js"></script>
  <script src="./app/js/init.js"></script>
  <script src="./app/js/script.js"></script>

</body>
</html>