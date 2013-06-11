<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <title>Plastique Theme</title>

  <link href="../../stylesheets/application.css" media="screen" rel="stylesheet" type="text/css" />

  <!--[if lt IE 9]>
<script src="../../javascripts/html5shiv.js" type="text/javascript"></script><script src="../../javascripts/excanvas.js" type="text/javascript"></script><script src="../../javascripts/iefix.js" type="text/javascript"></script><link href="../../stylesheets/iefix.css" media="screen" rel="stylesheet" type="text/css" /><![endif]-->

  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
</head>
<body>

<div id="modal" class="black-box modal hide fade">
  <div class="modal-header tab-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <span>Some modal title</span>
  </div>
  <div class="modal-body separator">
    <h4>Text in a modal</h4>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>
  </div>
  <div class="modal-footer">
    <div class="inner-well">
      <a class="button mini rounded light-gray" data-dismiss="modal">Close</a>
      <a class="button mini rounded blue">Save changes</a>
    </div>
  </div>
</div>

<div id="modal-gallery" class="black-box modal modal-gallery hide fade">
  <div class="modal-header tab-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <span class="modal-title"></span>
  </div>
  <div class="modal-body"><div class="modal-image"></div></div>
  <div class="modal-footer">
    <div class="pull-left">
      You can also change the images<br/> by scrolling the mouse wheel!
    </div>
    <div class="pull-right">
      <a class="button blue modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
      <a class="button gray modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
      <a class="button green modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
      <a class="button black" target="_blank"><i class="icon-download"></i> Download</a>
    </div>
  </div>
</div>
<nav id="primary" class="main-nav">
  <ul>

    <li class="">
      <a href="../dashboard/stats.html">
        <i class="icon-dashboard"></i> Dashboard
      </a>
    </li>

    <li class="">
      <a href="../form_elements/standard.html">
        <i class="icon-list-alt"></i> Forms
      </a>
    </li>

    <li class="active">
      <a href="buttons_dropdowns.html">
          <i class="icon-beaker"></i> UI Lab
      </a>
    </li>

    <li class="">
      <a href="../widgets/widgets.html">
          <i class="icon-plus-sign"></i> Widgets
      </a>
    </li>

    <li class="">
      <a href="../charts/charts.html">
          <i class="icon-bar-chart"></i> Charts
      </a>
    </li>





    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-share-alt"></i>More <span class="caret"></span></a>

      <ul class="dropdown-menu">
        <li>
          <a href="../error_404.html">
              <i class="icon-warning-sign"></i> Error 404
          </a>
        </li>

        

        <li>
          <a href="../docs/docs.html">
              <i class="icon-book"></i> Documentation
          </a>
        </li>

        
        <li class="divider"></li>
        <li>
          <a href="../login/login.html">
              <i class="icon-off"></i> Log out (login page)
          </a>
        </li>
      </ul>
    </li>

  </ul>
</nav><nav id="secondary" class="main-nav">

  <div class="profile-menu">

    <div class="pull-left">
      <div class="avatar">
        <img src="../../images/avatar.png" />
      </div>
    </div>

    <div class="pull-left">
      <div class="title">
        Plastique
      </div>
      <div class="btn-group">
        <button class="button mini inset black"><i class="icon-search"></i></button>
        <button class="button mini inset black">Projects</button>
        <button class="button mini inset black dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i></button>
        <ul class="dropdown-menu black-box-dropdown">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>

      </div>
    </div>

    <div class="pull-right profile-menu-nav-collapse">
      <button class="button black"><i class="icon-reorder"></i></button>
    </div>

  </div>

  <ul class="secondary-nav-menu">
    <li class="">
  <a href="buttons_dropdowns.html">
      <i class="icon-share"></i> Buttons & dropdowns
  </a>
</li>

<li class="">
  <a href="grid.html">
      <i class="icon-th"></i> Grid
  </a>
</li>

<li class="">
  <a href="icons.html">
      <i class="icon-thumbs-up"></i> Icons
  </a>
</li>

<li class="">
  <a href="modals.html">
      <i class="icon-share-alt"></i> Modals
  </a>
</li>

<li class="">
  <a href="notifications.html">
      <i class="icon-flag"></i> Notifications
  </a>
</li>

<li class="active">
  <a href="tables.html">
      <i class="icon-table"></i> Tables
  </a>
</li>
  </ul>

</nav>



<section id="main">
  <div class="top-nav">
  <div class="container-fluid">
    <div class="row-fluid search-button-bar-container">
      <div class="span12">
        <ul class="breadcrumb">
          <li><a href="#"><i class="icon-home"></i> Some</a></li>
          <li><a href="#">Nice</a></li>
          <li><a href="#">Breadcrumbs</a></li>
          <li class="active"><a href="#">Here</a></li>
        </ul>
        <a class="search-button-trigger" href="#"><i class="icon-search"></i></a>
      </div>
    </div>

    <div class="row-fluid search-bar-nav">
      <div class="span12">
        <form>
          <input type="text" class="search" placeholder="Search...">
        </form>
      </div>
    </div>
  </div>
</div>

  <div class="container-fluid">
    <div class="row-fluid">
  <div class="span6">
    <table class="table table-striped table-bordered box">
  <thead>
  <tr>
    <th colspan="2">Table title</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td>Webhosting:</td>
    <td><strong>VPS Server 1</strong></td>
  </tr>
  <tr>
    <td>Available space:</td>
    <td>239/1000 GB used</td>
  </tr>
  <tr>
    <td>MySQL databases:</td>
    <td class="red">5/5 used</td>
  </tr>
  <tr>
    <td>Email accounts:</td>
    <td class="red">25/25 used</td>
  </tr>
  <tr>
    <td>Ruby version:</td>
    <td>1.9.3</td>
  </tr>
  <tr>
    <td>Rails version:</td>
    <td>3.0.1</td>
  </tr>
  </tbody>
  <tfoot>
  <tr>
    <td colspan="2">
      <div class="clearfix" style="padding: 0 5px;">
        <div class="pull-left">
          <a href="#" class="button blue">Buy now!</a>
          <a href="#" class="button">Cancel subscription</a>
        </div>
      </div>
    </td>
  </tr>
  </tfoot>
</table>

  </div>

  <div class="span6">
    <div class="box" style="position:relative;">
<div class="tab-header" >
  Browser stats
</div>
<table class="table table-striped data-table">
<thead>
<tr>
  <th>Rendering engine</th>
  <th>Browser</th>
  <th>Platform(s)</th>
  <th>Engine version</th>
</tr>
</thead>
<tbody>
<tr class="gradeX">
  <td>Trident</td>
  <td>Internet
    Explorer 4.0</td>
  <td>Win 95+</td>
  <td class="center">4</td>
</tr>
<tr class="gradeC">
  <td>Trident</td>
  <td>Internet
    Explorer 5.0</td>
  <td>Win 95+</td>
  <td class="center">5</td>
</tr>
<tr class="gradeA">
  <td>Trident</td>
  <td>Internet
    Explorer 5.5</td>
  <td>Win 95+</td>
  <td class="center">5.5</td>
</tr>
<tr class="gradeA">
  <td>Trident</td>
  <td>Internet
    Explorer 6</td>
  <td>Win 98+</td>
  <td class="center">6</td>
</tr>
<tr class="gradeA">
  <td>Trident</td>
  <td>Internet Explorer 7</td>
  <td>Win XP SP2+</td>
  <td class="center">7</td>
</tr>
<tr class="gradeA">
  <td>Trident</td>
  <td>AOL browser (AOL desktop)</td>
  <td>Win XP</td>
  <td class="center">6</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Firefox 1.0</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.7</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Firefox 1.5</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Firefox 2.0</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Firefox 3.0</td>
  <td>Win 2k+ / OSX.3+</td>
  <td class="center">1.9</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Camino 1.0</td>
  <td>OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Camino 1.5</td>
  <td>OSX.3+</td>
  <td class="center">1.8</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Netscape 7.2</td>
  <td>Win 95+ / Mac OS 8.6-9.2</td>
  <td class="center">1.7</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Netscape Browser 8</td>
  <td>Win 98SE+</td>
  <td class="center">1.7</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Netscape Navigator 9</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Mozilla 1.0</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Mozilla 1.1</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.1</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Mozilla 1.2</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.2</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Mozilla 1.3</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.3</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Mozilla 1.4</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.4</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Mozilla 1.5</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.5</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Mozilla 1.6</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.6</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Mozilla 1.7</td>
  <td>Win 98+ / OSX.1+</td>
  <td class="center">1.7</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Mozilla 1.8</td>
  <td>Win 98+ / OSX.1+</td>
  <td class="center">1.8</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Seamonkey 1.1</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr class="gradeA">
  <td>Gecko</td>
  <td>Epiphany 2.20</td>
  <td>Gnome</td>
  <td class="center">1.8</td>
</tr>
<tr class="gradeA">
  <td>Webkit</td>
  <td>Safari 1.2</td>
  <td>OSX.3</td>
  <td class="center">125.5</td>
</tr>
<tr class="gradeA">
  <td>Webkit</td>
  <td>Safari 1.3</td>
  <td>OSX.3</td>
  <td class="center">312.8</td>
</tr>
<tr class="gradeA">
  <td>Webkit</td>
  <td>Safari 2.0</td>
  <td>OSX.4+</td>
  <td class="center">419.3</td>
</tr>
<tr class="gradeA">
  <td>Webkit</td>
  <td>Safari 3.0</td>
  <td>OSX.4+</td>
  <td class="center">522.1</td>
</tr>
<tr class="gradeA">
  <td>Webkit</td>
  <td>OmniWeb 5.5</td>
  <td>OSX.4+</td>
  <td class="center">420</td>
</tr>
<tr class="gradeA">
  <td>Webkit</td>
  <td>iPod Touch / iPhone</td>
  <td>iPod</td>
  <td class="center">420.1</td>
</tr>
<tr class="gradeA">
  <td>Webkit</td>
  <td>S60</td>
  <td>S60</td>
  <td class="center">413</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Opera 7.0</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Opera 7.5</td>
  <td>Win 95+ / OSX.2+</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Opera 8.0</td>
  <td>Win 95+ / OSX.2+</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Opera 8.5</td>
  <td>Win 95+ / OSX.2+</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Opera 9.0</td>
  <td>Win 95+ / OSX.3+</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Opera 9.2</td>
  <td>Win 88+ / OSX.3+</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Opera 9.5</td>
  <td>Win 88+ / OSX.3+</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Opera for Wii</td>
  <td>Wii</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Nokia N800</td>
  <td>N800</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Presto</td>
  <td>Nintendo DS browser</td>
  <td>Nintendo DS</td>
  <td class="center">8.5</td>
</tr>
<tr class="gradeC">
  <td>KHTML</td>
  <td>Konqureror 3.1</td>
  <td>KDE 3.1</td>
  <td class="center">3.1</td>
</tr>
<tr class="gradeA">
  <td>KHTML</td>
  <td>Konqureror 3.3</td>
  <td>KDE 3.3</td>
  <td class="center">3.3</td>
</tr>
<tr class="gradeA">
  <td>KHTML</td>
  <td>Konqureror 3.5</td>
  <td>KDE 3.5</td>
  <td class="center">3.5</td>
</tr>
<tr class="gradeX">
  <td>Tasman</td>
  <td>Internet Explorer 4.5</td>
  <td>Mac OS 8-9</td>
  <td class="center">-</td>
</tr>
<tr class="gradeC">
  <td>Tasman</td>
  <td>Internet Explorer 5.1</td>
  <td>Mac OS 7.6-9</td>
  <td class="center">1</td>
</tr>
<tr class="gradeC">
  <td>Tasman</td>
  <td>Internet Explorer 5.2</td>
  <td>Mac OS 8-X</td>
  <td class="center">1</td>
</tr>
<tr class="gradeA">
  <td>Misc</td>
  <td>NetFront 3.1</td>
  <td>Embedded devices</td>
  <td class="center">-</td>
</tr>
<tr class="gradeA">
  <td>Misc</td>
  <td>NetFront 3.4</td>
  <td>Embedded devices</td>
  <td class="center">-</td>
</tr>
<tr class="gradeX">
  <td>Misc</td>
  <td>Dillo 0.8</td>
  <td>Embedded devices</td>
  <td class="center">-</td>
</tr>
<tr class="gradeX">
  <td>Misc</td>
  <td>Links</td>
  <td>Text only</td>
  <td class="center">-</td>
</tr>
<tr class="gradeX">
  <td>Misc</td>
  <td>Lynx</td>
  <td>Text only</td>
  <td class="center">-</td>
</tr>
<tr class="gradeC">
  <td>Misc</td>
  <td>IE Mobile</td>
  <td>Windows Mobile 6</td>
  <td class="center">-</td>
</tr>
<tr class="gradeC">
  <td>Misc</td>
  <td>PSP browser</td>
  <td>PSP</td>
  <td class="center">-</td>
</tr>
<tr class="gradeU">
  <td>Other browsers</td>
  <td>All others</td>
  <td>-</td>
  <td class="center">-</td>
</tr>
</tbody>
</table>
</div>
  </div>
</div>
    <div class="row-fluid">
  <div class="span12">
    <div class="footer">
      <div>2012 &copy; Plastique Admin Theme</div>
      <div>Carefully crafted by <a href="https://wrapbootstrap.com/user/andrei4002">andrei4002</a></div>
    </div>
  </div>
</div>
  </div>
</section>

<script type="text/html" id="template-notification">
  <div class="notification animated fadeInLeftMiddle fast{{ item.itemClass }}">
    <div class="left">
      <div style="background-image: url({{ item.imagePath }})" class="{{ item.imageClass }}"></div>
    </div>
    <div class="right">
      <div class="inner">{{ item.text }}</div>
      <div class="time">{{ item.time }}</div>
    </div>

    <i class="icon-remove-sign hide"></i>
  </div>
</script>
<script type="text/html" id="template-notifications">
  <div class="container">
    <div class="row" id="notifications-wrapper">
      <div id="notifications" class="{{ bootstrapPositionClass }} notifications animated">
        <div id="dismiss-all" class="dismiss-all button blue">Dismiss all</div>
        <div id="content">
          <div id="notes"></div>
        </div>
      </div>
    </div>
  </div>
</script>
<script src="../../javascripts/application.js" type="text/javascript"></script><script src="../../javascripts/docs.js" type="text/javascript"></script><script src="../../javascripts/docs_charts.js" type="text/javascript"></script><script src="../../javascripts/documentation.js" type="text/javascript"></script><script src="../../javascripts/prettify.js" type="text/javascript"></script><link href="../../stylesheets/prettify.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    prettyPrint()
</script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-35778683-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>
</html>
