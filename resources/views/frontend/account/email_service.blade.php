@extends('fontend.master-dashboard')
@section('page_css')
<link property='stylesheet' href="{!! asset('css/help.css',is_secured()) !!}" rel="stylesheet">
<link property='stylesheet' href="{!! asset('css/dashboard.css',is_secured()) !!}" rel="stylesheet">

@endsection
@section('content')
<div class="container">
<div class="row padding_0;" style="background:#fff; margin-top:20px;border-top: 1px solid #d1dbe8;margin-bottom:20px;">
		<div class="col-sm-12 col-md-12 col-lg-12 padding_0">
				<div class="col-sm-2 col-md-2 col-lg-2 padding_0">
			@include('fontend.layouts.account-sideber')
			</div>
			<div class="col-sm-10 col-md-10 d-white" >
				<div class="col-sm-12" style="padding-top: 2%;">
					<p style="font-size: 20px;margin-left: -2%;">Email Services</p>
					<p style="margin-left: -2%;font-size:18px;color: #333;font-family: arial;">Select the email which you wish to subscribe</p>
				</div>
				<div class="col-sm-12" style="height: 129px;margin-top:1%;background-color: rgba(221, 221, 221, 0.22);border:1px solid #DDD;">
					<p style="padding-top: 2%;font-size: 14px;font-weight: 700;font-family: arial;">Trade Alerts</p>
					<p style="margin-top: -1%;color: #999;font-family: arial;font-size: 12px;">Free updates on the latest products, industry trends, buyer sourcing requests and supplier information.</p>

				</div>
				<div class="col-sm-12 padding_0" style="margin-top:1%;border:1px solid #DDD;margin-bottom:3%;">
					<div class="col-sm-12 padding_0" style="background-color: rgba(221, 221, 221, 0.22);">
						<div class="col-sm-9">
							<p style="font-size: 14px;font-weight: 700;font-family: arial;padding-top: 3%;">Membership Services</p>
							<p style="padding-bottom: 2%;margin-top: -1%;color: #999;font-family: arial;font-size: 12px;">New services and promotions.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Expos & Trade Shows </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Comprehensive guidance to help you learn more about bdtdc.com's services, events and more.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Recommendation Quotation </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Recommend top supplier quotation for you</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Service Instructions </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">User guides for bdtdc.com members.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Survey Invitations </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Invitations to participate in paid/non-paid surveys.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Gold Supplier Membership Updates </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Get updates on features, benefits and promotional offers for Gold Supplier Membership.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Global Expo Notifications </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Reminder emails regarding upcoming expos you may want attend.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					
				</div>

				<div class="col-sm-12 padding_0" style="margin-top:1%;border:1px solid #DDD;margin-bottom:3%;">
					<div class="col-sm-12 padding_0" style="background-color: rgba(221, 221, 221, 0.22);">
						<div class="col-sm-9">
							<p style="font-size: 14px;font-weight: 700;font-family: arial;padding-top: 3%;">Automated Notifications</p>
							<p style="padding-bottom: 2%;margin-top: -1%;color: #999;font-family: arial;font-size: 12px;">Emails sent to notify you of important information and account activity on bdtdc.com.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Buying Request rejections & insufficient quote notifications </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Email notification when your Buying Request is rejected or there are insufficient quotations for your Buying Request.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Buying Request approvals, new quotes & order confirmations  </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Notifications when your Buying Request is approved, new quotations arrive and order information confirmation requests.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">New Message Alerts (required) </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Instant access to your latest communication.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Connections Notification </p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Notification when you receive a new Business Card request or Identity Confirm request.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Membership and Service Information (required)</p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Review outcomes for Member & Company Profiles and other product information.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					<div class="col-sm-12 padding_0" style="border-bottom:1px solid #DDD;">
						<div class="col-sm-9">
							<p style="font-style: inherit;font-weight: inherit;font-size: 14px;line-height: 37px;">Penalty Notifications (required)</p>
							<p style="padding-bottom: 2%;margin-top: -2%;color: #999;font-family: arial;font-size: 12px;">Information and penalties regarding complaint cases and/or Alibaba.com policy violations.</p>
						</div>
						<div class="col-sm-3" style="background-color: rgba(221, 221, 221, 0.22);"></div>
						
					</div>
					
				</div>
				

			</div>
		</div>
	</div>
@stop
 @section('scripts')
    <script type="text/javascript">

		
 	</script>
					
@stop