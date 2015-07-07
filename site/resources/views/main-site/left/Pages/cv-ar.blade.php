@section("modals")
@overwrite
@section('breadcrumbs')
@overwrite
@section('footer')
@overwrite
@section('media')
@overwrite



@section('css_add')

@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);



  #page_container {
      font-family: 'Droid Arabic Kufi', serif;
      font-size:90%;
      margin-top:3%;
      margin-bottom:800px;
  }
  .english{
    font-family: "Open Sans","tahoma";
  }

  h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6{ 
      font-family: 'Droid Arabic Kufi', serif;
      font-size: 2em;
  }

  @media screen and (min-width: 768px) {
    #masthead h1 {
      font-size: 50px;
    }
  }

  .navbar-bright {
    background-color:#111155;
      color:#fff;
  }

  .affix-top,.affix{
    position: static;
  }

  @media (min-width: 979px) {
    #sidebar.affix-top {
      position: static;
      margin-top:30px;
      width:228px;
    }
    
    #sidebar.affix {
      position: fixed;
      top:70px;
      width:228px;
    }
  }

  #sidebar li.active {
    border:0 #eee solid;
    border-right-width:4px;
  }

  #main-page p,#main-page li{
    font-size: 1.3em;
  }

  .highlight{
    color:#ddd;
    font-size: 105%;
    border-bottom:2px solid #2a9fd6;
    font-weight:bold;
  } 
  .gray{
    color:#5a5a5a;
  }
  p,ul li{
    color:#111;
  }
  .panel-body p,.panel-body li,.list-group li{
    color:#BABABA;
    font-family: "tahoma","arial";
  }

  #previous-work li{
    color:#ccc;
    background-color:rgba(0,0,0,.5);
    padding:2px;
    border-radius:10px;
    margin-bottom:10px;
  }

  #previous-work a{
    text-decoration:none;
    color:white;
  }

  .inner-list a{
  	color:#fff;
  }

  img{
    margin-bottom:15px;
  }

  .container h3,#sidebar li a{
    padding:7px;
    border-radius: 5px;
    background-color:rgba(0,0,0,.3);
    color:#fff;
    text-shadow: 0px 0px 6px rgba(255,255,255,0.9);
  }

  hr{
    color:#fff;
    text-shadow: 0px 0px 6px rgba(255,255,255,0.9);
  }

  #sidebar .inner-list li{
    width:80%;
    margin:0 auto;
    margin-top: 2px;
    margin-bottom: 2px;
  }

  #ContactModalButton{
    display:none;
  }

  #sidebar li {
    font-size:110%;
  }
@stop




<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 id='page_header'>أحمد بدوى
            <p class="lead">مطور و مبرمج</p>
          </h1>
        </div>
        <div class="col-md-5">
            <div class="well well-lg"> 
              <div class="row">
                <div class="col-sm-6">
                  <img src="{{ th('private-photos/me.jpg',255,255) }}" class="img-responsive img-thumbnail img">
                </div>
                <div class="col-sm-6 text-center">
                <h2>أحمد بدوى</h2>
                <h2>C.V</h2>
                <div class="btn-group">

  <button type="button" class="btn btn-default dropdown-toggle arabic" dir='rtl' data-toggle="dropdown" aria-expanded="false">
    {!! fa2('download') !!} تحميل الـ C.V &nbsp;&nbsp;<span class="caret"></span>
  </button>


  <ul class="dropdown-menu" role="menu">
<li role="presentation" class="dropdown-header english">Download</li>
    <li><a href="{!! url('cv/download/jpg') !!}" class="deny english">{!! fa2('image') !!} CV -- jpg</a></li>
    <li><a href="{!! url('cv/download/pdf') !!}" class="deny english">{!! fa2('file-pdf-o') !!} CV -- pdf</a></li>
    <li><a href="{!! url('cv/download/rar') !!}" class="deny english">{!! fa2('external-link-square') !!} CV -- win shortcut</a></li>
    <li class="divider"></li>

    <?php
      $share_data = [
          "url" => "http://ahmed-badawy.com/site/cv",
          "title" => "Ahmed-Badawy's C.V (Please Read Me)",
          "text" => " -!--Ahmed Badawy - أحمد بدوى--!- Hello! This is My C.V : http://ahmed-badawy.com/site/cv", 
          "img" => "http://ahmed-badawy.com/site/public/site-imgs/site/logo.jpg",        
      ];

      $js_popup = "centeredPopup(this.href,'myWindow','700','300','yes');return false";
    ?>
<li role="presentation" class="dropdown-header english">Share With</li>

<li><a class="english" target="_blank" href="{!! get_share_link(1,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('facebook-square') !!} Facebook</a></li>
<li><a class='english' target="_blank" href="{!! get_share_link(2,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('twitter-square') !!} Twitter</a></li>
<li><a class='english' target="_blank" href="{!! get_share_link(3,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('google-plus-square') !!} Google+</a></li>

<li><a class='english' target="_blank" href="{!! get_share_link(4,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('linkedin-square') !!} Linked-In</a></li>
<li><a class='english' target="_blank" href="{!! get_share_link(5,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('pinterest-square') !!} Pinterest</a></li>
<li><a class='english' target="_blank" href="{!! get_share_link(6,$share_data) !!}" onclick="{{$js_popup}}">{!! fa2('stumbleupon',0) !!} stumbleUpon</a></li>

    <li class="divider"></li>
<li role="presentation" class="dropdown-header english">Send To</li>
<li><a target="_blank" class="english" href="{!! get_share_link('whatsapp',$share_data) !!}">{!! fa2('whatsapp') !!} WhatsApp</a></li>
<li><a target="_blank" class="english" href="{!! get_share_link('email',$share_data) !!}">{!! fa2('send') !!} Email</a></li>

    <li class="divider"></li>
<li><a href="#" class="deny english" data-toggle="modal" data-target=".send-cv-modal">{!! fa2('envelope',0) !!} Send C.V to an Email</a></li>
  </ul>


<div class="modal fade send-cv-modal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <h1>Sending C.V To Email</h1>

  <form class="form-inline" method='post' action='{!!url("cv/send")!!}' style='padding:20px'>
  <div class="form-group">
    <label for="exampleInputEmail2" class='bright'><h4>Please Enter The Send-to Email</h4></label>
    <input type="email" name='email' class="form-control" style='width:100%' placeholder="Enter Your Email">
  </div>
  {{br(2)}}
  <button type="submit" class="btn btn-primary">Send C.V</button>
  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </form>

  <br><br><br><br><br>
  <div class='clearfix'></div>

</div>
</div>
</div>


</div>
             
                </div>
              </div>
            </div>
        </div>
      </div> 
  </div><!-- /cont -->
</div>


<!-- Begin Body -->
<div class="container">
	<div class="row" id='main-page'>
  			<div class="col-md-3" id="leftCol">
              
              	<ul class="nav nav-stacked" id="sidebar">

                  <li><a href="#page_header" dir='rtl'>تحميل الـ CV</a></li>
                  <li><a href="#brief" dir='rtl'>ملخص الـ C.V</a></li>
                  <li><a href="#sec0" dir='rtl'>الأهداف</a></li>
                  <li><a href="#personal-info" dir='rtl'>المعلومات الشخصية</a></li>
                  <li><a href="#skills" dir='rtl'>المهارات</a></li>

                  <ul class='list-unstyled inner-list'>
	                  <li><a class='btn btn-block' href='#tec1'>مهارات تطوير المواقع</a></li>
                    <li><a class='btn btn-block' href='#dev-skills'>مهارات التطوير البرمجيات</a></li>
                    <li><a class='btn btn-block' href='#tec4'>مهارات تقنية إخرى</a></li>
                    <li><a class='btn btn-block' href='#tec5'>نقاط القوة</a></li>
                    <li><a class='btn btn-block' href='#tec6'>لغات برمجية</a></li>
	                  <li><a class='btn btn-block' href='#tec12'>مهارات عمل عامة</a></li>
	                  <li><a class='btn btn-block' href='#tec8'>أدوات تكنولوجية</a></li>
                  </ul>
                  <li><a href="#sec11" dir='rtl'>أتعلم حاليا</a></li>
                  <li><a href="#sec3" dir='rtl'>دورات تدريبية</a></li>
                  <li><a href="#sec8" dir='rtl'>الشهادات</a></li>
<?php if(!$fake){ ?>      
                  <li><a href="#prev-work" dir='rtl'>الأعمال السابقة</a></li>
                  <!-- <li><a href="#sec10">Work History</a></li> -->
<?php } ?>
<?php if(!$fake){ ?>
                  <li><a href="#sec1" dir='rtl'>التعليم</a></li>
<?php } ?>
                  <li><a href="#sec6" dir='rtl'>اللغات</a></li>
                  <li><a href="#sec5" dir='rtl'>تواصل معى</a></li>
                  <li><a href="#sec7" dir='rtl'>أرسل لى رسالة</a></li>
              	</ul>
              
      		</div> 




      		<div class="col-md-9">





<!-- *******************************C.V Brief************************************* -->
<h3 id="brief" dir='rtl'>ملخص الـ C.V بالغة العربية</h3>
<ul dir='rtl'>
<li>أحمد بدوى السيد -  مطور و مبرمج</li>
<li>25 سنة  -  غير مدخن  -  أقود و حامل لرخصة قيادة</li>
<li>خبرة 3 سنوات فى - تطوير المواقع بالـ    PHP , javascript</li>
<li>مبرمج و مطور - خبرة فى تنفيذ الأفكار الجديدة و أيجاد الحلول المستحدثة.</li>

<br>
<li>خبرات العمل:  </li>
<ul>
    <li> HTML - CSS - JavaScript - jQuery - AngularJS </li>
    <li> PHP - Wordpress </li>
    <li> CodeIgniter FrameWork => Zend FrameWork => Laravel FrameWork</li>
    <li> Gulp - Grunt - SASS - LESS - Bower </li>
    <li> Git Technology - familiar with cpanel & WHM Resellers panel </li>
</ul>
<br>

<li>القدرة على تنفيذ البرامج الخدمية مثل ( نظم البيع و الشراء - نظم إدارة الصيدليات - نظم إدارة المقاولات - نظم البيع للمطاعم )</li>
<li>خبرة فى تأسيس أنظمة للإستضافة للشركات و المواقع المختلفة عن طريق خدمة الـ Reseller.</li>
<li>معرفة جيدة برفع و تأسيس و تشغيل مواقع الويب و إستمرار تطويرها ضمن فريق عمل متكامل.</li>
<li>خلفية جيدة للتعامل مع الأكواد الخاصة بخدمات الـ API و الـ SDK -- مثل:  Facebook SDK , twitter , dropbox , paypal , stripe ,mailgun</li>
    <li>خلفية ممتازة فى تقنيات الـ SEO و معرفة بكيفية الإعلان على المنصات المختلفة مثل الفيسبوك و جوجل - يمكننى وضع موقعك فى أولى صفحات البحث بجوجل (بشرط توفير الموارد المطلوبة)</li>
    <li>لدى خلفية بسيطة فى برمجة تطبيقات الأندرويد و أستطيع أنجاز البرامج البسيطة عليه. (أعمل على إجادته حاليا) </li>
<li>لدى خلفية بسيطة للتعامل مع لغة الجافا و أستطيع إنجاز البرامج التى تعتمد على الإرتباط بالـ database فيه.</li>
<li>حصلت على شهادتى الـ CCNA - CCNP منذ أربع سنوات. مما أعطانى فهم جيد جدا للشبكات و طريقة عملها و كيفية التعامل معها.</li>
<li>أعمل دوما لتطوير مستوى خبرتى و أتابع كل ما هو جديد لتطوير عملى و مستوايا.</li>

<br>
  <ul>
    <li style='font-weight:bold'>الـ C.V الرابط :  {{sp(12)}}  <a target='_blank' class='english btn btn-xs btn-default ' href="http://ahmed-badawy.com/site/cv">http://ahmed-badawy.com/site/cv</a></li>
    <li style='font-weight:bold'>أعمال سابقة :  {{sp(12)}} <a target='_blank' class='english btn btn-xs btn-default ' href="#prev-work">http://ahmed-badawy.com/site/cv#prev-work</a></li>
    <li style='font-weight:bold'>أفكار قمت بتنفيذها :  {{sp(2)}} <a target='_blank' class='english btn btn-xs btn-default ' href="http://ahmed-badawy.com/site/projects">http://ahmed-badawy.com/site/projects</a></li>
    <li style='font-weight:bold'>الموقع الشخصي : {{sp(6)}} <a target='_blank' class='english btn btn-xs btn-default ' href="http://ahmed-badawy.com">http://ahmed-badawy.com</a></li>
    <li style='font-weight:bold'>المدونة الشخصية : {{sp(6)}} <a target='_blank' class='english btn btn-xs btn-default ' href="http://ahmed-badawy.com/blog">http://ahmed-badawy.com/blog</a></li>
  </ul> 
</br>

<b class='arabic' style='font-size:1.5em'>تواصل معى: 
 &nbsp; -- &nbsp;
{!!fa2('phone-square',0)!!} <span class='bright english'>01028999810</span>
 &nbsp; -- &nbsp;
{!!fa2('send',0)!!} <span class='bright english'>admin@ahmed-badawy.com</span>
</b>

</ul>
<div class="clearfix"></div>

<hr>
<!-- ******************************************************************** -->





<!-- ******************************************************************** -->
<h3 id="sec0" dir='rtl'>الأهداف الوظيفية</h3>
<p class='english'>
My objective is to be better programer/developer,  So to achieve that I always try my hardest, learn every new concept I hear of. I just Love to learn new things related to Computers & Technology.		
</p>
              
              <hr>
              
<!-- *******************************Personal Info************************************* -->
<h3 id="personal-info" dir='rtl'>بيانات شخصية</h3>
<ul dir='rtl'>
<li dir='rtl'><b>الأسم : </b> أحمد بدوى السيد </li>
<li dir='rtl'><b>السن : </b> 25</li>
<li dir='rtl'><b>الجنسية : </b> مصرى</li>
<li dir='rtl'><b>الحالة الإجتماعية : </b> أعزب</li>
<li dir='rtl'><b>موقف التجنيد : </b> إعفاء نهائى</li>
<!-- <li dir='rtl'><b>Date of birth : </b>11 August, 1990 </li> -->
<li dir='rtl'><b>التعليم : </b>  باكليريوس فى علوم الحاسبات و المعلومات</li>
<li dir='rtl'><b>الموقع : </b> <a href='http://ahmed-badawy.com/site' target='_blank' class='english btn btn-xs btn-default '>Ahmed-badawy.com/site</a></li>
<li dir='rtl'><b>المدونة الشخصية : </b> <a href='http://ahmed-badawy.com/blog' target='_blank' class='english btn btn-xs btn-default'>Ahmed-badawy.com/blog</a></li>
<li dir='rtl'><b>رقم الهاتف : </b> &nbsp; <span class='bright'>01028999810</span></li>
<li dir='rtl'><b>الإيميل  : </b> {{social('admin_email')}} <a href="#sec7" class='btn btn-default btn-xs'>أرسل رسالة إلى</a> </li>
<li dir='rtl'><b>معلومات إخرى : </b> ( غير مدخن ,&nbsp; أقود و لدى رخصة قيادة ,&nbsp; سريع بالكيبورد )</li>
</ul>
<!-- ******************************************************************** -->


                  <ul>

<!-- <li>Started Programming Since 1/2013</li> -->
                  </ul>
<div class='clearfix'></div>
<hr>

                <h1 class='text-center well' id="skills">المهارات</h1>

              	<h3 id='tec1' dir='rtl'>مهارات تطوير المواقع</h3>
<br>

	<ul class='col-sm-6'>
	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' href='#tec1'>Front-End</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
		<li><span class="highlight">XHTML - HTML 5</span></li>
		<li><span class="highlight">CSS 2 - CSS 3</span></li>
    <li><span class="highlight">Twitter BootStrap</span> Front-end Framework</li>
    <li><span class="highlight">JavaScript</span> (Client-Side Programing Language)</li>
    <li><span class="highlight">AngularJS</span> (JavaScript Framework)</li>
    <li><span class="highlight">jQuery</span> (JavaScript Library)</li>
    <li>Very good in dealin with <span class="highlight">jQuery's plugins</span> & exploiting them in my Projects</li>
    <li>Both <span class="highlight"> LESS & SASS (SCSS syntax)</span> : CSS Pre-Processor</li>
    <li><span class="highlight">Bower.io</span> : Package Manager Bower.io</li>
    <li>Expert in creating <span class="highlight">Single Page Applications</span> for more pleasant user experience</li>
    <li>Alway's make <span class="highlight">Responsive</span> Websites. (works Well on all platforms pc-tablet-mobile)</li>
    <li>good <span class="highlight">JSON</span> knowledge</li>

        <div class="clearfix"></div>

  </div></div>
  </ul>

  <ul class='col-sm-6'>
  <div class='panel panel-default'>
  <a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec2' href='#tec2'>Back-End</a>
  <div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
    <li><span class="highlight">PHP</span> (server-side)</li>
    <li>Excellent understanding of OOP(Object Oriented Programing) & dealing with it in multiple languages (PHP - javaScript - java - C#)</li>
    <li><span class="highlight">MVC</span> OOP Structure & Organizing</li>
    <li>Expert in <span class="highlight">Laravel</span> Framework (php)</li>
    <li><span class="highlight">Zend</span> Framework (php)</li>
    <li><span class="highlight">Codeigniter</span> Framework (php)</li>
    <li>Basic Knowledge of <span class="highlight">ASP.NET MVC</span> Framework</li>
    <li>Good Knowlege of <span class="highlight">Wordpress</span> </li>
    <li>PHP integration with <span class="highlight">MySQL</span> / <span class="highlight">MySQLi</span> Database</li>
    <li>Excelent <span class="highlight">SQL</span> Knowledge</li>
    <li>Both <span class="highlight">Blade-Smarty</span> : PHP Template Engine</li>
    <li><span class="highlight">Composer</span> : PHP Dependency Manager</li>
    <li>Good Experience in dealing with third party plugins & integrating them within my projects.</li>


  </div></div>
  </ul>

<div class="clearfix"></div>

  <div class='panel panel-default'>
  <a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec3' href='#tec3'>General Web Development Skills</a>
  <div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;min-height:1px'>
  <ul class='col-sm-12'>
    <li>Great knowledge of <span class="highlight">WordPress</span> CMS System & how to manipulate it to my benefits.</li>
    <li>Great Understanding of <span class="highlight">GIT & Github</span> Systems</li>
    <li>Some knowlege of task-runners like <span class="highlight">Grunt & Gulp</span> : Node.js Task Runners</li>
    <li>Very Good Background in <span class="highlight">Ajax</span> Technology</li>
    <li>Very Good Background in <span class="highlight">JSON</span> Technology</li>
    <li>Very Good at manipulating different APIs & bending them to my benefits</li>
    <li>Very Good Background in manipulating <span class="highlight">Regex</span> : Regular expression</li>
    <li>Excepert in <span class='highlight'>Ripping other website's Content</span> & populating these data.</li>
    <li>Great in <span class='highlight'>dealing & using</span> Diffrent <span class='highlight'>APIs</span> & manipulate them to my benefits</li>
    <li>Can <span class='highlight'>Create APIs</span> to benefit other developers in there projects</li>
  </ul>
	</div>
  </div>

<div class="clearfix"></div>


                <h3 id="dev-skills" dir='rtl'>المهارات البرمجيات</h3>

  <div class='panel panel-default'>
  <a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='dev-skills' href='#dev-skills'>Development Skills</a>
  <div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;min-height:1px'>
  <ul class='col-sm-12'>
    <li>Good <span class="highlight">Java</span> Programing Language knowledge.</li>
    <li>Good <span class="highlight">android</span> SDK Programing knowledge. (currently learning)</li>
    <li>Basic <span class="highlight">C#</span> knowledge. (still working on it)</li>
    <li>Basic <span class="highlight">ASP.NET</span> knowledge. (still working on it)</li>
    <li>Great Background in Using <span class="highlight">Regex</span> : Regular expression</li>    
    <li>Good Background in <span class="highlight">XML</span> </li>    
  </ul>
  </div>
  </div>

  <div class='clearfix'></div>


                <h3 id='tec4' dir='rtl'>مهارات تقنية إخرى</h3>
	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' href='#tec4'>Other Technical Skills</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
	<ul class='col-sm-12'>
		<li>Very Good understanding of <span class="highlight">Networks</span> & how to manage them.</li>
    <li>Studied & passed the exams of Cisco <span class="highlight">CCNA</span> Certification</li>
    <li>Studied & passed the exams of Cisco <span class="highlight">CCNP</span> Certification <small> (didn't take the TSHOOT EXAM yet) </small></li>

    <li>Great Background in: </li>
        <ul>
          <li><span class='highlight'>Adobe Photoshop</span> image manipulation program</li>
          <li><span class='highlight'>Adobe Illustrator</span> Vector manipulation program</li>
          <li><span class='highlight'>Adobe Dreamweaver</span> Website Designer</li>
          <li><span class='highlight'>Office Word</span> Website Designer</li>
          <li><span class='highlight'>Office Excel</span> for SpreadSheets</li>
          <li><span class='highlight'>Office PowerPoint</span> SlideShow Creator</li>
          <li><span class='highlight'>Office Access</span> Database Interface</li>
        </ul>

  </ul>

	</div>
  </div>

<div class="clearfix"></div>



                <h3 id='tec5' dir='rtl'>نقاط القوة - (جيد جدا فى)</h3>
	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec5' href='#tec5'>Very Good At</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
		<ul class='col-sm-6'>
			<li>PHP programing in general</li>
			<li><span class='highlight'>Laravel Framework</span> MVC website Structure for faster & Efficient development</li>
			<li>Providing Online APIs to other developers (depend on JSON to transfer data)</li>
		</ul>
		<ul class='col-sm-6'>
			<li>javascript Client-Side applications</li>
			<li>Google's <span class='highlight'>Angularjs Framework</span> For MV* website Structure</li>
			<li>Creating Single Page Applications that works on multiple platforms smoothly</li>
		</ul>
	</div></div>

<div class="clearfix"></div>


                <h3 id='tec6' dir='rtl'>اللغات البرمجية</h3>
	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' href='#tec6'>Programing Languages Used</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
		<ul class='col-sm-6'>
			<li><span class='highlight'>PHP</span> (very good)</li>
			<li><span class='highlight'>HTML</span> (Markup language)</li>
			<li><span class='highlight'>CSS</span> (Layout language)</li>
		</ul>
		<ul class='col-sm-6'>
			<li><span class='highlight'>JavaScript</span></li>
			<li><span class='highlight'>JAVA</span> (still learning)</li>
			<li><span class='highlight'>C#</span> (still learning)</li>
		</ul>
	</div></div>

  <div class="clearfix"></div>


                <h3 id='tec12' dir='rtl'>مهارات عمل عامة</h3>
  <div class='panel panel-default'>
  <a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' href='#tec12'>General Work Skills</a>
  <div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
  <ul class='col-sm-12 english'> 
    <li>Love to Read Technology-related Books</li>
    <li>Very Good Knowledge of General Computer Technologies</li>
    <li>A keen approach to learning.</li>
    <li>Ability to learn new technologies (fast)</li>
    <li>A keen approach to learning.</li>
    <li>Good Typing Skills</li>
    <li>Strong physics and math background</li>
    <li>Time Management Skills</li>
  </ul>
  </div>
  </div>


<div class="clearfix"></div>

	<div class='panel panel-default'>
	<a class="btn btn-primary btn-block" style='font-size:200%;font-weight:bold;' id='tec7' href='#tec7'>Tools I Have Used</a>
	<div class="panel-body" style='padding:25px;font-size:90%;font-weight:normal;'>
		<ul class='col-sm-6'>
			<li>Sublime Text IDE</li>
			<li>NetBeans IDE</li>
			<li>Emmet For Shortcuts in HTML & CSS</li>
		</ul>
		<ul class='col-sm-6'>
			<li>Twitter BootStrap for Fast Designs</li>
			<li>PHP Composer</li>
			<li>PHP Packagist</li>
		</ul> 
	</div>
	</div>

<div class="row"></div>

	      		
<?php 
    $array = array(
              "php" => "http://www.php.net/",
              "laravel" => "http://laravel.com/",
              "codeigniter" => "http://ellislab.com/codeigniter",
              "zend" => "http://framework.zend.com/",
              "wordpress" => "http://wordpress.org/",
              "html5" => "http://www.w3schools.com/html/html5_intro.asp",
              "css3" => "http://www.w3schools.com/css/DEFAULT.asp",
              "javascript" => "http://www.w3schools.com/js/DEFAULT.asp",
              "jquery" => "http://jquery.com/",
              "AngularJS" => "https://angularjs.org/",
              "json" => "http://www.json.org/",
              "less" => "http://lesscss.org/",
              "sass" => "http://sass-lang.com/",
              "java" => "http://www.java.com/",
              "smarty" => "http://www.smarty.net/",
              "regex" => "http://www.regular-expressions.info/",
              "composer" => "https://getcomposer.org",
              "tb" => "http://getbootstrap.com/",
              "emmet" => "http://emmet.io/",
              "photoshop" => "www.photoshop.com/",
              "excel" => "#",
              "word" => "#",
              "ccna" => "#",
              "ccnp" => "#",
      );
 ?>

<div class="well">
<div class="row" id='tec8'>
<?php 
$i = 0;
    foreach($array as $img => $site){
echo "<div class='col-xs-6 col-sm-3 col-md-2'><a href='$site'><img src='".th("cv/$img.jpg")."' class='img-responsive img-thumbnail img-force'></a></div>";
// if($i==5 || $i==11 || $i==17) echo "</div><br><div class='row'>";
$i++;
    }
?>
</div>
</div>

              
              	<hr>


                <h3 id="sec11" dir='rtl'>أتعلم حاليا</h3>
<ul class='english'>
  <!-- <li>Java GUI Programing</li> -->
  <li>Android Programing</li>
  <li>More about SEO</li>
  <li>More about Website Analysis</li>
  <li>More about C# & ASP.NET</li>
</ul>

<hr>



              	<h3 id="sec3" dir='rtl'>الدورات التدريبية</h3>
<ul class='english'>
	<li>PhotoShop : Hi-Q - Tanta</li>
  <li>Java : New Horizon - Mansoura</li>
	<li>Android Development : New Horizon - Mansoura</li>
	<li>ICDL : Axon</li>
	<li>English : Pioneer - Tanta</li>
</ul>


<hr>
          	<h3 id="sec8" dir='rtl'>الشهادات</h3>
<ul class='english'>
    <li>PhotoShop Course Completion from HI-Q Academy</li>
    <li>Java Course Completion from New Horizon</li>
    <li>English Course Completion from Poinear</li>
<!--     <li>Cisco ICND1 Exam 640-822</li>
    <li>Cisco ICND2 Exam 640-816</li> -->
    <li>Cisco CCNP Exam 642-902 ROUTE</li>
    <li>Cisco CCNP Exam 642-813 SWITCH</li>
    <!-- <li>Cisco CCNP Exam 642-832 TSHOOT</li> -->
    <li>Acquired CCNA Certification</li>
    <!-- <li>Acquired CCNP Certification</li> -->
</ul>   


<hr id="prev-work">

<?php if(!$fake){ ?>

        <br/>
          	<h3 dir='rtl'>أعمال سابقة</h3>
<ul id="previous-work" class='text-center list-unstyled'>
  <li><a href="{{ url('selling-manager') }}" target='_blank'>أتممت الكثير من البرامج الخدمية معظمها برامج مطاعم و محلات بيع وحدات مثل الموبيلات</a></li>

  <li><a href="http://ahmed-badawy.com" target='_blank'>Ahmed-Badawy.com</a></li>
  <li><a href="http://spidro.com" target='_blank'>Spidro.com</a></li>
  <li><a href="{!! url('blog') !!}" target='_blank'>Personal wordpress blog</a></li>

  <li><a href="https://www.egyptcodebase.com" target='_blank'>موقع بيانات كود مصر</a></li>
  <li><a href="http://www.elmasriadecoration.com" target='_blank'>المصرية للديكورات</a></li>
  <li><a href="http://alnourfemtolasercenter.com" target='_blank'>مركز النور لعمليات للفيمتو ليزيك و الفيمتو سميل</a></li>
  <li><a href="http://guryildiz.com.tr/ar/" target='_blank'>شركة ملابس غوريلدز</a></li>
  <li><a href="http://www.gfi-am.ch/ar" target='_blank'>شركة جريس للإستثمارات المالية</a></li>
  <li><a href="http://www.al-shia.org" target='_blank'>موقع مركز آل البيت العالمى للمعلومات</a></li>
  <li><a href="http://www.inaba-petfood.co.jp/ar/" target='_blank'>Inaba Petfood</a></li>
  <li><a href="http://fatn.net/" target='_blank'>فاتن مول</a></li>
  <li><a href="http://www.trade-ksa.com" target='_blank'>سوق شيهانة الخير</a></li>
  <li><a href="http://matgar.weebly.com/" target='_blank'>متجر نورا</a></li>
  <li><a href="http://ar.esis.com.tr/" target='_blank'>ESIS Power</a></li>
  <li><a href="http://www.colub.be/" target='_blank'>Colub</a></li>

  <ul class='list-unstyled english' style='border:2px solid white;padding:7px;border-radius:10px'>
    <h4 class='arabic'>أفكارى و مشاريعى الخاصة</h4>
  <li><a href="{!! route('projects') !!}" target='_blank' class='arabic'>العديد من الأفكار و المشاريع نفذتها بشكل مبدئى فى أوقات الفراغ</a></li>
  <li><a href="{!! route('games') !!}" target='_blank' class='arabic'>ألعاب بسيطة نفذتها</a></li>
  <li><a href="{!! route('apis') !!}" target='_blank' class='arabic'>خدمات للمواقع الخارجية</a></li>
	<li><a href="{!! url('blog') !!}" target='_blank' class='arabic'>البلوج التقنية الخاصة بى</a></li>
	<!-- 	@foreach(sr::projects() as $project)
		<li class='col-sm-4'><a href='{!! $project["link"] !!}' target='_blank'><small class='arabic' dir='rtl'>{!! $project['page_name'] !!}</small></a></li>
		@endforeach -->
    <div class="clearfix"></div>
	</ul>
</ul> 

<div class="clearfix"></div>  
<hr>

<!--             <h3 id="sec10" dir='rtl'>Work History</h3>
<p> Have Not Worked As a Professional yet.</p>
<hr>            
 -->

<?php } ?>


<?php if(!$fake){ ?>
              	<h3 id="sec1" dir='rtl'>التعليم</h3>
<p dir='rtl'>
<!-- 2010   =>  2014   :  -->
درجة الباكليريوس فى علوم الحاسبات المعلومات بتقدير عام جيد جدا و <span class='bright'>ترتيب السادس على الدفعة</span>
<!-- - Misr Academy for Engineering and Technology in Mansoura city. -->
<!-- <br> -->
<!-- معادلة موثقة لبكليريوس الحاسبات و المعلومات -->
</p>
<!-- <br> -->

<!--                	<div class="row">
                  <div class="col-md-6">
	      		<img src="<?php echo imgs_dir."cv/met.jpg" ?>" class="img-responsive img-thumbnail">
                  </div>
                  <div class="col-md-6">
                      <div class="panel panel-default">
                      <div class="panel-heading text-center">
                        <h3>M.E.T</h3>
                        <h5>Misr Engineering & Technology</h5>
                      </div>
                      <div class="panel-body">
                      Website : <a href="http://www.metmansoura.com/" class="btn btn-md btn-primary pull-right btn-block">metmansoura.com</a>
                      <br><br><br>
                      Engineering Website : <a href="http://www.engmet.org/" class="btn btn-md btn-primary pull-right btn-block">engmet.org</a>
                      <br><br><br>
                      FaceBook Page : <a href="https://www.facebook.com/M.E.T.Mansoura/" class="btn btn-md btn-primary pull-right btn-block">M.E.T.Mansoura</a>
                      </div>
                    </div>
                  </div>  
              	</div>  -->

 <hr>
<?php } ?>


              	<h3 id="sec6" dir='rtl'>اللغات</h3>
<ul>
	 <li>العربى: Native</li>
	 <li>الإنجليزية : Excelent</li>
</ul>   

              	<hr>

<div class="row">
	<div class='col-sm-6'>
	<h3 id='sec5' dir='rtl'>Contact Me</h3>
<ul class='list-group '>
      <li class="col-sm-12 list-group-item">{!! fa2("at") !!} {{social('admin_email')}}</li>
      <li class="col-sm-12 list-group-item">{!! fa2("mobile") !!} 01028999810</li>
      <li class="col-sm-12 list-group-item">{!! fa2("desktop") !!} <a href='{!! url("/") !!}'>www.Ahmed-Badawy.com</a></li>
</ul>
	</div>

<div class="col-sm-6">
	<h3 id='sec7' dir='rtl'>أرسل لى رسالة</h3>
	<form action="{!! url('contact') !!}" method='post'>
          <div class="form-group">
<input name='email' type="email" class='form-control' style='width:100%' placeholder="Your Email" required>
<input name='subject' type="text" class='form-control' style='width:100%' placeholder="Message Title" required>
<textarea name='msg' class='form-control' style='width:100%' rows='3' placeholder='Message' required></textarea>
<br>
<input type="submit" value="Send" class='btn btn-primary btn-md btn-block'>
          </div>
	</form>
</div>
</div>

      		</div> 



<br style="clear:both">           	
              	
  	</div>
</div>







       
<!-- JavaScript jQuery code from Bootply.com editor -->
<script type='text/javascript'>
$(document).ready(function() {

    $("#main-page a").not($('.deny')).not($('ul a')).attr('target','_blank');     

    $('#sidebar').affix({
        offset: {
          top: 235
        }
    });

var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;

$body.scrollspy({
  target: '#leftCol',
  offset: navHeight
});

      /* smooth scrolling sections */
      $('a[href*=#]:not([href=#])').click(function(){
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top - 50
              }, 1000);
              return false;
            }
          }
      });
        
});
</script>
   

  <script language="javascript">
  //to use this function just call it on click: onclick="centeredPopup(this.href,'myWindow','700','300','yes');return false"
    var popupWindow = null;
    function centeredPopup(url,winName,w,h,scroll){
      LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
      TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
      settings =
      'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
      popupWindow = window.open(url,winName,settings);
    }

  </script>


@section('share')
@overwrite
@section('comments')
@overwrite

