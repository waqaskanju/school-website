<?php include('config/connect.php'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>School Home</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="css/style.responsive.css" media="all">
        <script src="javascript/jquery.js"></script>
        <script src="javascript/script.js"></script>
        <script src="javascript/script.responsive.js"></script>
        <script>jQuery(function($) {
        'use strict';
        if ($.fn.slider) {
            $(".art-slidecontainere1").each(function () {
                var slideContainer = $(this), tmp;
                var inner = $(".art-slider-inner", slideContainer);
                var helper = null;
                if ($.support.transition) {
                    helper = new BackgroundHelper();
                    helper.init("fade", "next", $(".art-slide-item", inner).first().css($.support.transition.prefix + "transition-duration"));
                    inner.children().each(function () {
                        helper.processSlide($(this));
                    });
                }
                inner.children().eq(0).addClass("active");
                slideContainer.slider({
                    pause: 2600,
                    speed: 600,
                    repeat: true,
                    animation: "fade",
                    direction: "next",
                    navigator: slideContainer.siblings(".art-slidenavigatore1"),
                    helper: helper                
                });
            });
        }
    });
    <?php include('galhead.php') ?>
<body>
	<div id="art-main">
		<?php include('template/header.php'); ?>
    <div class="art-sheet clearfix">
		<?php include('template/nav.php'); ?>
    <div class="art-layout-wrapper">
    <div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell art-content">
        <article class="art-post art-article">
        <div class="art-postcontent art-postcontent-0 clearfix">
        <?php include('template/picnav.php'); ?>
    <div class="art-content-layout-br layout-item-1"></div>
    <div class="art-content-layout-br layout-item-4"></div>
    <div class="art-content-layout layout-item-5">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-7" style="width: 25%" >
        <h1>News</h1>
        <?php news($dbc); ?>
    </div>
    <div class="art-layout-cell layout-item-8" style="width: 75%" >
        <h1>Welcom To Govt Higher Secondary School Ghani Dheri&nbsp;</h1>
        <p>
            <span style="font-style:italic;">Govt Higher Secondary Is Situated Near The bazar</span>
        </p>
    <div id="e1" style="position: relative; display: inline-block; z-index: 0; margin: 0px;  border-width: 0px;  " class="art-collage">
        <div class="art-slider art-slidecontainere1" data-width="660" data-height="203">
            <div class="art-slider-inner">
                <div class="art-slide-item art-slidee10"></div>
                <div class="art-slide-item art-slidee11"></div>
                <div class="art-slide-item art-slidee12"></div>
                <div class="art-slide-item art-slidee13"></div>
            </div>
        </div>
        <div class="art-slidenavigator art-slidenavigatore1" data-left="87.27">
            <a href="#" class="art-slidenavigatoritem"></a>
            <a href="#" class="art-slidenavigatoritem"></a>
            <a href="#" class="art-slidenavigatoritem"></a>
            <a href="#" class="art-slidenavigatoritem"></a>
        </div>
    </div>
    <h1>Principal Message</h1>
    <p>
        <img width="128" height="149" alt="" class="art-lightbox" src="images/principal.png" style="float: left; margin-right: 10px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: rgb(221, 236, 248); border-right-color: rgb(221, 236, 248); border-bottom-color: rgb(221, 236, 248); border-left-color: rgb(221, 236, 248); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;"/>
    </p>
        <p>
            Welcome to the Govt Higher Secondary School Ghani Dheri website. GHSS School is a 
            school of approximately one thousand students and a teaching and support staff of over 
            one hundred people. We are very proud of our school and community and the people who make 
            up our entire school community. We are very fortunate to have outstanding students and a
            well-prepared and caring staff. Our school emphasizes a quality education for all students
            and also the opportunity for students to grow as individuals with twenty men's and women's 
            athletic teams and over twenty co- and extra-curricular clubs and organizations. We encourage 
            our students to become active in at least one school related activity .It is our desire at 
            GHSS School to provide an excellent educational experience and to this end we appreciate 
            community and parent input. Please feel free to contact us with your suggestions or concerns.
            If you are looking at our website because you are moving into the area please feel free to call
            us or stop by for a tour of our facility<br/>
        </p>
        <h1>Minsister &nbsp;Message</h1>
        <p>
            <img width="127" height="149" alt="" class="art-lightbox" src="images/Minister.jpg" style="float: left; margin-right: 10px; "/>
            No country of world can succeed in attaining the cherished goal of socio economic development
            without having an efficient, highly skilled and qualified public. Availability of quality
            educational Institutions spread over whole of the Khyber Pakhtunkhwa is a way to this purpose.
            The Government is firmly committed to uphold its the constitutional mandate and always strive to fulfill 
            the aspirations of the nation. 
            This Government is determined to convert the ever increasing youth population in to a potential harbinger of socio economic change.
            Hence, this due focus on expanding the Educational facilities is in sync with Governments future road map for the province. 
            It has also accorded high priority to establish schools for children to enable them to successfully meet the future challenges. 
            It is hoped that creation of a on Education will ensure Khyber Pakhtunkhwa march on the road 
            of self sustained development and play its due role in making this Province a genuinely 
            prosperous, enlightened and economically stable Province in Pakistan.
        </p>
    </div>
</div>
</div>
<div class="art-content-layout-br layout-item-6"></div>
</div>
</article>
</div>
</div>
</div>
</div>
    <?php  include('template/footer.php');?>
</div>
</div>