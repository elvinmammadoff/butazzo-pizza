<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/prism.css">
        <link rel="stylesheet" href="css/main.css">

        <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700|Raleway:300i,400,600,700" rel="stylesheet">

        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/x-icon" href="favicon.ico">

    </head>
    <body>

        <header id="site-header">
            
            <div class="row">

              <div class="large-10 large-centered columns">

                  <div class="name">
                      <h3>Butazzo Pizza</h3>
                      <p>Premium HTML Template Documentation</p>
                  </div>

                  <ul class="meta">
                      <li><strong>Author:</strong> <a href="https://themeforest.net/user/alissio" target="_blank">Alissio</a></li>
                      <li><strong>Live Preview:</strong> <a href="https://butazzo-pizza.herokuapp.com/">View Demo</a></li>
                      <li><strong>Support:</strong> <a href="mailto:elvinmammadoff@gmail.com">Ask a Question</a></li> 
                  </ul>

                  <p>Thank you for purchasing my theme. <br> If you have any questions that are beyond the scope of this help file, <br> please feel free to email <a href="mailto:designer.rafiq@gmail.com">here</a><br> Thanks so much!</p>

              </div>


            </div>

        </header>

        <section id="site-body">

            <div id="container" class="row">

                <div id="sidebar" class="large-3 large-push-9 columns" data-magellan-expedition="fixed">

                    <div class="sticky">

                      <h3>Table of Contents</h3>
                      <ol>
                          <li data-magellan-arrival="getting-started"><a href="#getting-started">Getting Started</a></li>
                          <li data-magellan-arrival="html-structure"><a href="#html-structure">HTML Structure</a></li>
                          <ul>
                            <li data-magellan-arrival="skeleton-details"><a href="#skeleton-details">Skeleton Details</a></li>
                          </ul>
                          <li data-magellan-arrival="stylesheet-files"><a href="#stylesheet-files">Stylesheet Files</a></li>
                          <li data-magellan-arrival="javascript-files"><a href="#javascript-files">Javascript Files</a></li>
                          <li data-magellan-arrival="support-desk"><a href="#support-desk">Support Desk</a></li>
                          <li data-magellan-arrival="files-resources"><a href="#files-resources">Files & Resources</a></li>
                          <li data-magellan-arrival="files-resources"><a href="#php-file">PHP Code Explanation</a></li>
                          <li data-magellan-arrival="files-resources"><a href="#google-map">Google Map Api</a></li>
                          <li data-magellan-arrival="files-resources"><a href="#updates">Regular Updates</a></li>
                      </ol>

                    </div>

                </div>

                <m id="main-content" class="large-9 large-pull-3 columns">

                    <section id="introduction" class="section" data-magellan-destination="introduction">
                          
                          <h1>Howdy!</h1>
                          <p class="lead">You are a shining owner of a regular license based on Butazzo Pizza Theme</p>
                          <p>First of all, Thank you so much for purchasing this template and for being my loyal customer. You are entitled to get free updates to this product + exceptional support (as per market policy) from the author directly.</p>
                          <p>This documentation is to help you understand the template's structure. Please go through the documentation carefully to understand how this template is made and how to edit this properly. Basic HTML and CSS knowledge is required to customize this template.</p>

                    </section>

                    <section id="getting-started" class="section" data-magellan-destination="getting-started">
                          
                          <h1>1. Getting Started</h1>

                          <br>

                          <p>When you are ready to use this template, you must first upload the template files to a local or remote server. In this regard,  unzip the template package you have downloaded from themeforest. In extracted folder you can see following folders:<p>

                          <h3>Package contents:</h3>

                          <ul>
                            <li><strong>template</strong> — Contains all the original template files comprises of HTML, CSS, JS etc. This is the folder which you'll upload on your server after necessary modifications.</li>

                            <li><strong>documentation</strong> — Inside this folder, you will find the same documentation updated with the latest changes.</li>
                            
                          </ul>

                          <p>Details regarding contents and structure of <code>template</code> folder is given below.</p>

                    </section>

                    <section id="html-structure" class="section"  data-magellan-destination="html-structure">
                          
                      <h1>2. HTML Structure</h1>

                      <br>

                      <p>This theme is a responsive landing page which built with Bootstrap fraemwork and you can customize it very easily. All of the information within the main
                        content area is nested within a div with an class of "sections". The general
                        <code>template</code> structure is the same throughout the template. Here is the general
                        structure. Note that for brevity, I'm not including content that isn’t relevant to the
                        technique.</p>

<pre data-language="HTML Skeleton">
  <code class="language-markup">
  
    <!-- BEGIN  Loading Section -->  
    <div class="loading-overlay">
        <div class="spinner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END Loading Section -->
  
    <!-- BEGIN body wrapper -->
      <div class="body-wrapper">
  
        <!-- Begin header-->
        <header id="header"></header>
        <!-- End header-->
  
        <!-- Begin Sections-->
  
        <!--    About Us    -->
        <div class="container section" id="about_us"></div>
  
        <!--    Menus   -->
        <div class="container section" id="menu"></div>
  
        <!--    Reservation    -->
        <div class="fixed_layer section" id="reservation"></div>
  
        <!--    Gallery    -->
        <div class="container section" id="gallery"></div>
  
        <!-- End Sections -->
  
        <!--  Begin Footer  -->
        <footer></footer> 
        <!-- End Footer -->
  
      </div>
    <!-- END body-wrapper -->
    
    <!-- START mobile right burger menu -->
    <nav class="cd-nav-container right_menu" id="cd-nav"></nav>
  
    <div class="cd-overlay"></div><!-- /.cd-overlay -->
  
  </code>
  </pre>
                          

                    </section>
                    <section id="skeleton-details" class="sub-section"  data-magellan-destination="skeleton-details">
                          
                          <h2>2.1. Skeleton Details</h2>

                          <br>

                          <p>From the above skeleton it can be seen that there are 7 major logical code blocks in page. Most of the contents displayed on the screen goes in one of this block.</p>

                          <p><code>div class="loading-overlay"</code> shows a loading overlay on the whole page or over single DOM elements</p>

                          <p><code>header id="header"</code> section contains the code for carousel, contact details, logo and primary navigation at top.</p>

                          <p><code>div id="about_us"</code> <code>div id="menu"</code> <code>div id="reservation"</code> <code>div id="gallery"</code> section contains the page specific content as well as their details.</p>

                          <p><code>site-footer</code> section typically remains the same. It consist of short about info, working days list, contact details, social icons and copyright text note also.</p>

                          <p>Further, skeleton shows two additional markup tags.<code>div id="cd-nav"</code> contains the menu for the mobile version. <code>div class="cd-overlay"</code> when mobile menu showed this layer visibled under mobile menu above content too.</p>

                    </section>
                    <section id="stylesheet-files" class="section" data-magellan-destination="stylesheet-files">
                          
                          <h1>3. Stylesheet Files</h1>

                          <br>

                          <p>All styling related files of this template can be found in this folder path <code>template/src/assets/css</code></p>

<pre data-language="Folder Map">
  <code class="language-markup">
    css/
    |
    |-- bootstrap.min.css
    |-- bootstrap-datepicker.css
    |-- bootstrap-datetimepicker.css
    |-- bootstrap-theme.min.css
    |-- fonts.css
    |-- font-awesome.min.css
    |-- main.css
    |-- responsive.css
    |-- aos.css
    |-- slick.css
    |-- slick-theme.css
    |-- scrolling-nav.css
    |-- jquery.fancybox.css
    |-- touch-sideswipe.css
  </code>
</pre>

                          <br>
                          <p>
                           As it can be seen, the folder contains 14 <code>css</code> files.<br> 
                          <code>bootstrap.min.css</code> is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system.<br>
                          <code>bootstrap-datepicker.css</code> provides a flexible datepicker widget in the Bootstrap style.<br>
                          <code>bootstrap-datetimepicker.css</code> widget based on twitter bootstrap.<br>
                          <code>fonts.css</code> import fonts to stylesheet.<br>
                          <code>font-awesome.min.css</code> is iconic font and CSS toolkit.<br>
                          <code>main.css</code> custom style file.<br> 
                          <code>responsive.css</code> for responsive design.<br>      
                          <code>aos.css</code> animate On scroll library.<br>     
                          <code>slick.css</code> is a responsive carousel jQuery plugin that supports multiple breakpoints, CSS3 transitions, touch events/swiping & much more.<br>                          
                          <code>scrolling-nav.css</code> is a basic Bootstrap framework for creating smooth scrolling, one page websites <br>   
                          <code>jquery.fancybox.css</code> is a tool for displaying images, html content and multi-media in a Mac-style "lightbox" that floats overtop of web page <br>
                          <code>touch-sideswipe.css</code> widget-library for mobile navbar (vanilla js and little bit pure css)                                        
                          </p>
                    </section>

                    <section id="javascript-files" class="section" data-magellan-destination="javascript-files">
                          
                          <h1>4. Javascript Files</h1>

                          <br>

                          <p>All client-side related javascript files can be found in this folder path <code>template/src/assets/js</code></p>

<pre data-language="Folder Map">
  <code class="language-markup">
    js/
    |    
    |-- jquery-2.1.1.min.js  
    |-- bootstrap.min.js 
    |-- jquery.easing.min.js      
    |-- bootstrap-datepicker.js
    |-- bootstrap-datetimepicker.js
    |-- moment.js
    |-- main.js
    |-- aos.js
    |-- jquery.fancybox.js
    |-- jquery.mousewheel.min.js
    |-- jquery.touchSwipe.min.js
    |-- slick.min.js
    |-- scrolling-nav.js
    |-- loadMoreResults.js
    |-- mapApiKey.js
  </code>
</pre> 
                         
                          <br>
                          <p>
                          In this folder there are 13 files. <br> 
                          <code>jquery.min.js</code> is a fast, small, and feature-rich JavaScript library<br>
                          <code>jquery.easing.min.js</code> a jQuery plugin from GSGD to give advanced easing options<br>
                          <code>bootstrap.min.js</code> is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system<br>
                          <code>bootstrap-datetimepicker.js</code> widget based on twitter bootstrap<br />
                          <code>bootstrap-datepicker.js</code> provides a flexible datepicker widget in the Bootstrap style
                          <code>main.js</code> contains all the custom programmed javascript coded specifically for this template<br> 
                          <code>aos.js</code> animate On scroll library<br />
                          <code>slick.min.js</code> is a responsive carousel jQuery plugin that supports multiple breakpoints, CSS3 transitions, touch events/swiping & much more<br>
                          <code>scrolling-nav.js</code> is a basic Bootstrap framework for creating smooth scrolling, one page websites <br />   
                          <code>jquery.fancybox.js</code> is a tool for displaying images, html content and multi-media in a Mac-style "lightbox" that floats overtop of web page <br />
                          <code>jquery.touchSwipe.min.js</code> widget-library for mobile navbar (vanilla js and little bit pure css) <br />
                          <code>loadMoreResults.js</code> is a small jQuery plugin for adding a 'Load More' pagination button to your long web content that allows you to dynamically load more items according to your needs. <br />    
                          <code>mapApiKey.js</code> to use the Maps Embed API you must have an API key. The API key is a unique identifier that is used to authenticate requests associated with your project for usage and billing purposes.                   
                        </p>

                    </section>

                    <section id="support-desk" class="section" data-magellan-destination="support-desk">
                          
                          <h1>5. Support Desk</h1>

                          <br>

                          <p>Please be reminded that you have purchased a very affordable theme and you have not paid for a full-time web design agency. Occasionally, we will help with small tweaks, but these requests will be put on a lower priority due to their nature.</p>
                      

                          <section class="sub-section">
                                
                                <h2>Support for my items includes:</h2>

                                <br>

                                <ul>
                                  <li>Responding to questions or problems regarding the item and its features</li>
                                  <li>Fixing bugs and reported issues</li>        
                                  <li>Providing updates to ensure compatibility with new software versions</li>
                                </ul>   

                          </section>

                          <section class="sub-section">
                                
                                <h2>Item support does not include:</h2>

                                <br>

                                <ul>
                                  <li>Customization and installation services</li>
                                  <li>Support for third party software and plug-ins</li>
                                </ul>   

                          </section>

                          <section class="sub-section">
                                
                                <h2>Before seeking support, please...</h2>

                                <br>

                                <ul>
                                  <li>Make sure your question is a valid item issue and not a customization request.</li>
                                  <li>Make sure you have read through the documentation and any related video guides before asking support on how to accomplish a task.</li>
                                  <li>Make sure to double check the item FAQs.</li>
                                  <li>If you have customized your item and now have an issue, back-track to make sure you didn't make a mistake. If you have made changes and can't find the issue, please provide us with your changelog.</li>
                                  <li>Almost 80% of the time we find that the solution to people's issues can be solved with a simple "Google Search". You might want to try that before seeking support. You might be able to fix the issue yourself much quicker than we can respond to your request.</li>
                                  <li>Make sure to state the name of the item you are having issues with when requesting support via ThemeForest.</li>
                                </ul>

                          </section>   


                    </section>                    

                    <section id="files-resources" class="section" data-magellan-destination="files-resources">
                          
                          <h1>6. Files &amp; Resources</h1>

                          <br>

                          <p>The template uses following resources by third parties.<p>


                          <ul>
                            <li><a href="https://jquery.com/" target="_blank">jQuery</a></li>
                            <li><a href="https://getbootstrap.com/docs/3.3/" target="_blank">Bootstrap</a></li>
                            <li><a href="http://gsgd.co.uk/splash/" target="_blank">Jquery Easing</a></li>
                            <li><a href="https://eonasdan.github.io/bootstrap-datetimepicker/" target="_blank">Bootstrap Date/Time Picker</a></li>
                            <li><a href="https://bootstrap-datepicker.readthedocs.io/en/latest/" target="_blank">Bootstrap Date Picker</a></li>
                            <li><a href="https://michalsnik.github.io/aos/" target="_blank">Aos</a></li>
                            <li><a href="http://fancybox.net/" target="_blank">Fancybox</a></li>
                            <li><a href="https://github.com/jquery/jquery-mousewheel" target="_blank">Jquery Mousewheel</a></li>
                            <li><a href="https://github.com/mattbryson/TouchSwipe-Jquery-Plugin" target="_blank">Touch Swipe</a></li>
                            <li><a href="http://kenwheeler.github.io/slick/" target="_blank">Slick Slider</a></li>
                            <li><a href="https://startbootstrap.com/template-overviews/scrolling-nav/" target="_blank">Scrolling Nav</a></li>
                            <li><a href="https://www.jqueryscript.net/loading/Load-More-Pagination-jQuery-loadMoreResults.html" target="_blank">loadMoreResults</a></li>
                            <li> <strong>Fonts used</strong>
                              <ul>
                                <li><a href="https://www.fontsquirrel.com/fonts/chunkfive" target="_blank">ChunkFive Ex</a></li>
                                <li><a href="https://fonts.google.com/specimen/Montserrat" target="_blank">Montserrat</a></li>
                                <li><a href="https://fonts.google.com/specimen/Raleway" target="_blank">Raleway</a></li>
                                <li><a href="https://fontawesome.com/v4.7.0/" target="_blank">Font Awesome</a></li>
                              </ul>
                            </li>
                          </ul>

                    </section>

                    <section id="php-file" class="section" data-magellan-destination="php-file">
                          
                          <h1>7. PHP Code Explanation</h1>

                          <br>

                          <p><code>index.php</code> file for deploy and init on docker container or heroku<p>

                    </section>

                    <section id="google-map" class="section" data-magellan-destination="google-map">
                          
                          <h1>8. Google Map Api</h1>

                          <br>

                          <p>I've used Google Map Api to generate Google Map. You are able to change map style or marker from guidelines <a href="https://developers.google.com/maps/documentation/javascript/adding-a-google-map" target="_blank">Google Map</a><p>

                    </section>

                    <section id="updates" class="section" data-magellan-destination="updates">
                          
                          <h1>9. Regular Updates</h1>

                          <br>

                          <p>We’re always improving our skills and knowledge so we’re making changes regularly. From bug fixes to new awesome features, updates generally come at least twice a month.<p>                       

<pre>   
  
  V. 1.4.1 – 13.10.2020
  - Fix: "Our Menus" section tab on click problem on iPhone devices.
  - Tested: Android (Samsung, Google, HTC) and iOS (iPhone 11, iPhone 6s, iPad (6th Generation), iPad Air 2) devices, Safari, Firefox, Chrome browsers. 
  - Tweak: Improved Documentation
  
  V. 1.4.0 – 10.07.2020
  - New Feature: Chef personal info can be added and shown on slider
  - Fix: Google Map API key source
  - Tweak: Improved Documentation

  V. 1.3.0 – 03.05.2020
  - New: Animate gallery load icon added for more button
  - Fix: Go to top button work on footer
  - Fix: Search input clear empty value
  - Tweak: Improved Documentation
    
  V. 1.2.0 – 1.12.2019
  - New: Scroll up button functionality added
  - Fix: Header search clear button type
  - Fix: Inputs type text autocomplete 
  - Tweak: Improved Documentation

  V. 1.1.1 – 30.09.2018
  - Fix: Burger menu view on tablet devices
  - Fix: Navbar fixed view 
  - Tweak: Improved Documentation

  V. 1.1.0 – 08.07.2018
  - New: loadMoreResults plugin for gallery photos
  - Fix: Slider responsive view to medium devices
  - Added: Extra images for slider, menu and gallery sections
  - Fix: Content of menu section  
  - Tweak: Improved Documentation

  V. 1.0.1 – 7.07.2018
  - Tweak: Improved Fonts Loading Performance
  
  V. 1.0.0 – 2.06.2018
  - Initial release
</pre>  
                    </section>

                    <footer>
                      <p>© Butazzo Pizza Cafe and Restaurant HTML Template</p>
                    </footer>

                </div>

            </div>
   
        </section>
        
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/prism.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
