<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>HOME PAGE</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/demo.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body class="ss-preload">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header 
    ================================================== -->
    <header>
        <div class="row">
            <div class="column lg-12 text-center">

                <h1> Tugas Struktur data Rekayasa ide<span></h1><h4>Penerapan Login Untuk Keamanan Data</span></h4>

                <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatum cum quod harum similique
                cumque provident aspernatur hic quibusdam, necessitatibus at fuga aliquid repellat magni pariatur obcaecati
                </p>

                <div class="card text-center">
                <div class="card">
                <div class="card-header"> <br>        
                <div class="column entry">
                <div class="entry__thumb">
                <a href = http://localhost:8000/>
                <input type="button" name="data mahasiswa" class="btn btn-primary" value="Tambah Data Mahasiswa"> </input>
                </a>
                </div>
                </div>
                </div>
                </div>
        </div>
    </header> <!-- end header -->


    <!-- main content
    ================================================== -->
    <main>
        <p> <h4>Website Ini Dibuat Dengan :</h4> </p>
        <div class="row block-lg-one-third block-md-one-half block-tab-whole">
           
            <div class="column entry">
                <div class="entry__thumb">
                <a href = https://www.google.com/search?q=html>
                <img src="HTML5.png" >
                    </a>
                </div>
                <div class="entry__title">
                    <h3>HTML 5</h3>
                </div>
            </div>

            <div class="column entry">
                <div class="entry__thumb">
                <a href = https://www.google.com/search?q=php>
                <img src="PHPP.png">
                </a>
                </div>
                <div class="entry__title">
                    <h3>PHP</h3>
                </div>
            </div>

            <div class="column entry">
                <div class="entry__thumb">
                    <a href = https://www.google.com/search?q=css>
                    <img src="CSS.png">
                    </a>
                </div>
                <div class="entry__title">
                    <h3>CSS</h3>
                </div>
            </div>
            
        </div>
    </main> <!--  end main -->

    <!-- Java Script
    ================================================== -->
    <script>
        
        (function(html) {

            'use strict';

            html.className = html.className.replace(/\bno-js\b/g, '') + 'js';

            const body = document.querySelector('body');
            const preloader = document.querySelector('#preloader');

            if (!preloader) return;

            window.addEventListener('load', function() {

                body.classList.remove('ss-preload');
                body.classList.add('ss-loaded');

                preloader.addEventListener('transitionend', function afterTransition(e) {
                    if (e.target.matches('#preloader'))  {
                        body.classList.add('ss-show');
                        e.target.style.display = 'none';
                        preloader.removeEventListener(e.type, afterTransition);
                    }
                });

            });

        })(document.documentElement);
    
    </script>

<div class="entry__thumb">    
<a href = logout.php>
<input type="button" name="logout" class="btn btn-primary" value="Keluar"> </input>
</a>
</body>
</div>

</html>