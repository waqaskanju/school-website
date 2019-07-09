<?php
include('config/connect.php');

?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Educato Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="css/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
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
</script><style>.art-content .art-postcontent-0 .layout-item-0 { margin-bottom: 10px;  }
.art-content .art-postcontent-0 .layout-item-1 { border-top-width:1px;border-top-style:solid;border-top-color:#DEDEDE;margin-top: 5px;margin-bottom: 5px;  }
.art-content .art-postcontent-0 .layout-item-2 { border-right-style:solid;border-right-width:1px;border-right-color:#DEDEDE; padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-3 { padding-right: 10px;padding-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-4 { border-top-width:0px;border-top-style:solid;border-top-color:#DEDEDE;margin-top: 5px;margin-bottom: 5px;  }
.art-content .art-postcontent-0 .layout-item-5 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:0px;border-top-color:#3D91D6;border-right-color:#3D91D6;border-bottom-color:#3D91D6;border-left-color:#3D91D6;  }
.art-content .art-postcontent-0 .layout-item-6 { border-top-width:0px;border-top-style:solid;border-top-color:#DEDEDE;  }
.art-content .art-postcontent-0 .layout-item-7 { border-top-style:solid;border-right-style:solid;border-bottom-style:solid;border-left-style:solid;border-width:0px;border-top-color:#3D91D6;border-right-color:#3D91D6;border-bottom-color:#3D91D6;border-left-color:#3D91D6; padding-right: 10px;padding-left: 0px;  }
.art-content .art-postcontent-0 .layout-item-8 { padding-right: 0px;padding-left: 20px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

.art-slidecontainere1 {
    position: relative;
        width: 660px;
    height: 203px;
        }

.art-slidecontainere1 .art-slide-item
{

}



.art-slidecontainere1 .art-slide-item {
    -webkit-transition: 600ms ease-in-out opacity;
    -moz-transition: 600ms ease-in-out opacity;
    -ms-transition: 600ms ease-in-out opacity;
    -o-transition: 600ms ease-in-out opacity;
    transition: 600ms ease-in-out opacity;
    position: absolute;
    display: none;
	left: 0;
	top: 0;
	opacity: 0;
    width:  100%;
    height: 100%;
}

.art-slidecontainere1 .active, .art-slidecontainere1 .next, .art-slidecontainere1 .prev {
    display: block;
}

.art-slidecontainere1 .active {
    opacity: 1;
}

.art-slidecontainere1 .next, .art-slidecontainere1 .prev {
    width: 100%;
}

.art-slidecontainere1 .next.forward, .art-slidecontainere1 .prev.back {
    opacity: 1;
}

.art-slidecontainere1 .active.forward {
    opacity: 0;
}

.art-slidecontainere1 .active.back {
    opacity: 0;
}


.art-slidee10 {
    background-image:  url('images/slidee10.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidee11 {
    background-image:  url('images/slidee11.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidee12 {
    background-image:  url('images/slidee12.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}
.art-slidee13 {
    background-image:  url('images/slidee13.jpg');
        background-size:  100%;
        background-position:  0 0;
    background-repeat: no-repeat;
}


.art-slidenavigatore1 {
  display: inline-block;
  position: absolute;
  direction: ltr !important;
  top: 179px;
  left: 87.27%;
  z-index: 101;
  line-height: 0 !important;
  -webkit-background-origin: border !important;
  -moz-background-origin: border !important;
  background-origin: border-box !important;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
    white-space: nowrap;
    }
.art-slidenavigatore1
{
background: #9EC8EA;background: linear-gradient(top, rgba(226, 238, 249, 0.6) 0, rgba(91, 162, 220, 0.6) 100%) no-repeat;background: -webkit-linear-gradient(top, rgba(226, 238, 249, 0.6) 0, rgba(91, 162, 220, 0.6) 100%) no-repeat;background: -moz-linear-gradient(top, rgba(226, 238, 249, 0.6) 0, rgba(91, 162, 220, 0.6) 100%) no-repeat;background: -o-linear-gradient(top, rgba(226, 238, 249, 0.6) 0, rgba(91, 162, 220, 0.6) 100%) no-repeat;background: -ms-linear-gradient(top, rgba(226, 238, 249, 0.6) 0, rgba(91, 162, 220, 0.6) 100%) no-repeat;background: linear-gradient(top, rgba(226, 238, 249, 0.6) 0, rgba(91, 162, 220, 0.6) 100%) no-repeat;-svg-background: linear-gradient(top, rgba(226, 238, 249, 0.6) 0, rgba(91, 162, 220, 0.6) 100%) no-repeat;
-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;


padding:7px;





}
.art-slidenavigatore1 > a
{
background: #2572B1;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatore1 > a.active
{
background: #C7C7C7;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}
.art-slidenavigatore1 > a:hover
{
background: #949494;
-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;



margin:0 10px 0 0;

width: 10px;

height: 10px;
}

</style></head>


<body>
	<div id="art-main">
		<?php include('template/header.php'); ?>
   	
    <div class="art-sheet clearfix">
		
		<?php include('template/nav.php'); ?>
   
    <div class="art-layout-wrapper">
         <div class="art-content-layout">
               <div class="art-content-layout-row">
                    <div class="art-layout-cell art-content"><article class="art-post art-article">
                        <div class="art-postcontent art-postcontent-0 clearfix">
 <!--block pic Navigation-->                       
 
 <?php include('template/picnav.php'); ?>


<!--End of block pic Navigation-->
<div class="art-content-layout-br layout-item-1">
</div><div class="art-content-layout-br layout-item-4">
</div><div class="art-content-layout layout-item-5">
    <div class="art-content-layout-row">
    
    <div class="art-layout-cell layout-item-7" style="width: 25%" >
        <h1>News</h1>
        
        <?php news($dbc); ?>
        
    </div>
   
    
    
    
    <div class="art-layout-cell layout-item-8" style="width: 75%" >
        <h1>Welcom To Govt Higher Secondary School Ghani Dheri&nbsp;</h1>
        <p><span style="font-style:italic;">Govt Higher Secondary Is Situated Near The bazar</span></p>
        <p></p><div id="e1" style="position: relative; display: inline-block; z-index: 0; margin: 0px;  border-width: 0px;  " class="art-collage">
<div class="art-slider art-slidecontainere1" data-width="660" data-height="203">
    <div class="art-slider-inner">
<div class="art-slide-item art-slidee10">

</div>
<div class="art-slide-item art-slidee11">

</div>
<div class="art-slide-item art-slidee12">

</div>
<div class="art-slide-item art-slidee13">

</div>

    </div>
</div>
<div class="art-slidenavigator art-slidenavigatore1" data-left="87.27">
<a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a>
</div>



    </div>
<p></p>
        <p><br></p>
        <h1>Principal Message</h1>
        <p><img width="128" height="149" alt="" class="art-lightbox" src="images/principal.png" style="float: left; margin-right: 10px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-top-color: rgb(221, 236, 248); border-right-color: rgb(221, 236, 248); border-bottom-color: rgb(221, 236, 248); border-left-color: rgb(221, 236, 248); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; "></p><p>Govt higher Secondary School Ghani Dheri was established in 1995 with the sole aim of providing to the new generation a high standard education and an all round training for grooming a confident literate personality along with a strong moral character. The institution was initially started as “School”, imparting education from primary up to secondary level. However, a necessity was being felt for an up to the mark private sector intermediate level science college in Swat valley, which could appropriately prepare students for their meritorious admissions in professional colleges. Consequent upon the incessant demands from the public, G H S S was upgraded to intermediate science college in&nbsp;<br></p><h1>Minsister &nbsp;Message</h1><p><img width="127" height="149" alt="" class="art-lightbox" src="images/Minister.jpg" style="float: left; margin-right: 10px; ">Fusce ornare elit nisl, feugiat bibendum lorem. Vivamus pretium dictum sem vel laoreet. In fringilla pharetra purus, semper vulputate ligula cursus in. Donec at nunc nec dui laoreet porta eu eu ipsum. Sed eget lacus sit amet risus elementum dictum. Pellentesque sit amet imperdiet nunc. Aenean tellus mi, adipiscing sit amet laoreet eget, lobortis quis nisl. Nunc a sollicitudin est. Curabitur ullamcorper gravida felis, sit amet scelerisque lorem iaculis sed.</p><p><br></p><p><br></p><p><br></p>
    </div>
    </div>
</div>
<div class="art-content-layout-br layout-item-6">
</div></div>


</article></div>
                    </div>
                </div>
            </div>

<?php  include('template/footer.php');?>


    </div>
</div>


</body></html>