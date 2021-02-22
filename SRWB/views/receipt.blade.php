<html>
	<head>
		<title>NBS BANK Deal Slip</title>
         <link href="{{base_url()}}assets/images/nbs_logo.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />	
	</head>
	<body>
		<div class="table">
		<table border="0" height="150" style="margin-left: 100px; border-collapse: separate; border-spacing: 10px;">
			<tr >
				<td colspan="2" align="center" ><span style="margin-right:5px">NBS BANK </span> </td>
			</tr>
			
			<tr >
				<td colspan="2" align="center" ><span style="margin-right:5px">{{$branch_name}} </span> </td>
			</tr>
			<tr >
				<td colspan="2" align="center" ><span style="margin-right:5px">ZUKU Payment</span> </td>
			</tr>
			<tr>
				<td align="left"> TellerName </td><td align="left">:&nbsp;&nbsp;{{$TellerName}}</td>
			</tr>
			<tr>
				<td align="left"> Account Number: </td><td align="left">:&nbsp;&nbsp;{{$VoucherNumber}}</td>
			</tr>		
			<tr>
				<td align="left"> Amount </td><td align="left">:&nbsp;&nbsp;MWK {{number_format($VoucherAmount)}}</td>
			</tr>
			<tr>
				<td align="left"> Transaction ID </td><td align="left">:&nbsp;&nbsp;{{$TransactionID}}</td>
			</tr>
			<tr>
				<td align="left"> Transaction DateTime </td><td align="left">:&nbsp;&nbsp;{{$TransactionDate}}</td>
			</tr>
			
		</table>
		</div>
			<script>
			window.print();
			//window.close();
			</script>
	</body>
</html>
