
<?php
error_reporting(0);
?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CreditBorrow.com - 24/7 Borrowing and Credit News Aggregator</title>
      <meta name="description" content="Free 24/7 Credit and Borrowing, Loans, and Debt News aggregator">
<meta name="keywords" content="news aggregator,aggregator, trans union, credit score, creditscore.com, creditreport.com, transunion.com, transunion, creditreport, experian, credit score, cheap credit report, debt clock, time and date, debt news, loan news">
   
    <style type="text/css">
	body{
	font-family:"Trebuchet MS";
	font-size:12px;
	}
	a{
	color:#333333;
	text-decoration:none;
	}
	a:hover{ color:#0066CC; text-decoration:underline; font-weight:bold}
	hr{
	color: #dedede;
background-color: #dedede;
height: 1px;	}
       .vas{
	   float:left;
		width:270px;
		
		padding:10px;
	   }
	
      .title-head {
            
        font-size:18px;
        font-weight:bold;
        text-align:left;
        background-color:#82C83A;
		color:#FFFFFF;
	   
        padding:5px;
       
      }
      .feeds-links {
        
       
        text-align:left;
		
        padding:5px;
        border:1px solid #dedede;
      }
       
       .footer {
	   font-size:11px;
	   font-weight:bold;
	   font-family:Verdana, Arial, Helvetica, sans-serif;	  
        }
    </style>
  </head>
  <body style="height:80px; background:url(logo.jpg) top no-repeat">
  <div style=" height:15px; padding-top:60px; text-align:center;padding-bottom:10px; color:#000; font-size:16px; "></div>
<div style="height:20px">

<span style="float:right; font-size:16px"><img src="http://lh4.ggpht.com/srinivas.tamada/SMjzHjv978I/AAAAAAAAAT0/6vh8WXZhqdE/feed-ico.gif" /><a href="http://blog.creditborrow.com">Go to CreditBorrow.com Blog</a></span></div>
  <div>
  <?php
  include('rssclass.php');
  $feedlist = new rss('http://gdata.youtube.com/feeds/api/users/freecreditscore/uploads?fields=entry');
  echo $feedlist->display(9,"FreeCreditScore.com");
  
  $feedlist = new rss('http://gdata.youtube.com/feeds/api/users/revivemycredit/uploads?fields=entry');
  echo $feedlist->display(9,"Revive My Credit");
  
  $feedlist = new rss('http://gdata.youtube.com/feeds/api/users/ftcvideos/uploads?fields=entry');
  echo $feedlist->display(9,"FTC Videos");

  $feedlist = new rss('http://gdata.youtube.com/feeds/api/users/experianus/uploads?fields=entry');
  echo $feedlist->display(9,"Experian US");

  $feedlist = new rss('http://gdata.youtube.com/feeds/api/users/creditexpertuk/uploads?fields=entry');
  echo $feedlist->display(9,"Credit Expert UK");

  $feedlist = new rss('http://gdata.youtube.com/feeds/api/users/experianmktgservices/uploads?fields=entry');
  echo $feedlist->display(9,"Experian Marketing Services");

  $feedlist = new rss('http://gdata.youtube.com/feeds/api/users/transunion/uploads?fields=entry');
  echo $feedlist->display(9,"Trans Union");

  $feedlist = new rss('https://www.google.com/alerts/feeds/06825901491775470571/17205251042753190712');
  echo $feedlist->display(9,"Credit Score News");
  
  $feedlist = new rss('https://www.google.com/alerts/feeds/06825901491775470571/14556674531762392712');
  echo $feedlist->display(9,"Credit Rating News");
 
  $feedlist = new rss('https://www.google.com/alerts/feeds/06825901491775470571/6624247184339831193');
  echo $feedlist->display(9,"Loan News");

  $feedlist = new rss('https://www.google.com/alerts/feeds/06825901491775470571/15771356627580591987');
  echo $feedlist->display(9,"Debt News");
  
  $feedlist = new rss('https://www.google.com/alerts/feeds/06825901491775470571/13623934691673395109');
  echo $feedlist->display(9,"Credit Card News");

   ?>

    </div>
	
     
	
  </body>
</html>