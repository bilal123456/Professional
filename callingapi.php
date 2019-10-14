<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>

<marquee>
	<ul>
		<li>ABC/USD
			<ul>
				<ol id="a"></ol>
				
			</ul>
		</li>
	<li id="">ACP/USD
		<ul>
			<ol id="b"></ol>
		</ul>
	</li>
	<li id="l">ACT/USD
		<ul>
			<ol id="c"></ol>
		</ul>
	</li>
	<li id="b">AIB/USD
			<ul>
				<ol id="d"></ol>
			</ul>
		</li>
		<li id="b">AST/USD
			<ul>
				<ol id="e"></ol>
			</ul>
		</li>
		<li id="b">BAR/USD
			<ul>
				<ol id="f"></ol>
			</ul>
		</li>
		<li id="b">BTCA/USD
			<ul>
				<ol id="g"></ol>
			</ul>
		</li>
		<li id="b">ENJ/USD
			<ul>
				<ol id="h"></ol>
			</ul>
		</li>
		<li id="b">ETT/USD
			<ul>
				<ol id="i"></ol>
			</ul>
		</li>
		<!-- <li id="b">KIN/USD
			<ul>
				<ol id="j"></ol>
			</ul>
		</li> -->
		<!-- <li id="b">MTL/USD
			<ul>
				<ol id="k"></ol>
			</ul>
		</li>
		<li id="b">MTX/USD
			<ul>
				<ol id="l"></ol>
			</ul>
		</li> -->
<!-- 		<li id="b">NULS/USD
			<ul>
				<ol id="m"></ol>
			</ul>
		</li>
		<li id="b">OAX/USD
			<ul>
				<ol id="n"></ol>
			</ul>
		</li> -->
<!-- 		<li id="b">SALT/USD
			<ul>
				<ol id="o"></ol>
			</ul>
		</li>
		<li id="b">SBC/USD
			<ul>
				<ol id="p"></ol>
			</ul>
		</li>
		<li id="b">ETH/USD
			<ul>
				<ol id="q"></ol>
			</ul>
		</li>
		<li id="b">BTC/USD
			<ul>
				<ol id="r"></ol>
			</ul>
		</li>
		<li id="b">XRP/USD
			<ul>
				<ol id="s"></ol>
			</ul>
		</li>
		<li id="b">LTC/USD
			<ul>
				<ol id="t"></ol>
			</ul>
		</li>
		<li id="b">DASH
			<ul>
				<ol id="u"></ol>
			</ul>
		</li> -->
</ul>

</marquee>
<style type="text/css">
	ul li
	{
		display: block;float: left;
	}
	ul li ul ol
	{
		position: relative;
		left: -70px;
	}
</style>











<script type="text/javascript">
	
	$(function(){

		$.ajax({
			type:'GET',
			url:"http://api.coinlayer.com/api/live?access_key=7b7bf4d01cc6e25eb34b61859858992f",
			dataType:'json',
			success:function(data)
			{
				
				var ABC = data['rates'].ABC

				var ACP = data["rates"].ACP
				var ACT = data["rates"].ACT
				var AIB = data["rates"].AIB
				var AST = data["rates"].AST
				var BAR = data["rates"].BAR


				var BTCA = data["rates"].BTCA
				var ENJ = data["rates"].ENJ
				var ETT = data["rates"].ETT
				var KIN = data["rates"].KIN
				var MTL = data["rates"].MTL


				var MTX = data["rates"].MTX
				var NULS = data["rates"].NULS
				var OAX = data["rates"].OAX
				var SALT = data["rates"].SALT
				var SBC = data["rates"].SBC





				var ETH = data["rates"].ETH
				var BTC = data["rates"].BTC
				var acp = data["rates"].XRP
				var LTC = data["rates"].LTC
				var DASH = data["rates"].DASH
			

				
				$('#a').append(ABC);$('#b').append(ACP);
				$('#c').append(ACT);
				$('#d').append(AIB);$('#e').append(AST);
				$('#f').append(BAR);
				$('#g').append(BTCA);$('#h').append(ENJ);
				$('#i').append(ETT);
				$('#j').append(KIN);
				// $('#k').append(MTL);
				// $('#l').append(MTX);
				// $('#m').append(NULS);$('#n').append(OAX);
				// $('#o').append(SALT);
				// $('#p').append(SBC);$('#q').append(ETH);
				// $('#r').append(BTC);
				// $('#s').append(acp);$('#t').append(LTC);
				// $('#u').append(DASH);
				
				

				
				// $('#getdata').text(ETH + "       " + BTC + "  "  + acp + "  " + LTC + "  " + DASH );

				// console.log(acp);console.log(btc);
			}
		})
	})
</script>

</body>
</html>
