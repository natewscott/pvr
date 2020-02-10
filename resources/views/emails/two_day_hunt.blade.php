<html>
	<head>
		<meta charset="UTF-8">
		<title>Contact Inquiry</title>
		<style>
			html,
			body {
				margin: 0 auto !important;
				padding: 0 !important;
				height: 100% !important;
				width: 100% !important;
				background: #f1f1f1;
			}
			body {
				font-family: 'Montserrat', sans-serif;
			    font-weight: 400;
			    font-size: 15px;
			    line-height: 1.8;
			}
			.email-section {
				padding: 2.5em;
			}
			.heading-section{
			}
			.heading-section h2{
				color: #000000;
				font-size: 28px;
				margin-top: 0;
				line-height: 1.4;
			}
			.heading-section .subheading{
				margin-bottom: 20px !important;
				display: inline-block;
				font-size: 13px;
				text-transform: uppercase;
				letter-spacing: 2px;
				color: rgba(0,0,0,.4);
				position: relative;
			}
			.heading-section .subheading::after{
				position: absolute;
				left: 0;
				right: 0;
				bottom: -10px;
				content: '';
				width: 100%;
				height: 2px;
				background: #f3a333;
				margin: 0 auto;
			}
		</style>
	</head>
	<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly;">
		<center  style="width: 100%; background-color: #f1f1f1;">
			<div style="max-width: 600px; margin: 0 auto;">
				<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
					<tbody>
						<tr>
							<td style="padding: 1em 2.5em; text-align: center">
								<h1 id="name">Paris Valley Ranch</h1>
							</td>
						</tr>
						<tr>
							<td class="email-section">
								<div class="heading-section" style="text-align: center; padding: 0 30px;">
									<h2 class="subheading">
										{{ $request->name }} is interested in booking the PVR Two Day Hunt.
									</h2>
								<p>
									{{ $request->name }} is interested in doing the PVR Two Day Hunt from {{ $request->checkin }} to {{ $request->checkout }}. There will be {{ $request->guests}} Hunters on this trip.
								</p>
								</div>
							</td>
						</tr>
						<tr>
							<td class="email-section">
								<div class="heading-section" style="text-align: center; padding: 0 30px;">
									<h2 class="subheading">
										Contact Information
									</h2>
								<p>
									{{ $request->name }} can be reached at: {{ $request->email }}
								</p>
							</div>
							</td>
						</tr>
					</tbody>
				</table>
				
			</div>
		</center>
		
	</body>
</html>