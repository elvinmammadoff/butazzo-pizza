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
                      <h3>Levien - Casino Resort & Hotel</h3>
                      <p>Premium HTML Template Documentation</p>
                  </div>

                  <ul class="meta">
                      <li><strong>Author:</strong> <a href="https://themeforest.net/user/alissio" target="_blank">Alissio</a></li>
                      <li><strong>Live Preview:</strong> <a href="https://levien-casino.herokuapp.com/" target="_blank">View Demo</a></li>
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
                          <p class="lead">You are a shining owner of a regular license based on Levien - Casino Resort & Hotel Theme</p>
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

                      <p>Levien – Casino Resort & Hotel HTML Template Included 4 HTML files are well-organized and named accordingly, so it’s very easy to change any and all of the design. 
                        Our Template files are built with Bootstrap 4. You can customize it very easily to fit your casino needs.<br/>
                        The general <code>template</code> structure is the same throughout the template. Here is the general structure. Note that for brevity, I'm not including content that isn’t relevant to the technique.
                      </p>

<pre data-language="HTML Skeleton">
<code class="language-markup">

  <!-- BEGIN  Loading Section -->
  <div id="loading">
    <div class="loading__center">
      <div class="loading__position">
        <div id="object"></div>
      </div>
    </div>
  </div>
  <!-- END Loading Section -->

  <!-- BEGIN Header -->
  <header class="Navbar sticky-header"></header>
  <!-- END Header-->

  <!-- BEGIN Main -->
  <div class="Main sticky">

      <!-- Banner -->
      <section class="Banner section"></section>

      <!-- Hotels -->
      <section class="Hotels section"></section>

      <!-- Review -->
      <section class="Review section"></section>

  </div>
  <!-- END Main -->

  <!-- BEGIN Mobile burger navigation -->
  <nav class="cd-nav-container burger-menu burger-menu--right" id="cd-nav"></nav>
  <!-- END Mobile burger navigation -->

  <!-- BEGIN Overlay mask -->
  <div class="cd-overlay"></div>
  <!-- END Overlay mask -->

  <!-- BEGIN Go to top button -->
  <div class="scroll-up">
      <div class="scroll-up__icon"></div>
  </div>
  <!-- END Go to top button -->

  <!-- BEGIN Footer -->
  <footer class="Navbar clearfix"></footer>
  <!-- END Footer -->

</code>
</pre>
                          

                    </section>
                          <section id="skeleton-details" class="section"  data-magellan-destination="skeleton-details">
                                
                                <h2>2.1. Skeleton Details</h2>

                                <br>

                                <p>From the above skeleton it can be seen that there are 7 major logical code blocks on page. Most of the contents displayed on the screen go in one of these blocks.</p>

                                <p><code>div id="loading"</code> shows a loading layout on the whole page</p>

                                <p><code>header class="Navbar sticky-header"</code> contains the code logo and primary navigation at the top.</p>

                                <p><code>div class="Main sticky"</code> contains the page specific content as well as their details.</p>

                                <p>Further, skeleton shows two additional markup tags.<code>nav class="cd-nav-container burger-menu burger-menu--right" id="cd-nav"</code> contains the menu for the mobile version. <code>div class="cd-overlay"</code> when mobile menu is shown, this layer is visible under mobile menu above content, too.</p>

                                <p><code>div class="scroll-up"</code> when you click this element which shows on the right side you can go to the top automatically.</p>

                                <p><code>footer class="Navbar clearfix"</code> contains the code like header and extra subscribe form.</p>

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
    |-- slick-carousel.min
    |-- fonts.css
    |-- style.css
    |-- responsive.css
  </code>
</pre>

                          <br>
                          <p>
                           As it can be seen, the folder contains 5 <code>css</code> files.<br> 
                          <code>bootstrap.min.css</code> is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system.<br>
                          <code>slick-carousel.css</code> is a responsive carousel jQuery plugin that supports multiple breakpoints, CSS3 transitions, touch events/swiping & much more.<br>                          
                          <code>fonts.css</code> import fonts to stylesheet.<br>
                          <code>style.css</code> custom style file.<br> 
                          <code>responsive.css</code> for responsive design.<br>                     
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
    |-- jquery.min.js  
    |-- bootstrap.min.js 
    |-- slick.min.js
    |-- burger-menu.min.js
    |-- main.js
  </code>
</pre> 
                         
                          <br>
                          <p>
                          In this folder there are 5 files. <br> 
                          <code>jquery.min.js</code> is a fast, small, and feature-rich JavaScript library<br>
                          <code>bootstrap.min.js</code> is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system<br>
                          <code>slick.min.js</code> is a responsive carousel jQuery plugin that supports multiple breakpoints, CSS3 transitions, touch events/swiping & much more<br>
                          <code>burger-menu.min.js</code> contains javascript codes for mobile menu<br>
                          <code>main.js</code> contains all the custom programmed javascript coded specifically for this template<br> 
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
                            <li><a href="https://getbootstrap.com/docs/4.0/getting-started/introduction/" target="_blank">Bootstrap 4</a></li>
                            <li><a href="http://kenwheeler.github.io/slick/" target="_blank">Slick Slider</a></li>
                            <li> <strong>Fonts used</strong>
                              <ul>
                                <li><a href="https://www.downloadfonts.io/proxima-nova-font-family-free/" target="_blank">Proxima Nova</a></li>
                              </ul>
                            </li>
                          </ul>

                    </section>

                    <section id="php-file" class="section" data-magellan-destination="php-file">
                          
                          <h1>7. PHP Code Explanation</h1>

                          <br>

                          <p>Php files for deploy and init on docker container or heroku<p>

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

                    </section>

                    <footer>
                      <p>© Levien - Casino Resort & Hotel HTML Template</p>
                    </footer>

                </div>

            </div>
   
        </section>
        
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/prism.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
