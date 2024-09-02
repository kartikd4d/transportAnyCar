<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">

<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]--><!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&amp;display=swap" rel="stylesheet" type="text/css"><!--<![endif]-->
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		.desktop_hide,
		.desktop_hide table {
			mso-hide: all;
			display: none;
			max-height: 0px;
			overflow: hidden;
		}

		.image_block img+div {
			display: none;
		}

		@media (max-width:620px) {
			.mobile_hide {
				display: none;
			}

			.row-content {
				width: 100% !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}

			.mobile_hide {
				min-height: 0;
				max-height: 0;
				max-width: 0;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide,
			.desktop_hide table {
				display: table !important;
				max-height: none !important;
			}
		}
	</style>
</head>

<body style="margin: 0; background-color: #ffffff; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff;">
		<tbody>
			<tr>
				<td>
					<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #efefef;">
						<tbody>
							<tr>
								<td>
									<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px; margin: 0 auto;" width="600">
										<tbody>
											<tr>
												<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
													<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
														<tr>
															<td class="pad" style="width:100%;padding-top: 50px;">
																<div class="alignment" align="center" style="line-height:10px">
																	<!-- <img src="https://image.optimite.email/wp-content/uploads/2024/02/Email-7.png" style="display: block; height: auto; border: 0; width: 100%;" width="600" alt="You have a new message" title="You have a new message"> -->
																	@if(isset($data['type']) && $data['type'] == 'user')
																		<p style="margin: 0;font-size:14px;"><a href="{{ route('front.unsubscribe', ['unsub' => true]) }}" target="_blank" style="text-decoration: underline; color: #717171;" rel="noopener">Unsubscribe from all emails</a></p>
																	@endif
																	<img src="https://mcusercontent.com/8992880337eb54b5df095f667/images/91d6d431-803b-d338-b1ae-4ab578715e2c.jpg" style="display: block; height: auto; border: 0; width: 100px; margin: 15px auto;" alt="You have a new message" title="You have a new message">
																	<h3 style="font-size: 22px;line-height: normal;">You have a <br><span style="color: #018dd4;">new message</span> </h3>    
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:20px;padding-left:15px;padding-right:15px;padding-top:30px;">
																<div style="color:#000f26;direction:ltr;font-family:'Montserrat', sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:19.2px;">
																	<p style="margin: 0;">
																		You have received a new message from {{ $data['user']->username }} for 
																		{{ $data['quotes']->vehicle_make }} {{ $data['quotes']->vehicle_model }} 
																		@if(!is_null($data['quotes']->vehicle_make_1) && !is_null($data['quotes']->vehicle_model_1))
																			/ {{ $data['quotes']->vehicle_make_1 }} {{ $data['quotes']->vehicle_model_1 }}
																		@endif 
																		delivery.
																	</p>
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-5" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:15px;padding-left:30px;padding-right:30px;padding-top:15px;">
																<div style="color:#000f26;direction:ltr;font-family:'Montserrat', sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:left;mso-line-height-alt:19.2px; background: #F1F1F1; padding: 40px;">
																	<span style="font-size: 22px; letter-spacing: 0;text-align: left; font-weight: 600; margin-bottom: 30px;display: block;">{{ $data['user']->username }} sent you a message</span>
																	<p style="margin: 0;">“{{ $data['message'] }}”</p>
																	<div class="alignment" align="center" style=" text-align: left;  margin-top: 30px;">
																	@if($data['from_page'] == 'delivery')
																	<a href="{{ route('transporter.current_jobs', ['id' => $data['quote_by_transporter_id']]) }}" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#52d017;border-radius:2px;width:auto;border-top:0px solid #8a3b8f;font-weight:400;border-right:0px solid #8a3b8f;border-bottom:0px solid #8a3b8f;border-left:0px solid #8a3b8f;padding-top:5px;padding-bottom:5px;font-family:'Montserrat', sans-serif;font-size:16px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:25px;padding-right:25px;font-size:16px;display:inline-block;letter-spacing:normal;"><span style="word-break: break-word; line-height: 32px;"><strong>Reply <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M21.4383 1.62195L18.2695 16.5657C18.0305 17.6204 17.407 17.8829 16.5211 17.386L11.693 13.8282L9.3633 16.0688C9.10548 16.3266 8.88986 16.5423 8.39298 16.5423L8.73986 11.6251L17.6883 3.53914C18.0774 3.19226 17.6039 3.00008 17.0836 3.34695L6.02111 10.3126L1.25861 8.82195C0.222672 8.49851 0.203922 7.78601 1.47423 7.28914L20.1024 0.112577C20.9649 -0.210861 21.7195 0.304764 21.4383 1.62195Z" fill="white"/>
																			</svg></strong></span></span>
																	</a>
																	@elseif($data['from_page'] == 'delivery_admin')
																	<a href="{{route('front.user_deposit', $data['quote_id'])}}" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#52d017;border-radius:2px;width:auto;border-top:0px solid #8a3b8f;font-weight:400;border-right:0px solid #8a3b8f;border-bottom:0px solid #8a3b8f;border-left:0px solid #8a3b8f;padding-top:5px;padding-bottom:5px;font-family:'Montserrat', sans-serif;font-size:16px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:25px;padding-right:25px;font-size:16px;display:inline-block;letter-spacing:normal;"><span style="word-break: break-word; line-height: 32px;"><strong>Reply <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M21.4383 1.62195L18.2695 16.5657C18.0305 17.6204 17.407 17.8829 16.5211 17.386L11.693 13.8282L9.3633 16.0688C9.10548 16.3266 8.88986 16.5423 8.39298 16.5423L8.73986 11.6251L17.6883 3.53914C18.0774 3.19226 17.6039 3.00008 17.0836 3.34695L6.02111 10.3126L1.25861 8.82195C0.222672 8.49851 0.203922 7.78601 1.47423 7.28914L20.1024 0.112577C20.9649 -0.210861 21.7195 0.304764 21.4383 1.62195Z" fill="white"/>
																			</svg></strong></span></span>
																	</a>
																	@elseif($data['from_page'] == 'quotes_admin')
																	<a href="{{route('front.messages', ['thread_id' => $thread_id])}}" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#52d017;border-radius:2px;width:auto;border-top:0px solid #8a3b8f;font-weight:400;border-right:0px solid #8a3b8f;border-bottom:0px solid #8a3b8f;border-left:0px solid #8a3b8f;padding-top:5px;padding-bottom:5px;font-family:'Montserrat', sans-serif;font-size:16px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:25px;padding-right:25px;font-size:16px;display:inline-block;letter-spacing:normal;"><span style="word-break: break-word; line-height: 32px;"><strong>Reply <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M21.4383 1.62195L18.2695 16.5657C18.0305 17.6204 17.407 17.8829 16.5211 17.386L11.693 13.8282L9.3633 16.0688C9.10548 16.3266 8.88986 16.5423 8.39298 16.5423L8.73986 11.6251L17.6883 3.53914C18.0774 3.19226 17.6039 3.00008 17.0836 3.34695L6.02111 10.3126L1.25861 8.82195C0.222672 8.49851 0.203922 7.78601 1.47423 7.28914L20.1024 0.112577C20.9649 -0.210861 21.7195 0.304764 21.4383 1.62195Z" fill="white"/>
																			</svg></strong></span></span>
																	</a>
																	@elseif($data['from_page'] == 'message_admin')
																	<a href="{{route('front.messages', ['thread_id' => $thread_id])}}" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#52d017;border-radius:2px;width:auto;border-top:0px solid #8a3b8f;font-weight:400;border-right:0px solid #8a3b8f;border-bottom:0px solid #8a3b8f;border-left:0px solid #8a3b8f;padding-top:5px;padding-bottom:5px;font-family:'Montserrat', sans-serif;font-size:16px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:25px;padding-right:25px;font-size:16px;display:inline-block;letter-spacing:normal;"><span style="word-break: break-word; line-height: 32px;"><strong>Reply <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M21.4383 1.62195L18.2695 16.5657C18.0305 17.6204 17.407 17.8829 16.5211 17.386L11.693 13.8282L9.3633 16.0688C9.10548 16.3266 8.88986 16.5423 8.39298 16.5423L8.73986 11.6251L17.6883 3.53914C18.0774 3.19226 17.6039 3.00008 17.0836 3.34695L6.02111 10.3126L1.25861 8.82195C0.222672 8.49851 0.203922 7.78601 1.47423 7.28914L20.1024 0.112577C20.9649 -0.210861 21.7195 0.304764 21.4383 1.62195Z" fill="white"/>
																			</svg></strong></span></span>
																	</a>
																	@else 
																	<a href="{{route('transporter.messages', ['thread_id' => $thread_id])}}" target="_blank" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#52d017;border-radius:2px;width:auto;border-top:0px solid #8a3b8f;font-weight:400;border-right:0px solid #8a3b8f;border-bottom:0px solid #8a3b8f;border-left:0px solid #8a3b8f;padding-top:5px;padding-bottom:5px;font-family:'Montserrat', sans-serif;font-size:16px;text-align:center;mso-border-alt:none;word-break:keep-all;"><span style="padding-left:25px;padding-right:25px;font-size:16px;display:inline-block;letter-spacing:normal;"><span style="word-break: break-word; line-height: 32px;"><strong>Reply <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M21.4383 1.62195L18.2695 16.5657C18.0305 17.6204 17.407 17.8829 16.5211 17.386L11.693 13.8282L9.3633 16.0688C9.10548 16.3266 8.88986 16.5423 8.39298 16.5423L8.73986 11.6251L17.6883 3.53914C18.0774 3.19226 17.6039 3.00008 17.0836 3.34695L6.02111 10.3126L1.25861 8.82195C0.222672 8.49851 0.203922 7.78601 1.47423 7.28914L20.1024 0.112577C20.9649 -0.210861 21.7195 0.304764 21.4383 1.62195Z" fill="white"/>
																			</svg></strong></span></span>
																	</a>
																	@endif
																	</div>
																</div>
															</td>
														</tr>
													</table>
													<table class="paragraph_block block-4" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
														<tr>
															<td class="pad" style="padding-bottom:30px;padding-left:50px;padding-right:50px;padding-top:15px;">
																<div style="color:#000f26;direction:ltr;font-family:'Montserrat', sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:16.8px;">
																	<p style="margin: 0;"><strong>Note:</strong> Please click the button above to message the transport provider, do not reply directly to this email.</p>
																</div>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #efefef;">
						<tbody>
						<tr>
							<td>
								<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fff; border-radius: 0; color: #000000; width: 600px; margin: 0 auto;" width="600">
									<tbody>
									<tr>
										<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
											<table class="image_block block-1" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
												<tr>
													<td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:30px;width:100%;">
														<div class="alignment" align="center" style="line-height:10px">
															<div style="max-width: 180px;"><img src="https://mcusercontent.com/8992880337eb54b5df095f667/images/91d6d431-803b-d338-b1ae-4ab578715e2c.jpg" style="display: block; height: auto; border: 0; width: 100%;" width="180" alt="transport any car" title="transport any car"></div>
														</div>
													</td>
												</tr>
											</table>
											<table class="paragraph_block block-2" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
												<tr>
													<td class="pad" style="padding-bottom:40px;padding-left:10px;padding-right:10px;padding-top:10px;">
														<div style="color:#ffffff;direction:ltr;font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:center;mso-line-height-alt:16.8px;">
															<p style="margin: 0; margin-bottom: 16px; color: #000;">© 2024 Transport Any Car. 128 City Road, London, EC1V 2NX.</p>
															@if(isset($data['type']) && $data['type'] == 'user')
																<p style="margin: 0;"><a href="{{ route('front.unsubscribe', ['unsub' => true]) }}" target="_blank" style="text-decoration: underline; color: #717171;" rel="noopener">Unsubscribe from all emails</a></p>
															@endif
														</div>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									</tbody>
								</table>
							</td>
						</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table><!-- End -->
</body>

</html>