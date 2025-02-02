<!DOCTYPE html>
<html lang = "en">

    <head>

        <!-- Meta data -->

        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <mata name = "descrption" content = "Sri Lanka is an island country in South Asia. It lies in the Indian Ocean, southwest of the Bay of Bengal, and southeast of the Arabian Sea; it is separated from the Indian subcontinent by the Gulf of Mannar and the Palk Strait. Sri Lanka shares a maritime border with India and the Maldives.">
        <meta name = "keywords" content = "Pigeon, Sri Lanka">
        <meta name = "author" content = "NSBM Green University Pigeon group">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">

        <!-- Web page title -->
        <title> Contact - Pigeon </title>

        <link rel = "icon" type = "image/png" href = "favicon.gif">

        <!-- Boostrap link for css -->
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel = "stylesheet">

        <!-- Boostrap link for js -->
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> </script>

        <!-- Fontawesome link -->
        <script src = "https://kit.fontawesome.com/4e15aa74c6.js" crossorigin = "anonymous"> </script>

        <!-- custom css file link -->
        <link href = "All-styles.css" rel = "stylesheet">

    </head>

    <body>

        <!-- Header section -->        
        <header>
            <nav class = "navbar navbar-expand-md container navbar-dark fixed-top">
                <div class = "container">
                    
                    <a class = "navbar-brand" href = "index.php">
                        <img src = "Images/Common/logo.png" class = "logo">
                    </a>
                    
                    <button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#collapsibleNavbar">
                        <span class = "navbar-toggler-icon"> </span>
                    </button>
                    
                    <div class = "collapse navbar-collapse" id = "collapsibleNavbar">
                        <ul class = "navbar-nav ms-auto m-1 navbar_list text-center">
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "index.php"> <i class = "fa-solid fa-house"> </i> </i> Home </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "Packages.php"> <i class = "fa-solid fa-person-walking-luggage"> </i> Packages </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "Booking.php"> <i class = "fa-solid fa-handshake-simple"> </i> Booking </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "Gallery.php"> <i class = "fa-regular fa-image"> </i> Gallery </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "Contact.php"> <i class = "fa-solid fa-phone-volume"> </i> Contact </a> 
                            </li> &nbsp;
                            
                            <li class = "nav-item"> 
                                <a class = "nav-link" href = "About.php"> <i class = "fa-regular fa-address-card"> </i> About </a>
                            </li>
                        
                        </ul>
                    </div>
                
                </div>
            </nav>        
        </header>

        <!-- Underground section -->
        <section class = "underground"> </section>










        <!-- Hero section -->
        <section class = "container">
            <div class = "container hero_container mb-5">

                <img class = "img-fluid" src = "Images/Contact/Galle-Matara_P1_Galle-Hotel-RS.jpg">

                <div class = "hero_text">
                    <h1 class = "text-uppercase text-dark display-3"> Get In Touch With Us </h1>
                </div>

            </div>
        </section>










        <!-- Contact form section -->
        <section class = " container feedback">

            <div class = "mb-4">
                <h2 class = "text-center text-white display-4"> Send us your inquiry </h2>
                <h4 class = "text-center text-white"> We will answer you as soon as possible </h4>
            </div>

            <div class = "container active">                    
                <form method = "post" action = "Contact_Form.php">
                    <div class = "mt-3">
                        
                        <fieldset>

                            <label for = "FN"> <b class = "text-white-50"> First Name : </b> </label>

                            <div class = "form-floating mb-3 mt-3">
                                <input type = "text" name = "firstname" id = "FN" class = "form-control" placeholder = "Enter your first name" required>
                                <label for = "N"> Enter your first name </label>
                            </div>

                            <label for = "LN"> <b class = "text-white-50"> Last Name : </b> </label>

                            <div class = "form-floating mb-3 mt-3">
                                <input type = "text" name = "lasrname" id = "LN" class = "form-control" placeholder = "Enter your last name" required>
                                <label for = "N"> Enter your last name </label>
                            </div>

                            <label for = "E"> <b class = "text-white-50"> Email : </b> </label>
                            
                            <div class = "form-floating mb-3 mt-3">
                                <input type = "email" name = "E" id = "E" class = "form-control" placeholder = "Enter your email address" required>
                                <label for = "E"> Enter your email address </label>
                            </div>

                            <label for = "A"> <b class = "text-white-50"> Country : </b> </label>
                            
                            <div class = "form-floating mb-3 mt-3">
                                <input type = "text" name = "country" id = "A" class = "form-control" placeholder = "What is your country" required>
                                <label for = "A"> What is your country </label>
                            </div>

                            <label for = "F"> <b class = "text-white-50"> Why contact us : </b> </label>

                                <div class = "form-floating mb-3 mt-3">
                                    <select name = "Feedback" class = "form-select" id = "F" form = "Pack" required>
                                        <option selected disabled> -- select an option -- </option>
                                        <option value = "1"> For a problem related to packages </option>
                                        <option value = "2"> Know about Us </option>
                                        <option value = "3"> Other reason </option>
                                        <option value = "4">  </option>
                                        <option value = "5">  </option>
                                    </select>
                                </div>

                            <label for = "S"> <b class = "text-white-50"> Subject : </b> </label>

                            <div class = "form-floating mb-3 mt-3">
                                <input type = "textarea" name = "subject" class = "form-control" id = "S" placeholder = "Type your matter...">
                                <label for = "S"> Type your matter... </label>
                            </div>

                        </fieldset>

                        <div class = "row text-center">
                                
                            <div class = "mt-4 col-6">
                                <input type = "reset" class = "btn btn-info" value = "Reset Form">
                            </div>
                            
                            <div class = "mt-4 col-6">
                                <input type = "submit" class = "btn btn-info" value = "Send feedback" name="Submit">
                            </div>

                        </div>

                    </div>
                </form>
            </div>

        </section>









        <!-- iframe section -->
        <section class = "container">
            <div class = "container">
                <div class = "container aspect_ratio_box">
                    <iframe class = "mt-3" src = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15846.303361252902!2d80.0415729!3d6.8213291!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1642905399499!5m2!1sen!2slk" title = "Location of NSBM Green University" loading = "lazy"> </iframe>
                </div>
            </div>
        </section>




        





        <!-- Footer section -->
        <footer class = "text-center text-white container footer">

            <div class = "ps-4 pe-4 row justify-content-center mt-5">

                <!-- Social media -->
                <div class = "col-auto">

                    <h5 class = "text-uppercase"> Follow us </h5>

                    <div class = "mb-4 col-auto">

                        <!-- Facebook -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://www.facebook.com/nsbm.lk/" role = "button" title = "NSBM Oficial Facebook Account">
                            <i class = "fab fa-facebook-f"> </i> 
                        </a>

                        <!-- Instagram -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://www.instagram.com/nsbmgreenuniversity/" role = "button" title = "NSBM Oficial Instagram Account">
                            <i class = "fab fa-instagram"> </i> 
                        </a>
                        
                        <!-- Twitter -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://twitter.com/nsbm_srilanka" role = "button" title = "NSBM Oficial Twitter Account">
                            <i class = "fab fa-twitter"> </i>
                        </a>

                        <!-- Youtube -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://www.youtube.com/channel/UCHsodhRyiuri2jD7H7nfsRg" role = "button" title = "NSBM Oficial Youtube Account">
                            <i class = "fab fa-youtube"> </i>
                        </a>

                        <!-- Tiktok -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://www.tiktok.com/@nsbmgreenuniversity" role = "button" title = "NSBM Oficial Tiktok Account">
                            <i class = "fab fa-tiktok"> </i>
                        </a>

                        <!-- Linkedin -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://lk.linkedin.com/school/nsbmgreenuniversity/" role = "button" title = "NSBM Oficial Linkedin Account">
                            <i class = "fab fa-linkedin-in"> </i>
                        </a>
                        
                        <!-- Github -->
                        <a class = "btn btn-outline-light btn-floating m-1" href = "https://github.com/IEEE-Student-Branch-NSBM" role = "button" title = "NSBM IEEE Student Branch Github Account">
                            <i class = "fab fa-github"> </i>
                        </a>
                    
                    </div>
                                            
                    <div class = "row">

                        <div class = "col-lg-6 mb-lg-3">
                            <img class = "img-fluid" src = "Images/Common/footer-image.jpg">
                        </div>
                            
                        <div class = "col-lg-6">

                            <p class = "mt-3 mb-4"> The first-ever green university in South Asia, is dedicated to providing world-class qualifications to future leaders </p>
                                
                            <ul class = "list-unstyled">

                                <h5 class = "text-uppercase mb-4"> Contact info </h5>

                                <li class = "mb-3">
                                    <a class = "text-white" href = "https://www.nsbm.ac.lk"> NSBM Green University </a>
                                </li>

                                <li class = "mb-3">
                                    <a class = "text-white" href = "https://www.sltda.gov.lk/en"> Sri Lanka Tourism Board </a>
                                </li>

                                <li class = "mb-4">
                                    <a class = "text-white" href = "https://www.bing.com/search?q=google+map+sri+lanka&qs=n&form=QBRE&sp=-1&pq=google+map+sri+lanka&sc=10-20&sk=&cvid=2404E0A1976F41509C614D957CA37887&ghsh=0&ghacc=0&ghpl="> Colombo, Sri Lanka </a>
                                </li>

                                <li>
                                    <a class = "text-white" href = "TC.php"> Terms of use & Privacy policy </a>
                                </li>

                            </ul>

                        </div>
                        
                    </div>

                </div>
                
                <!-- Copyright -->
                <div class = "text-center p-4 copyright">
                    <i class = "fa-regular fa-copyright"> </i> 2023 Copyright |
                    <a class = "text-white" href = "https://pigeon.great-site.net/?i=1/"> pigeon.great-site.net </a>
                </div>

            </div>

        </footer>

    </body>

</html>