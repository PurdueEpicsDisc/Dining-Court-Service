<?php
  $servername = "localhost";
  $username = "zhiyang";
  $password = "forest901219";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
 





  $title = "Admin Settings"; require "header.php"; 
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