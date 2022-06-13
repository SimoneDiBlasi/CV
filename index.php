<?php 
//la stringa mysql_connect deve essere compilata con i dati relativi al proprio database
// HOST = IP server Mysql
// USER = Nome utente databse
// PASSWORD = Password utente databse
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host = 'locahost';
$user='root';
$password='';
$db='CV';
$mysqli = mysqli_connect('localhost', 'root', '', 'CV');
if (mysqli_connect_errno()) {
    throw new RuntimeException('mysqli connection error: ' . mysqli_connect_error());
}

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4');
if (mysqli_errno($mysqli)) {
    throw new RuntimeException('mysqli error: ' . mysqli_error($mysqli));
}
if(isset($_GET['nome']) && isset($_GET['cognome'])&& isset($_GET['email'])&& isset($_GET['description'])){
// recupero i valori si NOME e INDIRIZZO e li assegno alle variabili $name e $address
$name = mysqli_real_escape_string($mysqli,$_GET["nome"]);
$last_name = mysqli_real_escape_string($mysqli,$_GET["cognome"]);
$email = mysqli_real_escape_string($mysqli,$_GET["email"]);
$description = mysqli_real_escape_string($mysqli,$_GET["description"]);

//inserting data order
$toinsert = mysqli_query($mysqli,"INSERT INTO User VALUES('','$name','$last_name','$email','$description')");

//declare in the order variable
	//order executes
}
?>

<!DOCTYPE html>
<html lang ="it" >
     <head>
         <title>CV Simone Di Blasi</title>
         <meta name = "author" content ="Simone Di Blasi">
         <meta name="copyright" content="Simone Di Blasi ">
         <meta charset="utf-8"> 
         <link rel="stylesheet" href=CV/bootstrap-italia/css/bootstrap-italia.min.css />
         <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <script src="js/form.js"defer></script>
         <link rel="stylesheet" href="css/style.css">


         <meta name="viewport" content="width=device width, initial scale=1">
             
     </head>

 
     <body>
         
      
      <!-- NAVBAR -->
      


      <nav>
             <div id = 'container-nav-bar'>
                <div id = 'name'>
                    <a>SIMONE DI BLASI</a>
                    </div>
                 <div id = 'grid-containers'>
                    
                    <div class = 'grid'>
                    <a href="#bottom-full-container">HOME</a>
                    </div>
                    <div class = 'grid'>
                    <a href="#experience">EXPERIENCE</a>
                    </div>
                    <div class = 'grid'>
                    <a href="#education">EDUCATION</a>
                    </div> 
                    <div class = 'grid'>
                    <a href="#skills">SKILLS</a>
                    </div>
                    <div class = 'grid'>
                    <a href="#skills">DIGITAL SKILLS</a>
                    </div>
                    <div class = 'grid'>
                    <a href="#body">PROJECTS</a>
                    </div>
                 </div> 
             </div>
        </nav>




      <!-- HEADER -->

        <header>
         <div id = bottom-full-container>
          <img src = img/photo1.jpeg id="image1" > 
          <div id = full-container >
           
          <div data-aos="fade-right" id = 'container-info'>
             <div id = left-container>
              <img src = "img/myself.jpg" id ='myself'>
             </div>
               <div  id = right-container>
                <div id = sub-right-container>
                <table class ='info'>
                    <tr>
                      <td class = 'coloumn1'> </td> <td  id ='name_info'><b>Simone Di Blasi</b></td>
                      </tr>
                    <tr>
                      <td class = 'coloumn1'></td><td ><b>AUTOMATION ENGINEER</b></td> 
                      </tr>
               
               </table>

               <table class ='info'>
                      <tr>
                        <td class = 'coloumn1'>
                          <img src = svg/telephone.svg >
                        </td><td><b>Phone:</b></td> 
                      </tr>
                      <tr>
                        <td class = 'coloumn1'></td><td>(+39) 3490992554</td> 
                      </tr>
               </table>
               <table class ='info'>
                <tr>
                  <td class = coloumn1>
                    <img src = svg/envelope.svg >
                  </td><td class ><b>Email:</b></td> 
                  </tr>
                  <tr>
                    <td class = coloumn1></td><td >simo_dibla@hotmail.it</td> 
                  </tr>
               </table>
               <table class ='info'>
                <tr>
                  <td class = coloumn1>
                    <img src = svg/geo-alt-fill.svg >
                  </td><td><b>Address:</b></td> 
                  </tr>
                  <tr>
                    <td class = coloumn1></td><td>Luigi Pirandello,22, 95030,<br>
                        Sant'Agata Li Battiati, Italia</td> 
                  </tr>
               </table>

               <table class ='info'>
                <tr>
                  <td class = coloumn1></td><td class ><b>Date of birth:</b></td> 
                  </tr>
                  <tr>
                    <td class = coloumn1></td><td>23/11/1997</td> 
                  </tr>
               </table>
              </div>      
            </div>


          </div>
        </div>
      </div>
        </header>

        <!-- SECTION SOCIAL-->

       

        <section>
         <div data-aos="fade-up" id =social>
             <div id =social-link>
               <div id = center-social-link>
                 <a href = 'https://www.linkedin.com/in/simone-di-blasi-59265a192/'><img src = svg/linkedin.svg class = 'social'></a>
                 <a href = 'https://it-it.facebook.com/simone.diblasi.92'><img src = svg/facebook.svg class = 'social'></a>
                 <a href = 'https://www.instagram.com/simonediblasi_/'><img src = svg/instagram.svg class = 'social'></a>
               </div>
             </div>
         </div>
        </section>



        <!-- SECTION DESCRIPTION-->

        <div id = 'description'>

          <div id ='central-description'>
            <p id = 'blue-name'>HELLO! I'm Simone</p>
            <p>I'm a computer engineer specialized in automation control. My passion is to develop by automating processes on the software and hardare side.
            I'm ready to improve and increase my knowledge to make the world we live safer and greener.</p>
          </div>

        </div>

        <!-- SECTION EXPEREINCE-->
        <hr class = 'divider'>
        <div id = 'experience'>
          <p class = title> EXPERIENCE</p>
        </div>
        <hr class = 'divider'>
        
        <div class ='main-container'>

          <div class ='centered-container'>
           
            <div class ='left-container'>
                 <div class ='date-job'>
                   <p>20/05/2021 – 30/09/2021<br>Innov@-doc</p>
                 </div>

             </div>

             <div class ='middle-container'>
              <ul>
                <li></li>
                </ul>
                <div class = 'vertical-line'></div>
             </div>

             <div data-aos="fade-left" class ='right-container'>
                 <div class ='description-job'>
                  <p>Intern - IT Consultant </p>
                     <div class = 'elenco-puntato'>
                  <ul>
                    <li>Design and development of documents through the platform Inspire Designer</li>
                    <li>Design and development of documents through the platform Inspire Interactive</li>
                    <li>Design analysis of documents drawn up on the platform Adobe LifeCycle</li>
                    <li>Analysis of script written in Javascript</li>
                    <li>Creation and handling of xml file</li>
                    <li>Testing on the documentation </li>
                    <li>Documental migration from the platform Adobe LifeCycle to the platform Quadient</li>
                    <li>Verification and integration of logic to optimize / integrate aspects of interfaces and user interaction processes</li>
                    <li>Take part to the project 'Edison' for developing documents throught the use of the software Inspire Designer</li>
                    <li>Take part to the project 'E-distr' for developing documents throught the use of the software Inspire Interactive</li>
                    <br>
                    <br>

                  </ul>   
                </div>

                 </div>
              
             </div>

            </div>
        </div>


        <div class ='main-container'>

          <div class ='centered-container'>
           
            <div class ='left-container'>
                 <div class ='date-job'>
                   <p>20/05/2021 – 30/09/2021<br>Innov@-doc</p>
                 </div>

             </div>

             <div class ='middle-container'>
              <ul>
                <li></li>
                </ul>


              <div id = 'vertical-line-last'></div>
             </div>

             <div data-aos="fade-left" class ='right-container'>
                 <div class ='description-job'>
                  <p>Stagista - Consulente informatico</p>
                     <div class = 'elenco-puntato'>
                  <ul>
                    <li>Progettazione e sviluppo di documenti attraverso il software Inspire Designer</li>
                    <li>Progettazione e sviluppo di documenti attraverso il software Inspire Interactive</li>
                    <li>Analisi documentale e progettuale di documenti stilati su piattaforma Adobe LifeCycle</li>
                    <li>Analisi di script scritti in linguaggio Javascript</li>
                    <li>Creazione e manipolazione di file xml</li>
                    <li>Testing sulla documentazione</li>
                    <li>Migrazione documentale dalla piattaforma Adobe LifeCycle alla piattaforma Quadient</li>
                    <li>Verifica e integrazione della logica per ottimizzare/integrare gli aspetti delle interfacce e i processi di interazione con l'utente</li>
                    <li>Preso parte al progetto Edison per lo sviluppo di documenti attraverso il software Inspire Designer</li>
                    <li>Preso parte al progetto E-distr per lo sviluppo di documenti attraverso il software Inspire Interactive</li>
                    <br>
                    <br>

                  </ul>   
                </div>

                 </div>

             </div>

            </div>
        </div>
        <hr class = 'divider'>        

                <!-- SECTION EDUCATION-->
                <div id = 'education'>
                  <p class = title> EDUCATION</p>
                </div>
                <hr class = 'divider'>


                <div class ='main-container'>

                  <div class ='centered-container'>
                   
                    <div class ='left-container'>
                         <div class ='date-job'>
                           <p>10/2021 – Current<br>University of Catania</p>
                         </div>
        
                     </div>
        
                     <div class ='middle-container'>
                      <ul>
                        <li></li>
                        </ul>
                        <div class = 'vertical-line-education'></div>
                     </div>
        
                     <div data-aos="fade-left" class ='right-container'>
                         <div class ='description-job'>
                          <p>Master Degree in Automation and control of complex systems</p>
                             <div class = 'elenco-puntato'>
                             
                        </div>
        
                         </div>
                      
                     </div>
        
                    </div>
                </div>
        
        
                <div class ='main-container'>
        
                  <div class ='centered-container'>
                   
                    <div class ='left-container'>
                         <div class ='date-job'>
                           <p> 30/05/2022 – Current <br>Cousera</p>
                         </div>
        
                     </div>
        
                     <div class ='middle-container'>
                      <ul>
                        <li></li>
                        </ul>
        
        
                      <div class = 'vertical-line-education'></div>
                     </div>
        
                     <div data-aos="fade-left" class ='right-container'>
                         <div class ='description-job'>
                          <p>Python Basic</p>
                             <div class = 'elenco-puntato'>
                            
                        </div>
        
                         </div>
        
                     </div>
        
                    </div>
                </div>


                <div class ='main-container'>
        
                  <div class ='centered-container'>
                   
                    <div class ='left-container'>
                         <div class ='date-job'>
                           <p> 30/08/2021 – Current <br>Quadient</p>
                         </div>
        
                     </div>
        
                     <div class ='middle-container'>
                      <ul>
                        <li></li>
                        </ul>
        
        
                      <div class = 'vertical-line-education'></div>
                     </div>
        
                     <div data-aos="fade-left" class ='right-container'>
                         <div class ='description-job'>
                          <p>Inspire Content Manager Basic</p>
                             <div class = 'elenco-puntato'>
                            
                        </div>
        
                         </div>
        
                     </div>
        
                    </div>
                </div>



                <div class ='main-container'>
        
                  <div class ='centered-container'>
                   
                    <div class ='left-container'>
                         <div class ='date-job'>
                           <p> 07/06/2021 – Current <br>Quadient</p>
                         </div>
        
                     </div>
        
                     <div class ='middle-container'>
                      <ul>
                        <li></li>
                        </ul>
        
        
                      <div class = 'vertical-line-education'></div>
                     </div>
        
                     <div data-aos="fade-left" class ='right-container'>
                         <div class ='description-job'>
                          <p>Inspire Designer Basic 14.0</p>
                             <div class = 'elenco-puntato'>
                            
                        </div>
        
                         </div>
        
                     </div>
        
                    </div>
                </div>




                <div class ='main-container'>
        
                  <div class ='centered-container'>
                   
                    <div class ='left-container'>
                         <div class ='date-job'>
                           <p> 10/10/2016 – 25/04/2021 <br>University of Catania</p>
                         </div>
        
                     </div>
        
                     <div class ='middle-container'>
                      <ul>
                        <li></li>
                        </ul>
        
        
                      <div class = 'vertical-line-education'></div>
                     </div>
        
                     <div data-aos="fade-left" class ='right-container'>
                         <div class ='description-job'>
                          <p>Bachelor Degree in Computer engineer</p>
                             <div class = 'elenco-puntato'>
                            
                        </div>
        
                         </div>
        
                     </div>
        
                    </div>
                </div>


                <div class ='main-container'>
        
                  <div class ='centered-container'>
                   
                    <div class ='left-container'>
                         <div class ='date-job'>
                           <p> 12/09/2012 – 27/06/2016 <br>Scientific High School 'Galielo Galilei'</p>
                         </div>
        
                     </div>
        
                     <div class ='middle-container'>
                      <ul>
                        <li></li>
                        </ul>
        
        
                      <div id = 'vertical-line-education-last'></div>
                     </div>
        
                     <div data-aos="fade-left" class ='right-container'>
                         <div class ='description-job'>
                          <p>Scientific High School diploma</p>
                             <div class = 'elenco-puntato'>
                            
                        </div>
        
                         </div>
        
                     </div>
        
                    </div>
                </div>
                <hr class = 'divider'>     

 <!-- SECTION SKILLS-->

 <div id = 'skills'>
  <p class = title> SKILLS</p>
</div>
<hr class = 'divider'>

<div class ='main-container'>
      <div class = subject>
        <p>ENGLISH</p>
      </div>

      <div class ='table-container'>
        <table class = 'skills-table'>
          <tr>
            <td>LISTEN</td> 
            <td>READING</td>
            <td>WRITING</td>
            <td>SPEAKING</td>
            </tr>
          <tr>
            <td >C1</td> 
            <td >C1</td> 
            <td >C1</td> 
            <td >C1</td> 
            </tr>
     
     </table>
     </div>

</div>


        <!-- SECTION DIGITAL SKILLS-->
<hr class = 'divider'>
<div id = 'skills'>
  <p class = title> DIGITAL SKILLS</p>
</div>
<hr class = 'divider'>

<div class ='main-container'>
    
  <div class ='centered-container'>
                   
    <div class ='left-container-skill'>
         <div class ='date-job'>
          <img src = "gif/giphy.gif" class ='digital-skill'>
         </div>

     </div>

     <div class ='middle-container-skill'>
      <img src = "gif/large.gif" class ='digital-skill'>
     </div>

     <div class ='right-container-skill'>
          <img src = "gif/unnamed.gif" class ='digital-skill'>
      </div>

    </div>
  </div>
 </div>


<br>
<br>
<br>
<br>
<br>


<div class ='main-container-skills'>
    <div class ='centered-container'>
   
    <div class ='left-container'>
         <div class ='date-digital-skills'>
           <p> C Shell | C | C++ </p>
         </div>

     </div>

     <div class ='middle-container'>
     </div>

     <div class ='right-container'>
         <div class ='description-job'>
        
             <div class = 'elenco-puntato'>
            
        </div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
         </div>

     </div>

    </div>
</div>

<div class ='main-container-skills'>
  <div class ='centered-container'>
 
  <div class ='left-container'>
       <div class ='date-digital-skills'>
         <p> HTML 5 | CSS | JAVASCRIPT | AJAX | JQUERY | BOOTSTRAP </p>
       </div>

   </div>

   <div class ='middle-container'>
   </div>

   <div class ='right-container'>
       <div class ='description-job'>
      
           <div class = 'elenco-puntato'>
          
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
       </div>

   </div>

  </div>
</div>

<div class ='main-container-skills'>
  <div class ='centered-container'>
 
  <div class ='left-container'>
       <div class ='date-digital-skills'>
         <p> PYTHON </p>
       </div>

   </div>

   <div class ='middle-container'>
   </div>

   <div class ='right-container'>
       <div class ='description-job'>
      
           <div class = 'elenco-puntato'>
          
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
       </div>

   </div>

  </div>
</div>

<div class ='main-container-skills'>
  <div class ='centered-container'>
 
  <div class ='left-container'>
       <div class ='date-digital-skills'>
         <p> PHP </p>
       </div>

   </div>

   <div class ='middle-container'>
   </div>

   <div class ='right-container'>
       <div class ='description-job'>
      
           <div class = 'elenco-puntato'>
          
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
       </div>

   </div>

  </div>
</div>

<div class ='main-container-skills'>
  <div class ='centered-container'>
 
  <div class ='left-container'>
       <div class ='date-digital-skills'>
         <p> MYSQL </p>
       </div>

   </div>

   <div class ='middle-container'>
   </div>

   <div class ='right-container'>
       <div class ='description-job'>
      
           <div class = 'elenco-puntato'>
          
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
       </div>

   </div>

  </div>
</div>

<div class ='main-container-skills'>
  <div class ='centered-container'>
 
  <div class ='left-container'>
       <div class ='date-digital-skills'>
         <p> JAVA </p>
       </div>

   </div>

   <div class ='middle-container'>
   </div>

   <div class ='right-container'>
       <div class ='description-job'>
      
           <div class = 'elenco-puntato'>
          
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
       </div>

   </div>

  </div>
</div>

<div class ='main-container-skills'>
  <div class ='centered-container'>
 
  <div class ='left-container'>
       <div class ='date-digital-skills'>
         <p> CSV | XML | JSON</p>
       </div>

   </div>

   <div class ='middle-container'>
   </div>

   <div class ='right-container'>
       <div class ='description-job'>
      
           <div class = 'elenco-puntato'>
          
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
       </div>

   </div>

  </div>
</div>


<div class ='main-container-skills'>
  <div class ='centered-container'>
 
  <div class ='left-container'>
       <div class ='date-digital-skills'>
         <p> ASSEMBLY | VHDL</p>
       </div>

   </div>

   <div class ='middle-container'>
   </div>

   <div class ='right-container'>
       <div class ='description-job'>
      
           <div class = 'elenco-puntato'>
          
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
       </div>

   </div>

  </div>
</div>


<div class ='main-container-skills'>
  <div class ='centered-container'>
 
  <div class ='left-container'>
       <div class ='date-digital-skills'>
         <p> MATLAB | SIMULINK </p>
       </div>

   </div>

   <div class ='middle-container'>
   </div>

   <div class ='right-container'>
       <div class ='description-job'>
      
           <div class = 'elenco-puntato'>
          
      </div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
       </div>

   </div>

  </div>
</div>


<hr class = 'divider'>     

 <!-- CONTACT ME-->

 <div id = 'skills'>
  <p class = title> CONTACT ME</p>
</div>
<hr class = 'divider'>




<div class ='main-container'>

  <div class ='centered-container-contact'>
   
    <div class ='left-container'>
      <main>
        <form name ='contact_me' method ='get' action = 'index.php'>
          <p>
            <label> First Name <input class = border type = 'text' name = 'nome' ></label>
          </p>
          <p>
           <label> Last Name <input class = border type = 'text' name = 'cognome'></label>
         </p>
         <p>
           <label> E-mail <input class = border type = 'email' name = 'email'></label>
         </p>
         <p><label for="w3review">Type you message here</label></p>
          <textarea class = border id="w3review" name="description" rows="4" cols="50"></textarea>
         <p>
           <input type = 'submit' name = 'invio' value ='Send'></label>
         </p>
                 
        </form>
      </main>
     </div>

     <div class ='middle-container'>
         <div id = separator>

         </div>
     </div>

     <div data-aos="fade-left" class ='right-container'>
         <div class ='description-job'>
          <table class ='info-contact'>
            <tr>
              <td class = 'coloumn1'> </td> <td  id ='name_info-contact'><b><p>Simone Di Blasi</p></b></td>
              </tr>
            <tr>
              <td class = 'coloumn1'></td><td ><b><p class = 'contact'>AUTOMATION ENGINEER</p></b></td> 
              </tr>
       
       </table>

       <table class ='info-contact'>
              <tr>
                <td class = 'coloumn1'>
                  <img src = svg/telephone.svg >
                </td><td><b><p class = 'contact'>Phone:</p></b></td> 
              </tr>
              <tr>
                <td class = 'coloumn1'></td><td><p class = 'contact'>(+39) 3490992554</p></td> 
              </tr>
       </table>
       <table class ='info-contact'>
        <tr>
          <td class = coloumn1>
            <img src = svg/envelope.svg >
          </td><td class ><b><p class = 'contact'>Email:</p></b></td> 
          </tr>
          <tr>
            <td class = coloumn1></td><td ><p class = 'contact'>simo_dibla@hotmail.it</p></td> 
          </tr>
       </table>
       
             <div class = 'elenco-puntato'>
             
        </div>

         </div>
      
     </div>

    </div>
</div>


<footer>
   <div id = 'copyright'>
     <p>  Simone Di Blasi © 2022 </p>
   </div>
</footer>


      <script>
        AOS.init({ easing: 'ease-out-back', duration: 1000 });
      </script>
</body>

<!--Implementare project-->