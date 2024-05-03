<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <title>Access Control List</title>
    <!--<link rel="stylesheet" href="/assets/css/acl.css">--> 
    <script type="text/javascript" src="/assets/js/acl.js" defer></script>
  </head>
  
  <body>
    <h1>Proxy Access Control List</h1>

    <button id="btn" onclick="showAddPopup()">add</button>
    <button>restore</button>
    
    <div id="addPopup"></div>

    <div>
      <label for="aclType">declaration</label>
      <select name="aclType" id="aclType">
        <option>Ip</option>
        <option>Domain_name</option>
        <option>Port</option>
        <option>Time</option>
        <option>HTTP_Method</option>
        <option>File</option>
        <option>HTTP_Status</option>
        <option>URL</option>
        <option>Mac</option>
        <option>Protocol</option>
        <option>Username</option>
<option>Peer_name</option>
        <option>Server_name</option>
        <option>Operative_word</option>
        <option>Processing_step</option>
        <option>Snmp_community</option>
        <option>Max_user_ip</option>
        <option>Max_connection</option>
        <option>Connection_mark</option>
      </select>
    </div>
    
    <div class="tableContainer">
      <table border="1" cellpadding="20">
        <th>name</th>
        <th>values</th>
        <th>action</th>

        <tr>
          <td>acl_name</td>
          <td>
            <select disabled>
              <option>src</option>
              <option>dest</option>
            </select>
            <input type="text" placeholder="value" value="value" disabled>
          </td>
          <td>
            <button>modify</button>
            <button>delete</button>
          </td>
        </tr>

      </table>
    </div>

  </body>

</html>

