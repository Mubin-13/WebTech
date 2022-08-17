<!DOCTYPE html>
<html>
<style>
  table, th, td {
     border: 1px solid black;
  border-collapse: collapse;
      }
      </style>

<style type="text/css"> 
    
    *{
        margin:10;
        padding:10;
    }
    body{
     
        background-image:url(airplane.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        backgroud-position: center;
        font-family:sans-serif;
        margin-top:150px;
    }
    .back-btn{
        background-color:#3BAF9F;
        display:block;
        margin:20px 0px 0px 20px;
        position:fixed;
        left:10px;
        top: 850px;
        text-align:center;
        border-radius:12px;
        border: 2px solid #366473;
        padding: 14px 110px;
        outline: none;
        color:white;
        cursor:pointer;
        transition:0.25px;
        font-weight: 600;
        font-size:20px;
    }
     
        </style>

<body>


<h2>Search By Destination</h2>


<form action=""> 
  
 <h2>Search <input onkeyup="showCustomer(this.value)"></input></h2> 
</form>
<br>
<div id="txtHint">Customer info will be listed here...</div>

<script>
function showCustomer(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "getcustomer.php?q="+str);
  xhttp.send();
}
</script>
<input class="back-btn" type="submit" value="Back" name="btnClick">
          </a>

          <a href="welcome.php">
</body>
</html>