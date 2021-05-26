<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="img/dachs_main.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> My name is
                    <?php echo $name, ' ', $surname . '<br>';?>                                  
                    </p> 
                    <p> I like to sleep on 
                    <?php echo $place; ?>
                    </p> 
                    <p> I am 
                    <?php  echo $age;   ?> years old          
                    </p>
                    <p> I like pizza and sleep </p>
                </div>
            </div>

            <div class="knowledge">
		<?php include 'knowledge.inc.php'; ?>
		<?php echo $a, ' ', $b, ' ', $c;?>
		<p>I am <?php echo $y,' ', 'cm long'; ?></p>
            </div>

            <div class="article">
                <p class="text">
                    Some text in latin, woof-woof!
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
