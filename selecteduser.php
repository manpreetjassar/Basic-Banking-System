<!DOCTYPE html>
<html>
    <head>
        <title>Basic Banking System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="selected-style.css">
    </head>
    <body>
        <header>
            <div class="headersection">
            <div class="container">
                <div class="row pt-5 pb-3">
                    <div class="col-lg-8">
                       <h1 class="font-weight-light">WELCOME TO <span class="font-weight-bold" style="color: rgb(235, 28, 62);">Virtual</span><span class="font-weight-bold">BANK</span></h1>
                    </div>
                    <div class="col-lg-4 mt-2">
                       <div class="input-group">
                        <input type="text" class="form-control rounded-0" placeholder="Enter text here"> 
                        <div class="input-group-append">
                        <button class="btn btn-dark text-uppercase rounded-0 px-4 border-0" type="submit">Search</button>
                        </div>
                       </div>
                    </div>
                </div>
            </div>
            </div>
        </header>

            <div class="back">
            <h2 class="text-center text-uppercase py-5 text-white" style="font-family: 'Kaushan Script', cursive;">Transaction</h2>
            <div class="container">
                <?php
                    include 'config.php';
                    $sid=$_GET['id'];
                    $sql = "SELECT * FROM `userinfo` WHERE SNo=$sid";
                    $result=mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo "Error : ".$sql."<br>".mysqli_error($conn);
                    }
                    $rows=mysqli_fetch_assoc($result);
                ?>
                <form method="POST" name="tcredit" class="tabletext" action=""><br>
            <div>
                <table class="table table-striped table-condensed">
                    <tr style="color: black;">
                        <th>SNo.</th>
                        <th>Name</th>
                        <th>Email-id</th>
                        <th>Current Balance</th>
                        <th>Account-ID</th>
                    </tr>
                    <tr style="color: white;">
                        <td data-label="SNo." class="py-2"><?php echo $rows['SNo'] ?></td>
                        <td data-label="Name" class="py-2"><?php echo $rows['Name'] ?></td>
                        <td data-label="Email-id" class="py-2"><?php echo $rows['Email-id'] ?></td>
                        <td data-label="Current Balance" class="py-2"><?php echo $rows['CurrentBalance'] ?></td>
                        <td data-label="Account-ID" class="py-2"><?php echo $rows['Account-ID'] ?></td>
                    </tr>
                </table>
            </div>
            <br>
            <label style="color: black;"><b>Transfer To:</b></label>
            <select name="to" class="form-control" required>
                <option value="" disabled selected>Select</option>
                <?php
                    include 'config.php';
                    $sid=$_GET['id'];
                    $sql = "SELECT * FROM userinfo where SNo!=$sid";
                    $result=mysqli_query($conn,$sql);
                    if(!$result)
                    {
                        echo "Error ".$sql."<br>".mysqli_error($conn);
                    }
                    while($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['SNo'];?>" >
                    
                        <?php echo $rows['Name'] ;?> (Balance: 
                        <?php echo $rows['CurrentBalance'] ;?> ) 
                
                    </option>
                <?php 
                    } 
                ?>
                <div>
            </select>
            <br>
            <br>
                <label style="color : black;"><b>Amount:</b></label>
                <input type="number" class="form-control" name="amount" required>   
                <br><br>
                    <div class="text-center" >
                <button class="btn" name="submit" type="submit" id="myBtn">Transfer</button>
                </div>
            </form>
            </div>
        </div>
    </body>
</html>
<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from userinfo where SNo=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from userinfo where SNo=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);


    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Amount cannot be negative")'; 
        echo '</script>';
    }
    else if($amount > $sql1['CurrentBalance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! Insufficient Balance")';  
        echo '</script>';
    }
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Sorry! Zero value cannot be transferred')";
         echo "</script>";
    }
    else {
                $newbalance = $sql1['CurrentBalance'] - $amount;
                $sql = "UPDATE userinfo set CurrentBalance=$newbalance where SNo=$from";
                mysqli_query($conn,$sql);
             
                $newbalance = $sql2['CurrentBalance'] + $amount;
                $sql = "UPDATE userinfo set CurrentBalance=$newbalance where SNo=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                    ?>
                          <script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>
                           <?php
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>