<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }


    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.4);

    }


    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;


    }


    .close {
      color: #aaaaaa;
      float: right;
      font-weight: bold;
      padding-left: 95%;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    table,
    th,
    td {
      border-collapse: collapse;
      border: 1px solid rgb(0, 0, 0);
      border-collapse: collapse;
      padding: 0.6em 1.2em;
      text-align: center;
    }

    td {
      width: 25vw;
    }

    #myBtn {
      border: 1px solid #cec4c4;

    }
  </style>
</head>

<body>
  <div class="mod" style="padding-left:20%">
    <button id="myBtn">Click Me</button>
  </div>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">Close</span>
      <p>
      <table>
        <tr>
          <th colspan="2">Eligibility Criteria</th>
        </tr>
        <tr>
          <td>Age :</td>
          <td>above 18 years</td>
        </tr>
        <tr>
          <td>Weight : </td>
          <td> Women and Men above 50kg</td>
        </tr>

        <tr>
          <td>Donate Blood :</td>
          <td>Not donated blood in previous 3-4 months</td>
        </tr>
        <tr>
          <td>Vaccine :</td>
          <td>You can donate blood if you haven't taken the Covid-19 Vaccine. <p>
              But if you have taken after completing 15 days you can donate blood.
            </p>
          </td>
        </tr>
      </table>
      </p>
    </div>
  </div>

  <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
      modal.style.display = "block";
    }

    span.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>
</html>