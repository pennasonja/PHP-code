<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>IoT</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }

        header{
            background-color:#666;
            padding:30px;
            text-align:center;
            font-size:15px;
            color:white;

        }
        body{
            font-family:Arial, Helvetica, sans-serif;
        }
        nav{
            float: left;
            width: 30%;
            height: 300px;
            margin:20px;
        }
        
    </style>
    <script type="text/javascript">
        function myFunction(){
            $('[data-toggle="tooltip"]').tooltip();   
        };
    </script>
    <meta http-equiv="refresh" content="10">
</head>
<body>
<header>
<h2 class="pull-left">Ledin tapahtumalogi</h2>
</header>

<section>
        <nav>
<div>
                <p></p>
                <?php
                    include_once 'db.php';
                    $result = mysqli_query($conn,"SELECT aika, tila FROM valokytkin ORDER BY aika DESC LIMIT 5")
                ?>
               <p><b>Valokytkin</b></p>
             
               <form method="post">
                <input type="submit" name="buttonOn" value="ON" style="background-color:green; color:white">
                <input type="submit" name="buttonOff" value="OFF" style="background-color:red; color:white" >
                <?php
                //ON- insert
		shell_exec("gpio -g mode 18 out");
                    if(isset($_POST['buttonOn'])) {
			shell_exec("gpio -g write 18 1"); 
                    include_once 'db.php';
                    $sql =mysqli_query($conn, "INSERT INTO valokytkin (tila) VALUES
                    ('ON')");} 
                ?>
                <?php
                //OFF- insert
                    if(isset($_POST['buttonOff'])) {
			shell_exec("gpio -g write 18 0"); 
                    include_once 'db.php';
                    $sql =mysqli_query($conn, "INSERT INTO valokytkin (tila) VALUES
                    ('OFF')");} 
                ?>

                <?php
                    if (mysqli_num_rows($result) != 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                      
                      <tr>
                        <td>Aika</td>
                        <td>Tila</td>
                      </tr>
                    <p></p>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["aika"]; ?></td>
                        <td><?php echo $row["tila"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "Ei arvoja";
                    }
                    
                    ?>
                </div>
    </nav>

<article>
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix"></div>
                    <div>
                <?php
                    include_once 'db.php';
                    $result = mysqli_query($conn,"SELECT aika, tila, arvot FROM valoarvot ORDER BY aika DESC LIMIT 5")
                    ?>
                 <p><b>Hämäräkytkin</b></p>
                <?php
                    if (mysqli_num_rows($result) != 0) {
                    ?>
                   
                      <table class='table table-bordered table-striped'>
                      <tr>
                        <td>Aika</td>
                        <td>Tila</td>
                        <td>Arvo</td>
                      </tr>
                    
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["aika"]; ?></td>
                        <td><?php echo $row["tila"]; ?></td>
                        <td><?php echo $row["arvot"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                    <?php
                    }
                    else{
                        echo "Ei arvoja";
                    }
                    
                    ?>
                     </div>
                <div>
                <p></p>
                    <?php
                    include_once 'db.php';
                    $result = mysqli_query($conn,"SELECT aika, tila, arvot FROM painearvot ORDER BY aika DESC LIMIT 5")
                    ?>
               <p><b>Painekytkin</b></p>
                <?php
                    if (mysqli_num_rows($result) != 0) {
                    ?>
                      <table class='table table-bordered table-striped'>
                      
                      <tr>
                        <td>Aika</td>
                        <td>Tila</td>
                        <td>Arvo</td>
                      </tr>
                    
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["aika"]; ?></td>
                        <td><?php echo $row["tila"]; ?></td>
                        <td><?php echo $row["arvot"]; ?></td>

                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "Ei arvoja";
                    }
                    
                    ?>
                </div>
                
            </div>        
        </div>
    </div>
    </article>
</section>
</body>
</html>
