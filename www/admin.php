<?php

  session_start();
  if (isset($_SESSION['id'])) {
    // Put stored session variables into local PHP variable
    $uid = $_SESSION['id'];
    $usname = $_SESSION['user'];
    $result = "Test variables: <br /> Username: ".$usname. "<br /> Id: ".$uid;
  } 
  else 
  {
    $result = "You are not logged in yet";
    //header('location: index.php');
  }

  $title = "Admin Settings"; require "adminheader.php"; 
  
?>
    <div id="main-content" class="container">
        <table id="admin-table" class="table table-striped">
          <tr>
            <td><span>Camera ID</span></td>
            <td><span>Location</span></td> 
            <td><span>Direction</span></td>
            <td><span>Status</span></td>
            <td><span>IP Address</span></td>
            <td><span>MAC Address</span></td>
          </tr>
          <tr>
            <td class="camera_num">1</td>
            <td>Earhart</td>
            <td>IN</td>
            <td>
              <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="num1onoffswitch" checked>
                  <label class="onoffswitch-label" for="num1onoffswitch">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                  </label>
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
              <div class="onoffswitch">
                  <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="num2onoffswitch" checked>
                  <label class="onoffswitch-label" for="num2onoffswitch">
                      <span class="onoffswitch-inner"></span>
                      <span class="onoffswitch-switch"></span>
                  </label>
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