<?php
  $inactive = 300; 
  ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

  session_start();
  if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
  }
  $_SESSION['testing'] = time(); // Update session

  if (isset($_SESSION['id'])) {
    // Put stored session variables into local PHP variable
    $uid = $_SESSION['id'];
    $usname = $_SESSION['user'];
    $result = "Test variables: <br /> Username: ".$usname. "<br /> Id: ".$uid;
  } 
  else 
  {
    $result = "You are not logged in yet";
    header('location: login.php');
  }

  $title = "Admin Settings"; require "header.php"; 
  
?>  
    <div class="row">
      <div class = "col-md-8">
      </div>
      <div class = "col-md-4";>
        <form action= "logout.php" method="post";>
          <input type="submit" value = "LOGOUT">
        </form>
      </div>
    </div>
    <div id="main-content" class="container">
        <table id="admin-table" class="table table-striped">
          <tr>
            <td><span>Camera ID</span></td>
            <td><span>Location</span></td> 
            <td><span>Direction</span></td>
            <td><span>Reboot</span></td>
            <td><span>IP Address</span></td>
            <td><span>MAC Address</span></td>
          </tr>
          <tr>
            <td class="camera_num">1</td>
            <td>Earhart</td>
            <td>IN</td>
            <td>
              <div>
                <form action="reboot1.php" method="get">
                  <button class="button">Reboot</button>
                </form>
              </div>
            </td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
          <tr>
            <td>2</td> 
            <td>Earhart</td>
            <td>OUT</td>
            <td>
              <div>
                  <form action="reboot2.php" method="get">
                    <button class="button">Reboot</button>
                </form>
              </div>
            </td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Wiley</td>
            <td>IN</td>
            <td>OFF</td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Wiley</td>
            <td>OUT</td>
            <td>OFF</td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Ford</td>
            <td>IN</td>
            <td>OFF</td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Ford</td>
            <td>OUT</td>
            <td>OFF</td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Windsor</td>
            <td>IN</td>
            <td>OFF</td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Windsor</td>
            <td>OUT</td>
            <td>OFF</td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Hillenbrand</td>
            <td>IN</td>
            <td>OFF</td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
          <tr>
            <td>10</td>
            <td>Hillenbrand</td>
            <td>OUT</td>
            <td>OFF</td>
            <td>1.1.1.1</td> 
            <td>1.1.1.1</td>
          </tr>
        </table>
    </div>
   
<?php $jslib = ""; require "footer.php"; ?>