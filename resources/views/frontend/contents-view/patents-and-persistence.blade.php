@extends('frontend.layouts.master-register')
	@section('content')
<div class="row padding_0">
		<div class="col-sm-12" style="padding: 0; min-height: 60px; padding-top: 15px;">
			<!--	<ul class="media-ul">
					<li class="media-ul-lii"><i class="fa fa-home home-icon industy"></i><a href="#" style="color: #999;font-size: 13px; padding-left: 10px;">Quality Suppliers by Industry</a></li>
					<li class="media-ul-li"><a href="#" class="industy-next">BDTDC Events</a></li>
					<li class="media-ul-li"><a href="#" class="industy-next">BDTDC Research</a></li>
					<li class="media-ul-li"><a href="#" class="industy-next">Service Highlight</a></li>
					
				</ul> -->
				<ul class="nav nav-tab nav-pills trade-show-ul" style="background:none;border-bottom: 1px solid #dae2ed; margin-left: 0;" aria-label="Navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
								<li style="padding-top: 11px;font-size: 15px;font-weight: 600;"><i class="fa fa-home home-icon industy" style="vertical-align: inherit;"></i></li>
								<li class="" style="margin-left: 10px;"><a itemprop="url"  class="padding_0" href="{{URL::to('selected/supplier-products'),is_secured()}}" target="_blank" data-toggle="tab" aria-expanded="false" style="background-color: #f5f5f5;color: #5b9bd1;">Quality Suppliers</a></li>
								<li class=""><a itemprop="url"  style="font-size: 13px;" class="padding_0" href="{{URL::to('tradeshow'),is_secured()}}" data-toggle="tab" aria-expanded="false">BuyerSeller Events</a></li>
							<li class=""><a itemprop="url"   style="font-size: 13px;" class="padding_0" href="{!! URL::to('research',is_secured()) !!}" target="_blank">BuyerSeller Research</a></li>
								<li class=""><a itemprop="url"  style="font-size: 13px;" class="padding_0" href="{!! URL::to('bdtdc/service',is_secured()) !!}" target="_blank" data-toggle="tab" aria-expanded="false">Service Highlight</a></li>
								
								
								   
							</ul>
		</div>
	
</div>
<div class="row padding_0" style="background-color: #fff;border-bottom: 1px solid rgba(0,0,0,.1);">
	<div class="col-sm-2">
		<div class="side-bdtdc-menu">
				<ul style="padding-left: 0;">
					<li><a itemprop="url"   href="{{URL::to('tradeshow'),is_secured()}}" class="frIco event" target="_blank"><p>Events</p></a></li>
					<li><a itemprop="url"   href="{{URL::to('prease-release/the-daily-star'),is_secured()}}" class="frIco press"><p>Press Release</p></a></li>
					
					<li style="height: 50px;"><a itemprop="url"    href="{{URL::to('bangladesh/business'),is_secured()}}" class="frIco bangla"><p>Bangladesh Means Business</p></a></li>
					<li><a itemprop="url"    href="https://www.youtube.com/c/Bdtdc" class="frIco video-i"><p>Video</p></a></li>
					
					<li><a itemprop="url"    href="https://www.facebook.com/bdtdc/" target="_blank" class="frIco sosial-con"><p>Social Media</p></a></li>
					
					<li><a itemprop="url"    href="{{URL::to('contact')}}" target="_blank" class="frIco contac-con"><p>Contact Us</p></a></li>
				</ul>
		</div>
		<div class="promo-img">
		  	
		</div>
		<div class="sideSocial">
            <ul style="padding: 0; display: block; overflow: hidden;">
                <li><a href="#" class="frIco icoSF" target="_blank"></a></li>
                <li><a href="#" class="frIco icoST" target="_blank"></a></li>
                <li><a href="#" class="frIco icoSG" target="_blank"></a></li>
                <li><a href="#" class="frIco icoSY" target="_blank"></a></li>
                <li><a href="#" class="frIco icoSL" target="_blank"></a></li>
                <li><a href="#" class="frIco icoSS st_sharethis_custom"></a></li>
                <li><a href="#" class="frIco icoSR" target="_blank"></a></li>
            </ul>
        </div>
		
	</div>
	<div class="col-sm-7" style="margin-top: 15px;">
				<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
						 <img style="height:300px" width="100%" src="{!! asset('assets/fontend/bdtdc-images/rainbow-hong-kong-Exhibition.jpg') !!}" class="girl img-responsive" alt=""> 
				</div>
			<div class="col-sm-12 col-md-12 col-lg-12 padding_0">

								
							<p style="color: #000; font-weight: bold; font-size: 16px; padding-bottom: 0; margin-top: 4%;">A TALE OF  PATENTS AND PERSISTENCE</p>
							<p style="color: #000; font-weight: bold;text-align: center; clear: both;">Staff Report</p>
								
							
									<p>“ I feel like I had to swim the entire Pacific Ocean to bring this innovation to reality,” says Kazi Ahmed, inventor of Rainbow Brush. Each Rainbowbrush is a watercolor marker designed for children’s art activities. The marker designed for children’s art activities. The marker’s nib is wider than its plastic body, and soft enough to produce the effect of a paintbrush, Children can attach two or more Rainbowbrush markers side by side so the nibs touch and use them together. This blends the colors seamlessly. One stroke can achieve what would have needed two or three strokes with other markers. This makes possible a particularly vibrant style of drawing.” There is so much hard work that goes behind every product before you see it on the shelf,” the inventor emphasizes.  Starting  from the invention and patenting stage, each product faces  a set of hurdles. As of yet, Bangladesh is not a member of the Industrial Union for the protection of Industrial Property, known as the Paris Union. This would grant Bangladeshi inventors copyright around the world, allowing them to be recognized business partners. It would allow them to stand up to the multinationals.</p>
									<h3 style="clear: both; color: #000; display: block;font-size: 18px; font-weight: bold; line-height: 36px;">Today Rainbowbrush’s Asian market is worth USD 500 million and growing every day.</h3>
<p>Today, RainbowBrush has seven international patents in countries such  as the USA, the EU, Canada, Japan and China. Customers can now find the Rainbowbrush in store there and in more than 17 other countries across South East Asia, Australia, Middle East, Mexico, Russia, and the Caribbean.” We are the sixth largest maker of toys  in the world,”beams Ahmed. He employs 67 people in the US,and has offices in China and Hong Kong. Ahmed in his twenties left Bangladesh for Saudi Arabia. Later, as a student in Canada,he began experimenting with  his own version of Chinese calligraphy-name painting art.” Or if directly translated,”Leather brush art,” This eventually inspired the creation of the Rainbowbroush markes. The markes let children paint as if  they are using water colors ,but without making a mess of it. Too copyright his creation , Ahmed formalized RainbowBrush as accompany registered it in Vancouver in 1995,and in key West,Florida in 2005. Ahmed and his wife Cindy Finalized the Rainbowbrush’s design after more than five years’ research.  It costs them upwards of $50,000. The chief problem had been how to close the  gap between two or more markers, which stationery manufacturers had written off as impossible. The Ahmeds flew between Japan,China and the United States to find the right suppliers, and persisted despite losing their deposit for marker moulds twice. After exhibiting the Rainbowbrush in Hong Kong, Ahmed received his first international order from K-mart Australia in 1995.</p>
<p>Today Rainbowbrush manufactures its markers in two Chinese  cities Dongguan in the south and in Ningbo, near  Shanghai. With these two por of exit, Ahmed can get his product  out to his customers in, say, both Eastern Europe and the Pacific. His Chinese logistics team is trained extensively in quqlity control. Some components of his pens are imported from Japan and the United States. This way, Ahmed ensures  the products meet international safety standards.</p>
<p>East Asian markets have been a key factor in the success of Rainbowbrush, making  $400,000 in its very first year on the shelves in 2009. In fat modernizing cultures where the parents in an expanding middle class are increasingly busy, there is are growing markets for innovative toys and art products. These can help children to express themselves artistically. Today Rainbowbrush’s Asian market is worth $500 million and growing every day. To cater to his demand,  the Rainbowbrush through videos and television, demonstrating how to draw using the brushes. He spent $2 million in the last year alone for the latter,while attending various exhibitions in Germany, China, the UAE and the US.
Frequent travel on business means that he has to be away from his family and has to constantly stretch his imagination, thinking of constantly  stretch his imagination, thinking of ways to introduce novelty to the Rainbowbrush. The internationalmarketplace is a demanding one.</p>
<h3 style="clear: both; color: #000; display: block;font-size: 18px; font-weight: bold; line-height: 36px;">Two of the biggest pen companies based in Ningbo copied his design,but due to patent protection, Ahmed took quick legal action and put a stop to it.</h3>
<p>One of the biggest challenges to any inventor, Ahmed explains, is securing a patent without paying an arm and a leg. While it is possible to do it with minimal lawyer fees, young inventors often do not know how. By securing patents beforehand, Ahmed expanded his business, able to take on new countries quickly. Basing so much of his business in China-famous for its counterfeit production-has had its difficulties. Two of the biggest pen companies based in Ningbo copied his design, but due to patent protection, Ahmed took quick legal action and put a stop to it. Nobody else has tried since. Looking to expend production further, he has inaugurated new offices in Dhaka’s Uttara. He employs a dozen IT graduate here,and hopes to step that up to as many as 200 people eventually. Ahmed senses possibility in Bangladesh’s youth, while  acknowledging  that the education system trains them to find jobs rather than become entrepreneurs. He also believes that successful Bangladeshi expats can fill in the dearth of mentors in this country. ”I see there are plenty of opportunities lying underneath the problems and Bangladesh needs people who can turn these problems into opportunities,” he explains. Innovators are made, not born. An innovator believes in his vision in spite of all the naysayers and is self-reliant. For these reasons, Ahmed considers his North American higher education  the key of success.</p>
<p>Ahmed’s goal for the future is to keep on dreaming big, to take the Rainbowbrush to a point where it can even challenge Disney products in innovation and quality. This may be sound over-ambitious not, but his track record says he has not let considerations like that stop him so far.BB</p>


			
		</div>
				



			
					<!-- end slider -->	
				@include('frontend.contents-view.media-room-top-stories')
		
	</div>
	<div class="col-sm-3">
		<div class="frMainTit">Events</div>
		<div class="frMainRtTitBrd"></div>
   			<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;height=280&amp;wkst=1&amp;bgcolor=%23666666&amp;src=8uuedea58r8ddbhnhc9v4nacl4%40group.calendar.google.com&amp;color=%230F4B38&amp;ctz=Asia%2FDhaka" style="border:solid 1px #777" width="280" height="280" frameborder="0" scrolling="no"></iframe>
		
	</div>
	
</div>
<br>

	@stop
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
   				$("p").addClass("portal-content-p");
   	});		 

</script>
	