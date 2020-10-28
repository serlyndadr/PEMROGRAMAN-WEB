<?php
include ('conn.php');
	$judul = "Curriculum Vitae";
	$me="PERSONAL HISTORY";
	$person ="I am a humble person and easily adapt to new environments. I am a honest person, independent, and can be responsible with every task that has been given to me. ";
	$about="ABOUT ME";
	$sosmed="SOCIAL MEDIA";
	$instagram="Instagram";
$github="Github";
$facebook="Facebook";


	#right#
	$nama="SERLYNDA DWI ROSALINA";
	$prodi="Informatic’s Student of UPN “Veteran” Jawa Timur";
	$education="EDUCATION";
	$skill="SKILLS";
	$hobi="HOBBY";

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tugas-Pemweb/CV Design</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="resume">
   <div class="resume_left">
    <h1><?php echo $judul ?> </h1>
    <img src="serly.jpg">
     <div class="resume_profile">

     </div> 

     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="tittle">
        <p id="personal"><?php echo $me ?> </p>
           <p id="a"> <?php echo $person ?> </p>
         </div>
         <p id="kotak"><?php echo $about ?></p>

                      <?php
              $query = "SELECT * FROM about_me";
              $result = mysqli_query(connection(), $query);

            ?>
            
           	<?php while($hasil = mysqli_fetch_array($result)): ?>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
           	 <div class="data">
              <?php echo $hasil['address'] ?>
             </div>
           </li> 
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               <?php echo $hasil['phone'] ?>
             </div>
           </li>  
           <li>
             <div class="icon">
               <i class="far fa-envelope"></i></i>
             </div>               
             <div class="data">
               <?php echo $hasil['email'] ?>
             </div>
           </li> 
           <?php endwhile ?>
         </ul>
       </div>
       
       <div class="resume_item resume_social">
         <div class="title">
        <p id="kotak"><?php echo $sosmed ?></p>
         </div>
                <?php
           		$query = "SELECT * FROM social_media";
           		$result1 = mysqli_query(connection(), $query);

           	?>
         <ul>
           <li>
           	<?php while($socmed = mysqli_fetch_array($result1)): ?>
             <div class="icon">
               <i class="fab fa-instagram-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold"><?php echo $instagram ?></p>
               <p><?php echo $socmed['Instagram'] ?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-github-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold"><?php echo $github ?></p>
               <p><?php echo $socmed['Github'] ?></p>
             </div>
           </li> 
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold"><?php echo $facebook ?></p>
               <p><?php echo $socmed['Facebook'] ?></p>
             </div>
           </li>
                      <?php endwhile ?>           
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right"> 
    <div class="resume_item resume_about">
        <div class="title">
           <p id="name"><?php echo $nama ?>
        <br><br><br><?php echo $prodi ?></br></br></br>
        </p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
        <p id="kotak"><?php echo $education ?></p>
         </div>
                <?php
              $query = "SELECT * FROM education";
              $result2 = mysqli_query(connection(), $query);

            ?>
         <ul>
           <li>
            <?php while($educate = mysqli_fetch_array($result2)): ?>
                <div class="date"><?php echo $educate ['SD']?></div> 
                <div class="info">
                  <p><?php echo $educate['THSD'] ?></p>
                </div>
            </li>
            <li>
              <div class="date"><?php echo $educate ['SMP'] ?></div>
              <div class="info">
                  <p><?php echo $educate ['THSMP'] ?></p>
                </div>
            </li>
            <li>
              <div class="date"><?php echo $educate['SMA'] ?></div>
              <div class="info">
                  <p><?php echo $educate ['THSMA'] ?></p>
                </div>
            </li>
            <li>
              <div class="date"><?php echo $educate['UNIV'] ?></div>
              <div class="info">
                  <p><?php echo $educate['TH'] ?></p>
                </div>
            </li>
                      <?php endwhile ?>            
        </ul>
    </div>
       <div class="resume_item resume_skills">
         <div class="title">
        <p id="kotak"><?php echo $skill ?></p>
         </div>
            <?php
              $query = "SELECT * FROM skills";
              $result3 = mysqli_query(connection(), $query);

            ?>
         <ul>
           <li>
            <?php while($skill = mysqli_fetch_array($result3)): ?>            
             <div class="skill_name">
             <?php echo $skill['c'] ?>
             </div>
             <div class="skill_progress">
               <span style="width: 90%;"></span>
             </div>
             <div class="skill_per"><?php echo $skill['cpersen'] ?></div>
           </li>
           <li>
             <div class="skill_name">
              <?php echo $skill['c++'] ?>
             </div>
             <div class="skill_progress">
               <span style="width: 85%;"></span>
             </div>
             <div class="skill_per"><?php echo $skill['c++persen'] ?></div>
           </li>
           <li>
             <div class="skill_name">
               <?php echo $skill['html'] ?>
             </div>
             <div class="skill_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="skill_per"><?php echo $skill['htmlpersen'] ?></div>
           </li>
           <li>
             <div class="skill_name">
               <?php echo $skill['css'] ?>
             </div>
             <div class="skill_progress">
               <span style="width: 70%;"></span>
             </div>
             <div class="skill_per"><?php echo $skill['csspersen'] ?></div>
           </li>
                      <?php endwhile ?>             
         </ul>
       </div>
    <div class="resume_item resume_hobby">
      <div class="title">
           <p id="kotak"><?php echo $hobi ?></p>
           <img src = singing.png>
           <img src = listening.png>
           <img src = ticket.png>
         </div>
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
