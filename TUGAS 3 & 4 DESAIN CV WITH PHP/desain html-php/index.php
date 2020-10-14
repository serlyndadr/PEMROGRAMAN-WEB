<?php
#left
$judul = "Curriculum Vitae";
$me="PERSONAL HISTORY";
$person ="I’m a humble person and easily adapt to new environments. I’m someone who is honest, independent, and can be responsible with every task that has been given to me. ";
$about="ABOUT ME";
$rumah="Sumobito-Jombang-Jawa Timur";
$telp="08885946522";
$email="serlynda.rosalina@gmail.com";
$sosmed="SOCIAL MEDIA";
$instagram="Instagram";
$ig="serlyndadr_";
$github="Github";
$gthb="serlyndadr";
$facebook="Facebook";
$fb="Serlynda Dwi Rosalina";

#right#
$nama="SERLYNDA DWI ROSALINA";
$prodi="Informatic’s Student of UPN “Veteran” Jawa Timur";
$education="EDUCATION";
$esde="SDN SUMOBITO III";
$thsd="[ 2006 - 2012 ]";
$smp="SMPN 1 SUMOBITO";
$thsmp="[ 2012 - 2015 ]";
$sma="SMAN 1 JOMBANG";
$thsma="[ 2015 - 2018 ]";
$univ="UPN VETERAN JATIM";
$jurusan="Informatic's";
$thkuliah="[ 2018 - NOW ]";
$skill="SKILLS";
$C="C";
$c="90%";
$Cpp="C++";
$cpp="85%";
$HTML="HTML";
$html="80%";
$CSS="CSS";
$css="70%";
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
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
              <?php echo $rumah ?>
             </div>
           </li>  
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               <?php echo $telp ?>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="far fa-envelope"></i></i>
             </div>
             <div class="data">
               <?php echo $email ?>
             </div>
           </li>
           
         </ul>
       </div>
       
       <div class="resume_item resume_social">
         <div class="title">
        <p id="kotak"><?php echo $sosmed ?></p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fab fa-instagram-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold"><?php echo $instagram ?></p>
               <p><?php echo $ig ?></p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-github-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold"><?php echo $github ?></p>
               <p><?php echo $gthb ?></p>
             </div>
           </li> 
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold"><?php echo $facebook ?></p>
               <p><?php echo $fb ?></p>
             </div>
           </li>
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
        <ul>
            <li>
                <div class="date"><?php echo $esde ?></div> 
                <div class="info">
                  <p><?php echo $thsd ?></p>
                </div>
            </li>
            <li>
              <div class="date"><?php echo $smp ?></div>
              <div class="info">
                  <p><?php echo $thsmp ?></p>
                </div>
            </li>
            <li>
              <div class="date"><?php echo $sma ?></div>
              <div class="info">
                  <p><?php echo $thsma ?></p>
                </div>
            </li>
            <li>
              <div class="date"><?php echo $univ ?></div>
              <div class="info">
                     <p class="semi-bold"><?php echo $jurusan ?></p> 
                  <p><?php echo $thkuliah ?></p>
                </div>
            </li>
        </ul>
    </div>
       <div class="resume_item resume_skills">
         <div class="title">
        <p id="kotak"><?php echo $skill ?></p>
         </div>
         <ul>
           <li>
             <div class="skill_name">
             <?php echo $C ?>
             </div>
             <div class="skill_progress">
               <span style="width: 90%;"></span>
             </div>
             <div class="skill_per"><?php echo $c ?></div>
           </li>
           <li>
             <div class="skill_name">
              <?php echo $Cpp ?>
             </div>
             <div class="skill_progress">
               <span style="width: 85%;"></span>
             </div>
             <div class="skill_per"><?php echo $cpp ?></div>
           </li>
           <li>
             <div class="skill_name">
               <?php echo $HTML ?>
             </div>
             <div class="skill_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="skill_per"><?php echo $html ?></div>
           </li>
           <li>
             <div class="skill_name">
               <?php echo $CSS ?>
             </div>
             <div class="skill_progress">
               <span style="width: 70%;"></span>
             </div>
             <div class="skill_per"><?php echo $css ?></div>
           </li>
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
