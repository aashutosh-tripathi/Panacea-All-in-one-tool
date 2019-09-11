<?php
$p=0;

	ini_set('max_execution_time',0);
	if(isset($_POST["mail"]))
	{
		$a=$_POST["mem0"];
		$b=$_POST["mem1"];
		$c=$_POST["mem2"];
		$output=shell_exec("python MailSender.py"." ".$a." ".$b." ".$c);
		echo $output;
	}
	if(isset($_POST["SUBMIT"]))
	{
		$a=$_POST["mem0"];
		$b=$_POST["mem1"];
		$c=$_POST["mem2"];
		
		$output=shell_exec("python Rename.py"." ".$a." ".$b." ".$c);
		echo $output;
		
	}
	if(isset($_POST["mouse"]))
	{
		$a=$_POST["mem0"];
		$o=shell_exec("python Mouse.py"." ".$a);
	}
	if(isset($_POST["pass"]))
	{
		$a=$_POST["mem0"];
		$o=shell_exec("python Strongpassword.py"." ".$a);
		if($o==1)
			echo "<script>alert('Strong password..I will reccommend it..');</script>";
		else
			echo "<script>alert('Weak password..I will not reccommend it..');</script>";
		
		
	}
	if(isset($_POST["excel"]))
	{
		extract($_POST);
		$o=shell_exec("python Excelsheet.py"." ".$mem0." ".$mem1." ".$mem2." ".$mem3." ".$mem4." ".$mem5);
		if($o==1)
			echo "<script>alert('Success');</script>";
		else
			echo "<script>alert('something went wrong');</script>";
		
	}
	
	
?>
<!doctype html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
	
		<style>
			body{
				margin: 0;
				padding: 0;
			}
			.container{
				width:100%;
				height: 100px;
				display: flex;
				background-color: #2a6584;
				justify-content: center;
				font-family: 'Gayathri', sans-serif;
			}
			.label{
				width: 500px;
				height: 100px;
				
				padding-top: 25px;
				box-sizing: border-box;
				color: white;
				
			}
			.label h1{
				margin: 0;
				font-size: 3vw;
			}
			.list{
				width: 100%;
				display: flex;
				justify-content: space-around;
				flex-wrap: wrap;
			}
			.rename{
				width: 300px;
				border: 2px solid black;
				height: 300px;
				margin-top: 10px;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.disp{
				width: 70%;
				height: 70%;
				
			}
			a{
				width: 100px;
				background-color: #4d4dde;
				height: auto;
				display: block;
				padding: 10px;
				color: white;
				border: none;
				cursor: pointer;
				text-decoration: none;
				box-sizing: border-box;
			}
			.form{
				position: fixed;
				left: 0;
				top:0;
				width: 100vw;
				height: 100vh;
				background-color: rgba(0,0,0,0.4);
				display: none;
				
				
			}
			.main{
				min-width:300px ;
				max-width: 400px;
				max-height: 400px;
				min-height: 300px;
				background-color: azure;
				margin: 50vh auto;
				transform: translate(0%,-50%);
				
			}
			#frm input{
				width: 70%;
				margin: 20px 15%;
			}
			#frm input[type="submit"]
			{
				background-color: #4d4dde;
				height: 6vh;
				border: none;
				color: white;
 
			}
			.cross{
				width: 60px;
				height: 60px;
				float: right;
				font-size: 50px;
				color: white;
				cursor: pointer;
			}
			
		</style>
	</head>
	<body>
		<div class="container">
			
				<div class="label">
					<center><h1>PANACEA</h1></center>
					<center><p style="margin:0">(All In ONE TOOL)</p></center>
				</div>
			
		</div>
		<br>
		<div class="form">
		<div class="cross" onclick="erase()">&times;</div>
			<div class="main">
				<form action="" id="frm" method="post">
					
				</form>
			</div>
		</div>
		<div class="list">
			<div class="rename">
				<div class="disp">
					<center><img src="photos/rename-folder-md.png" alt="" width="100px"></center>
					<br>
					<center><p>Rename your files in a folder</p></center>
					<br>
					<center><a href="Rename%20.py" download>Rename</a></center>
				</div>
			</div>
			<div class="rename">
				<div class="disp">
					<center><img src="photos/Download-Block-Id-Png-Image-14657-For-Designing-Projects.png" alt="" width="100px"></center>
					<br>
					<center><p>Block unwanted sites..</p></center>
					
					<center><a href="SiteBlocker.py" download>Block</a></center>
				</div>

			</div>
			<div class="rename">
				<div class="disp">
					<center><img src="photos/236988-file_move_transfer-512.png" alt="" width="100px"></center>
					
					<center><p>Move similar files to a specified destination</p></center>
					
					<center><a href="move.py" download>Move</a></center>
				</div>

			</div>
			<div class="rename">
				<div class="disp">
				<center><img src="photos/excel-png-office-xlsx-icon-3.png" alt="" width="100px"></center>
					<br>
					<center><p>Format your excel files</p></center>
					<br>
					<center><a href="Excelsheet.py" download>Select</a></center>
					
				</div>

			</div>
			<div class="rename">
				<div class="disp">
					<center><img src="recipient-512.png" alt="" width="100px"></center>
					
					<center><p>Automatic send email based on your excel sheets</p></center>
					
					<center><a href="MailSender%20(1).py" download>Select</a></center>
					
				</div>

			</div>
			<div class="rename">
				<div class="disp">
				<center><img src="photos/Callout-cursor-OS-X-El-Capitan.png" alt="" width="100px"></center>
					
					<center><p>Busy Cursor(Avoid screen sleep for a specified duration)</p></center>
					
					<center><a onclick="myfun('mouse')">Select</a></center>
					
				</div>

			</div>
			<div class="rename">
				<div class="disp">
				<center><img src="photos/download.png" alt="" width="100px"></center>
					
					<center><p>Check your password whether it is strong or not.</p></center>
					
					<center><a onclick="myfun('pass')">Select</a></center>
					
				</div>

			</div>
			<div class="rename">
				<div class="disp">
					<center><img src="photos/com.squirrel.messageblast.png" alt="" width="100px"></center>
					
					<center><p>Send messages on various numbers on a single click.</p></center>
					
					<center><a href="MessageSender.py" download>Send Message</a></center>
					
					
				</div>

			</div>
		</div>
		<br><br>
		<div class="container">
				<div class="label">
					<center><h1>Thank you</h1></center>
				</div>
			</div>
			
		<script>
			function myfun(g)
			{
				mail=["Enter sender Id","Enter Password","Enter reciever id"];
				re=["Enter New Name of file","Enter Path","Enter Extension with (.)"];
				excel=["Enter file loaction","Enter sheet num","Enter product col no.","Enter column number in which has to be made","Enter product name","Enter new value"];
				j=0;
				if(g=="pass")
					num=1;
				if(g=="rename")
					num=3;
				if(g=="mail")
					num=3;
				if(g=="mouse")
					num=1;
				if(g=="excel")
					num=6;
				var a=document.getElementById("frm");
				while(a.hasChildNodes())
					a.removeChild(a.lastChild);
					for(i=0;i<num;i++)
					{
						var m=document.createElement("input");
						m.type="text";
						m.name="mem"+j;
						if(g=="excel")
							m.placeholder=excel[i];
						if(g=="mail")
							m.placeholder=mail[i];
						if(g=="rename")
							m.placeholder=re[i];
						if(g=="mouse")
							m.placeholder="Enter duration in minutes";
						if(g=="pass")
							m.placeholder="Enter Your Password";
						a.appendChild(m);
						a.appendChild(document.createElement("br"));
						j++;
					}
				var m=document.createElement("input");
				m.type="submit";
				if(g=="mail")
					m.name="mail";
				if(g=="rename")
					m.name="SUBMIT";
				if(g=="mouse")
					m.name="mouse";
				if(g=="pass")
					m.name="pass";
				if(g=="excel")
					m.name="excel";
				a.appendChild(m);
			 document.getElementsByClassName("form")[0].style.display="block";
				
			}
			function erase()
			{
			document.getElementsByClassName("form")[0].style.display="none";	
			}
		</script>
	</body>
	
</html