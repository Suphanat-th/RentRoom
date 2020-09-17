<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Code Igniter Test</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	.main_body{
		text-align:center;
	}
	.data_form{
		width:100%;
	}
	.talbe{
		width:100%;
		align:center;
	}table { border-collapse: collapse; border-spacing: 0; }
	#keywords {
  margin: 0 auto;
  font-size: 1.2em;
  margin-bottom: 15px;
}


#keywords thead {
  cursor: pointer;
  background: #c9dff0;
}
#keywords thead tr th { 
  font-weight: bold;
  padding: 12px 30px;
  padding-left: 42px;
}
#keywords thead tr th span { 
  padding-right: 20px;
  background-repeat: no-repeat;
  background-position: 100% 100%;
}

#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
  background: #acc8dd;
}

#keywords thead tr th.headerSortUp span {
  background-image: url('https://i.imgur.com/SP99ZPJ.png');
}
#keywords thead tr th.headerSortDown span {
  background-image: url('https://i.imgur.com/RkA9MBo.png');
}


#keywords tbody tr { 
  color: #555;
}
#keywords tbody tr td {
  text-align: center;
  padding: 15px 10px;
}
#keywords tbody tr td.lalign {
  text-align: left;
}

.button {
    font-family: "Helvetica Neue", HelveticaNeue, Helvetica, Arial, sans-serif;
    font-weight: bold;
    font-size: 12px;
    padding: 9px 25px;
    text-decoration: none;
    margin: 10px;
    display: inline-block;
    border-radius: 3px;
    
    box-shadow:inset 0 1px 1px rgba(255, 255, 255, 0.4);
    -webkit-box-shadow:inset 0 1px 1px rgba(255, 255, 255, 0.4);
    -moz-box-shadow:inset 0 1px 1px rgba(255, 255, 255, 0.4);
   transition:opacity .3s;
}
.button:hover{

opacity:.9;
}
.green {
 color: #4f810e;
 text-shadow: 1px 1px rgba(255, 255, 255, .4);
 border: 1px solid #90b337;
 background: #cce467;
 background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(207,230,107)), color-stop(1, rgb(173,212,63)));
 background-image: -webkit-linear-gradient(top, rgb(207,230,107), rgb(173,212,63));  
 background-image: -moz-linear-gradient(top, rgb(207,230,107), rgb(173,212,63));
 background-image: -ms-linear-gradient(top, rgb(207,230,107), rgb(173,212,63));
 background-image: -o-linear-gradient(top, rgb(207,230,107), rgb(173,212,63));
 background-image: linear-gradient(top, rgb(207,230,107), rgb(173,212,63));
}
.red {
 color: #fff;
 text-shadow: 1px 1px rgba(0, 0, 0, .4);;
 border: 1px solid #db5343;
 background: #e86556;
 background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(238,128,109)), color-stop(1, rgb(226,73,62)));
 background-image: -webkit-linear-gradient(top, rgb(238,128,109), rgb(226,73,62));
 background-image: -moz-linear-gradient(top, rgb(238,128,109), rgb(226,73,62));
 background-image: -ms-linear-gradient(top, rgb(238,128,109), rgb(226,73,62));
 background-image: -o-linear-gradient(top, rgb(238,128,109), rgb(226,73,62)); 
 background-image: linear-gradient(top, rgb(238,128,109), rgb(226,73,62));
}
.yellow {
 color: white;
 text-shadow: 1px 1px rgba(0, 0, 0, .4);
 border: 1px solid #c68900;
 background: #4ba6d5;
 background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgb(103,199,229)), color-stop(1, rgb(47,133,197)));
 background-image: -webkit-linear-gradient(top, #ffc750, #eca505);
 background-image: -moz-linear-gradient(top, #ffc750, #eca505)); 
 background-image: -ms-linear-gradient(top, #ffc750, #eca505)); 
 background-image: -o-linear-gradient(top, #ffc750, #eca505)); 
 background-image: linear-gradient(top, #ffc750, #eca505);  
}
.search{
	padding-right:200px;
	padding-bottom:30px;
}
	</style>
</head>
<body>

<div id="container">
	<h1 align="center">บันทึกห้อง</h1>
	<div id="body" class="row">
		<div class="main_body">
			<form id="Send_Data" action="<?php echo base_url('C_RoomInsert/InsertRoom'); ?>"  method="post" enctype="multipart/form-data">
				<div class="data_form col-sm-12">
					<label >ไอดีห้อง</label>
					<input type="number"   placeholder="123" id="room_id" name="room_id" width="100%">
                </div>
				<div class="data_form col-sm-12">
					<label>ชื่อห้อง</label>
					<input type="text" class="form-control form-control-user" placeholder="ABC123" id="room_name" name="room_name">
				</div>
				<div class="data_form col-sm-12">
					<button type="submit" id="btn_save" class="button green">บันทึกข้อมูล</button>
                </div>
			</form>
		<div>
	</div> 
	<div id="wrapper">
			<table id="keywords">
			<thead>
				<tr>
					<th>ลำดับ</th>
					<th>รหัสห้อง</th>
					<th>ชื่อห้อง</th>
				</tr>
			</thead>
			<tbody style="text-align:center" id="body_append">

			</tbody>
			</table>
		</div>
</div>



<div id="">
	<h1 align="center">แสดงข้อมูล</h1>
	<div id="body" class="row">
		<div class="main_body">
				<div class="data_form col-sm-12">
					<div class="col-sm-12" id="SelectRoom">
						
					</div>
                </div>
				<div class="data_form col-sm-12">
					<label>เวลา</label>
					<input id="datepicker"/>
				</div>
				<div class="data_form col-sm-12">
					<button type="submit" onclick="Show_Room_API()" class="button green">แสดงข้อมูล</button>
                </div>

		<div>
	</div> 
	<div id="wrapper">
			<table id="keywords">
			<thead>
				<tr>
					<th>วันที่</th>
					<th>ราคา</th>
					<th>ห้องที่เหลือ</th>
				</tr>
			</thead>
			<tbody style="text-align:center" id="API_Room">

			</tbody>
			</table>
		</div>
</div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script>
// echo '<pre>';
// print_r();
// echo '</pre>';
	$( document ).ready(function() {
		Show();
	});

	$('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
	function Show(){
		$.ajax({
			url: "<?php echo base_url('C_RoomInsert/Show')?>",
			type: "GET",
   			dataType: 'json',
			success: function(res){
				console.log(res);
				var i=0,index=1;
				var  Datatable;
					
						SelectedRoom = "<div class='form-group'>";
						SelectedRoom += "<label for='sel1'>ไอดีห้อง</label>";
						SelectedRoom += "<select class='form-control' id='sel1'>";
						SelectedRoom += "<option value='NULL'>SELECT ROOM </option>";
						
				if(res.length == 0){
					Datatable += "<tr>";
					Datatable += "<td colspan='6'>NOT DATA</td>";
					Datatable += "</tr>";
				}else{
					for(i=0;i<res.length;i++){
						Datatable += "<tr>";
						Datatable += "<td>"+index+"</td>";
						Datatable += "<td>"+res[i].Room_type_id+"</td>";
						Datatable += "<td>"+res[i].Room_type_name+"</td>";
						Datatable += "</tr>";

						SelectedRoom += "<option value='"+res[i].Room_type_id+"'>"+res[i].Room_type_name+"</option>";
						index++;		
					}
					SelectedRoom += "</select>";
					SelectedRoom += "</div>";

					}
				$("#body_append").empty();
				$("#body_append").append(Datatable);


				$("#SelectRoom").empty();
				$("#SelectRoom").append(SelectedRoom);
			}
		});
	}
	function Show_Room_API(){
		$room_id = $("#sel1").val();
		$date = $("#datepicker").val();
		$d = $date.substring(3, 5);
		$m = $date.substring(0, 2);
		$y = $date.substring(6, 10);
		$date_api = $y+"-"+$m+"-"+$d;

		if($room_id == "NULL"){
			$("#sel1").css("border", "3px solid #FF3636");
		}else if($date == ''){
			$("#datepicker").css("border", "3px solid #FF3636");
		}else{
				$.ajax({
					async: false,
					url: "http://34.87.142.215/aspire-project/public/booking-box/api-test",
					type: "POST",
					cache: false,
					dataType: 'json',
					data:{date : $date_api,room_type_id : $room_id},
					success: function(res){
							APIRoom = "<tr>";
							APIRoom += "<td>"+res.date+"</td>";
							APIRoom += "<td>"+res.price+"</td>";
							APIRoom += "<td>"+res.room_left+"</td>";
							APIRoom += "</tr>";	

						$("#API_Room").empty();
						$("#API_Room").append(APIRoom);
					},
					error: function(err){
						alert(err.responseJSON.message)

						
						APIRoom = "<tr>";
						APIRoom += "<td colspan='3'>"+err.responseJSON.message+"</td>";
						APIRoom += "</tr>";	
							
						$("#API_Room").empty();
						$("#API_Room").append(APIRoom);
						
					}
				});
		}
	}
</script>
