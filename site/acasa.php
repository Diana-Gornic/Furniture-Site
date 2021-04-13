<?php 
    
    if (isset($_POST['submitted'])) {
        include ("includes/formDb.inc.php");
        
        $nume = $_POST['nume'];
        $ziua = $_POST['ziua'];
        $ora = $_POST['ora'];
        $nrTel = $_POST['nrTel'];

        $sqlInsert = "INSERT INTO prog (nume, ziua, ora, nrTel) VALUES ('$nume', '$ziua', '$ora', '$nrTel')";

        if (!mysqli_query($conn, $sqlInsert)) {
            die('error inserting new record');
        }

        $newRec = "PROGRAMAREA A FOST FACUTA!";
        

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>LA FERONERIA & ACCESORIA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link rel="stylesheet" type="text/css" href="../style.css">

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
            <a href="#" class="navbar-brand scroll-top">La Feroneria & Accesoria</a>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="acasa.php">Acasa</a></li>
                        <li><a href="menu.html">Mobila</a></li>
                        <li><a href="admin/accesorii.php">Accesorii</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
            <div class="header-login">
                <?php 
                if (isset($_SESSION['userAdmin'])) {
                    echo 'Esti logat!';
                }
                else {
                    echo '<p class="textfield">Nu sunteti logat!</p>';
                }
                ?>
                <h1>LogIn</h1>
                <?php 
                    if (isset($_SESSION['userAdmin'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                    <class="btn" button type="submit" name="logout-submit">Logout</button>
                    </form>';
                }
                else {
                    echo '<form action="includes/login.inc.php" method="post">
                    <div class="textbox"> <input type="text" name="mailUser" placeholder="Mail/Username"></div>
                    <div class="textbox"> <input type="password" name="pwd" placeholder="Password"> </div>
                    <button class="btn" type="submit" name="login-submit"><a href="admin/acasaAdmin.php">LogIn</a></button><div>
                    </form>
                  
                    </div>';
                }
                ?>
            </div>
         </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h4>Pasiune transformata in busineess</h4>
                    <h2>La Feroneria & Accesoria</h2>
                    <p>In urma cu 7 ani am hotarat sa transformam pasiunea intr-o afacere de familie, iar azi reusim sa aducem confort casei tale! Deoarece clienţii reprezintă prioritatea noastră, putem onora comenzi urgente în cel mai scurt timp posibil şi oferim garanţie extinsă. Materialele pe care le folosim sunt de cea mai bună calitate, iar gama de culori şi modele din care pot alege clienţii este foarte largă. Deoarece lucrăm cu propriul nostru magazin de accesorii si feronerie, realizăm mobila cu cele mai performante elemente de feronerie. Punem la dispoziţia clienţilor şi o gamă variată de electrocasnice, deoarece firma noastră este reprezentant Teka. Oferim servicii de consultanţă, proiectare, execuţie, transport şi montaj gratuit.</p>
                    <div class="primary-button">
                        <a href="#" class="scroll-link" data-id="book-table">Programare Online</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="cook-delecious">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-md-offset-1">
                    <div class="first-image">
                        <img src="img/bc6.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cook-content">
                        <h4>Noi iti mobilam casa!</h4>
                        <div class="contact-content">
                            <span>Suna-ne la:</span>
                            <h6>0748 515 337</h6>
                        </div>
                        <span>sau</span>
                        <div class="primary-white-button">
                            <a href="#" class="scroll-link" data-id="book-table">Programare Online</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="second-image">
                        <img src="img/bc12.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="img/bc6.jpg" alt="Breakfast">
                        <h4>Bucatarie</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="img/d5.jpg" alt="Lunch">
                        <h4>Dormitor</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="img/l1.jpg" alt="Dinner">
                        <h4>Livingroom</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="img/b3.jpg" alt="Desserts">
                        <h4>Baie</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="book-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Fa pe loc o programare cu unul dintre consultantii nostri!</h2>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-12">
                    <div class="left-image">
                        <img src="img/bg3.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="right-info">
                        <h4>Programare</h4>
                        <form id="form-submit" action="acasa.php" method="post">
                            <input type="hidden" name="submitted" value="true" />
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='ziua' onchange='this.form.()'>
                                            <option value="">Select day</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <select required name='ora' onchange='this.form.()'>
                                            <option value="">Select hour</option>
                                            <option value="10-00">10:00</option>
                                            <option value="12-00">12:00</option>
                                            <option value="14-00">14:00</option>
                                            <option value="16-00">16:00</option>
                                            <option value="18-00">18:00</option>
                                            <option value="20-00">20:00</option>
                                            <option value="22-00">22:00</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="nume" type="name" class="form-control" id="name" placeholder="Full name" required="">
                                    </fieldset> 
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <input name="nrTel" type="text" class="form-control" id="phone" placeholder="Phone number" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Finalizeaza!</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                        <?php 
                            echo $newRec;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="social-icons">
                        <li><a rel="nofollow" href="https://www.facebook.com/laferoneriaaccesoria"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/mobila_comanda_cluj/?hl=ro"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>