@extends('frontend.layouts.master-register')
@section('page_css')
    <link property='stylesheet' href="{!! asset('assets/fontend/bdtdccss/media-room-style.css',is_secured()) !!}" rel="stylesheet">
    @endsection
@section('content')
<div class="row" style="padding-bottom: 10px">
         <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="top-path" itemscope itemtype="http://schema.org/BreadcrumbList">
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="{{URL::to('/',null,is_secured())}}" class="top-path-li-a"><span itemprop="name">Home </span><i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li"><a itemprop="url" href="{{URL::to('ServiceChannel/pages/for_buyer',35,is_secured())}}" class="top-path-li-a">Help Center <i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li"><a itemprop="url"  href="{{URL::to('SupplierChannel/pages/learning_center',33),is_secured()}}" class="top-path-li-a">Learning Center<i class="fa fa-angle-right top-path-icon"></i></a></li>
              <li class="top-path-li" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="" class="top-path-li-a"><span itemprop="name">How to Deal with Phishing Emails</span></a></li>
              
            </ul>
        </div>
    
  </div>

  
		@include('fontend.footerpage.learning-sidebar')
		
							<div class="col-sm-9">
							 <h3 class="training-pp" style="font-size: 20px; color: #000; font-weight: bold; padding-top: 3%;">How to Deal with Phishing Emails?</h3>

		<p class="training-pp">The purchase of goods and services over the Internet is according to various e-commerce experts today safer than ever. The same applies to online banking, despite activities of e-mail scammers that necessitate certain precautions especially in the e-mail communication, although recently released figures showed that the number of criminally motivated spam, so called phishing activities, has dramatically increased.</p>
	<p class="training-pp">For those who do not already know anything about "phishing": it derives from the words "password" and "fishing" where:</p>
<p class="training-pp">•	Fraudsters ask in e-mails to follow a link and specify or update personal data, passwords or PIN codes. In fact, the link refers only to an almost perfect copy of an original page.</p>
<p class="training-pp">•	With the help of email viruses (Trojans) scammers spy on personal accounts, access or customer data.</p>
<p class="training-pp">With the stolen data, fraudsters try for example to make transfers abroad or make orders on behalf of the actual owner using the relevant data or credit/debit cards respectively. Affected are mostly banks as well as various e-commerce providers.</p>
<p class="training-pp">According to a recent study from the U.S., almost one in three users is not sure whether they have received a fraudulent or an officially unauthorized e-mail from a financial institute. Even if the problem in Asia apparently doesn’t seem to have such dramatic dimensions as in the U.S., it is striking that spammers’ tapping of confidential data is becoming commonplace and their activities become more and more criminally motivated. Thus, information is needed to keep a check on the threat.</p>
<h4 class="training-h4">Here are 10 tips to protect yourself against phishing:</h4>
<p class="training-pp">1.	Protect sensitive data during transmission over non-protected networks not only with encryption methods. You should be in particular careful when personal and confidential data is sent and provided via e-mail, which is quite common in online banking or online shopping.</p>
<p class="training-pp">2.	If in doubt, check who you're dealing with. E-mail sender addresses are easy to forge, so check the specified URL – typically, banks and online stores communicate over secure websites (https://). Take a close look at the address bar of your Internet. Open if necessary a second browser window to check if the website of the bank or online store really exists. Should you ever be invited by mail to confirm a link that leads you to a website where you will be prompted to enter directly or at a later date your personal login information, you should be suspicious - banks and shops where you regularly do online operations belong to your browser’s favorites, which gives you the assurance that the link is correct.</p>
<p class="training-pp">3.	Don’t save PINs, TANs, credit card numbers or your personal access information (passwords) to access the Internet on your hard disk. In this way, you protect yourself against unwanted snooping and unknowing Internet dial-up. In any case, you should choose a secure password, i.e. a combination of uppercase and lowercase letters, special characters and numbers.</p>
<p class="training-pp">4.	Only make program downloads from trusted sources. This gives you protection against so-called Trojan horses that allow the espionage of sensitive data. Beware of Peer2Peer networks as more risks and dangers are lying there, too. The same goes for e-mail attachments.</p>
<p class="training-pp">5.	Check who else is using the Internet on your PC. Protect yourself from unauthorized access to your PC through a security check when you start your computer.</p>
<p class="training-pp">6.	Take advantage of the latest program versions and offered security updates, patches, and bug fixes for your operation system and your Internet software and browser.. 
Perform regular safety checks on your PC and especially before you plan transactions on the Internet. Besides the common programs there are various free safety checks available as well –</p> 

<p class="training-pp">7.	Treat Internet cafes with special caution as you never know who was using the PC before and will use it after you. Besides, you never know what kind of programs are on the hard disk. Of course the operators of Internet cafés are constantly striving to assure secure Internet access, but the possibilities of protection in the variety of publicly available computers are limited. In any case, you should empty the cache after using the PC to remove your personal information and it helps the staff of the Internet cafes alike.</p>
<p class="training-pp">8.	Take advantage of the security options of your internet browser. This way, you are asked first for permission when you run Java applets and cookies. But keep in mind that cookies are essential for your purchase in an online shop, the so-called shopping basket function. The same applies to certain features of online banking.</p>
<p class="training-pp">9.	Use antivirus, anti-dialer, and security software. New viruses, worms or Trojan horses are appearing daily on the Internet. You can only protect yourself with regular updates of your security measures, which means appropriate software tools.</p>
<p class="training-pp">10.	The growing adoption of DSL connections and the attractive volume packages of Internet providers has resulted in the phenomenon that users nowadays are not only online when absolutely necessary, but that each PC has its own address, which allows other PCs to connect with. This increases the risk enormously that someone unauthorized enters your PC through the back door. A personal firewall can be here a great protection. If you receive SPAM or gain in any way knowledge of phishing activities, please inform the relevant companies (banks, online stores, auction houses) of these illegal activities. Thus, you help to protect other consumers and Internet users.</p>

								
							</div>
				</div>
			
		</div>
@stop