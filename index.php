
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Scrolling Nav - Start Bootstrap Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/theme.css" rel="stylesheet">
        <link href="css/extras.css" rel="stylesheet">
        <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
        
        

        <!-- Custom CSS -->
        <link href="css/scrolling-nav.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!-- Navigation -->
        <nav id="navbar_main" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <img class="imagen_chiquilla" id="logo" src="img/logo_full_sombra.png"/>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#nosotros">Nosotros</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#servicios">Servicios</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portafolio">Portafolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Section -->
        <section id="intro" class="intro-section">
            
            <?php include_once 'pages/intro.php';?>
                
            <!--
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Scrolling Nav</h1>
                        <p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>
                        <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                    </div>
                </div>
            </div>
            -->
        </section>

        <!-- About Section -->
        <section id="nosotros" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>About Section</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="servicios" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Services Section</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="portafolio" class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Portafolio</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contacto" class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Contact Section asd</h1>
                        <?php include_once('contacto.php'); ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrolling-nav.js"></script>

    </body>

    
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js" type="text/javascript"></script>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#myCarousel').carousel();
            
            $('#contact_form').bootstrapValidator({
                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    first_name: {
                        validators: {
                            stringLength: {
                                min: 2,
                            },
                            notEmpty: {
                                message: 'Please supply your first name'
                            }
                        }
                    },
                    last_name: {
                        validators: {
                            stringLength: {
                                min: 2,
                            },
                            notEmpty: {
                                message: 'Please supply your last name'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Please supply your email address'
                            },
                            emailAddress: {
                                message: 'Please supply a valid email address'
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: 'Please supply your phone number'
                            },
                            phone: {
                                country: 'US',
                                message: 'Please supply a vaild phone number with area code'
                            }
                        }
                    },
                    address: {
                        validators: {
                            stringLength: {
                                min: 8,
                            },
                            notEmpty: {
                                message: 'Please supply your street address'
                            }
                        }
                    },
                    city: {
                        validators: {
                            stringLength: {
                                min: 4,
                            },
                            notEmpty: {
                                message: 'Please supply your city'
                            }
                        }
                    },
                    state: {
                        validators: {
                            notEmpty: {
                                message: 'Please select your state'
                            }
                        }
                    },
                    zip: {
                        validators: {
                            notEmpty: {
                                message: 'Please supply your zip code'
                            },
                            zipCode: {
                                country: 'US',
                                message: 'Please supply a vaild zip code'
                            }
                        }
                    },
                    comment: {
                        validators: {
                            stringLength: {
                                min: 10,
                                max: 200,
                                message: 'Please enter at least 10 characters and no more than 200'
                            },
                            notEmpty: {
                                message: 'Please supply a description of your project'
                            }
                        }
                    }
                }
            })
                    .on('success.form.bv', function (e) {
                        $('#success_message').slideDown({opacity: "show"}, "slow") // Do something ...
                        $('#contact_form').data('bootstrapValidator').resetForm();

                        // Prevent form submission
                        e.preventDefault();

                        // Get the form instance
                        var $form = $(e.target);

                        // Get the BootstrapValidator instance
                        var bv = $form.data('bootstrapValidator');

                        // Use Ajax to submit form data
                        $.post($form.attr('action'), $form.serialize(), function (result) {
                            console.log(result);
                        }, 'json');
                    });
        });
    </script>
</html>
