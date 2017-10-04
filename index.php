<!DOCTYPE html>
<html>
<head>
	<title>My Use Case Test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="resource/cordis-layout/css/cordis.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> 
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="logo">
						<a href="javascript:void(0);">Santhosh Technology</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="userData">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="user_info">
						<div class="row">
							<div class="col-md-offset-9 col-md-3">
								<div class="form-group serch_data">
									<input type="text" class="form-control search" placeholder="Search Here">
								</div>
							</div>
						</div>
						<div class="table-responsive">
							<table id="table" class="table">
								<thead>
									<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Contact Number</th>
										<th>Contact Mail</th>
										<th>Edit User</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
						<div class="user_custom">
							<div class="tab_cont">
								<div class="tab_info">
									<div class="row">
										<div class="col-md-6">
											<form id="add_user" class="custom_form" method="post">
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<button type="button" class="special_add">Add Contact</button>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label for="fname">First Name</label>
															<input type="text" name="fname" class="form-control fname">
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label for="lname">Last Name</label>
															<input type="text" name="lname" class="form-control lname">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label for="cnum">Contact Number</label>
															<input type="text" name="cnum" class="form-control cnum">
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label for="cmail">Contact Mail</label>
															<input type="text" name="cmail" class="form-control cmail">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div>
															<button type="submit" class="btn_submit bold">Add User+</button>
														</div>
													</div>
												</div>
											</form>
										</div>
										<div class="col-md-6">
											<form id="update_user" class="custom_form">
												<div class="row">
													<div class="col-md-4">
														<div class="form-group">
															<button type="button" class="special_add">Update Contact</button>
														</div>
													</div>
												</div>
												<input type="hidden" name="uid" class="uid">
												<div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label for="fname">First Name</label>
															<input type="text" name="fname" class="form-control ufname">
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label for="lname">Last Name</label>
															<input type="text" name="lname" class="form-control ulname">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label for="cnum">Contact Number</label>
															<input type="text" name="cnum" class="form-control ucnum">
														</div>
													</div>
													<div class="col-md-6 col-sm-6 col-xs-12">
														<div class="form-group">
															<label for="cmail">Contact Mail</label>
															<input type="text" name="cmail" class="form-control ucmail">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div>
															<button type="submit" class="btn_submit bold">Update User</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="foot_place">
						<p>&copy; All Rights 2017 <a href="javascript:void(0);">Santhosh Technology</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		var data = [
			{
			"firstName": "Joe",
			"lastName": "Perry",
			"contactNumber": "4448881223",
			"contactEmail": "joe@cordis.us"
			},
			{
			"firstName": "Kate",
			"lastName": "Will",
			"contactNumber": "2448381213",
			"contactEmail": "kate@cordis.us"
			},
			{
			"firstName": "Harry",
			"lastName": "Robert",
			"contactNumber": "7441381292",
			"contactEmail": "harry@cordis.us"
			},
			{
			"firstName": "Tom",
			"lastName": "Bill",
			"contactNumber": "2411881191",
			"contactEmail": "tom@cordis.us"
			},
			{
			"firstName": "Roger",
			"lastName": "Steel",
			"contactNumber": "1111771231",
			"contactEmail": "roger@cordis.us"
			}
		];
		for ( var i=0; i < data.length; i++) {
			$("#table tbody").append("<tr id='"+i+"'><td class='firstname'>"+data[i]['firstName']+"</td><td class='lastname'>"+data[i]['lastName']+"</td><td class='phone' data-id='"+i+"'>"+data[i]['contactNumber']+"</td><td class='email' data-id='"+i+"'>"+data[i]['contactEmail']+"</td><td><i class='fa fa-pencil-square-o edit_user' data-id="+i+" aria-hidden='true'></i></td></tr>");
		}

		$('.search').on('keyup',function(){
			var filter = $(this).val();
			$.each(data, function(i, v) {
		        if (v.firstName.search(new RegExp(filter, "i")) < 0  && v.lastName.search(new RegExp(filter, "i")) < 0 && v.contactNumber.search(new RegExp(filter, "i")) < 0 && v.contactEmail.search(new RegExp(filter, "i")) < 0  ) {
		            $('table #'+i).addClass('hide');
		        } else{
		        	$('table #'+i).removeClass('hide');
		        }
    		});
		});

		$("#add_user").submit(function(event){
			event.preventDefault();
			if($('.fname').val() == ''){
	            $(".fname").focus().attr("placeholder","Enter First Name").val('');
	            return false;
            }
            var nameFormat = /^[a-zA-Z\s]+$/;
            if(!nameFormat.test($('.fname').val())){
	            $(".fname").focus().attr("placeholder","Enter Only Alphabets").val('');
	            return false;
            }
            if($('.lname').val() == ''){
	            $(".lname").focus().attr("placeholder","Enter Last Name").val('');
	            return false;
            }
            var nameFormat = /^[a-zA-Z\s]+$/;
            if(!nameFormat.test($('.lname').val())){
	            $(".lname").focus().attr("placeholder","Enter Only Alphabets").val('');
	            return false;
            }
            if($('.cnum').val() == ''){
                $(".cnum").focus().attr("placeholder","Enter Phone Number").val('');
	            return false;
            }
            var phoneFormat = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            if(!phoneFormat.test($('.cnum').val())){
            	$(".cnum").focus().attr("placeholder","Enter 10 Digits").val('');
                return false;
            }
            var phoneExist = 0;
            $('.phone').each(function(){ 
            	 if($(this).html() == $('.cnum').val() ){
            	 	phoneExist = 1;
            	 }
            });
            if(phoneExist == 1){
            	$('.cnum').focus().attr("placeholder","Phone Number Exist").val('');
            	return false;
            }
            if($('.cmail').val() == ''){
                $(".cmail").focus().attr("placeholder","Enter Email").val('');
                return false;
            }
            var emailFormat = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if(!emailFormat.test($('.cmail').val())){
                $('.cmail').focus().attr("placeholder","Enter Valid Email Id").val('');
                return false;
            }
            var emailExist = 0;
            $('.email').each(function(){ 
            	 if($(this).html() == $('.cmail').val() ){
            	 	emailExist = 1;
            	 }
            });
            if(emailExist == 1){
            	$('.cmail').focus().attr("placeholder","Email Exist").val('');
            	return false;
            }
	        var arr = { 
	        	firstName: $(".fname").val(),
	        	lastName: $(".lname").val(),
	        	contactNumber: $(".cnum").val(),
	        	contactEmail:$(".cmail").val()
	        }
	        data.push(arr); 
	        var str = '<tr id="'+(data.length - 1)+'"><td class="firstname">'+arr.firstName+'</td><td class="lastname">'+arr.lastName+'</td><td class="phone">'+arr.contactNumber+'</td><td class="email">'+arr.contactEmail+'</td><td><i class="fa fa-pencil-square-o edit_user" data-id="'+i+'" aria-hidden="true"></i></td></tr>';
	        $('#table tbody').append(str);
	        $("#add_user")[0].reset();
		});

		$('#table').on('click','.edit_user',function(){
			var arr = data[$(this).attr('data-id')];
			$('.uid').val($(this).attr('data-id'));
			$('.ufname').val(arr.firstName);
			$('.ulname').val(arr.lastName);
			$('.ucnum').val(arr.contactNumber);
			$('.ucmail').val(arr.contactEmail);
		});

		$("#update_user").submit(function(event){
			event.preventDefault();
			if($('.ufname').val() == ''){
	            $(".ufname").focus().attr("placeholder","Enter First Name").val('');
	            return false;
            }
            var nameFormat = /^[a-zA-Z\s]+$/;
            if(!nameFormat.test($('.ufname').val())){
	            $(".ufname").focus().attr("placeholder","Enter Only Alphabets").val('');
	            return false;
            }
            if($('.ulname').val() == ''){
	            $(".ulname").focus().attr("placeholder","Enter Last Name").val('');
	            return false;
            }
            var nameFormat = /^[a-zA-Z\s]+$/;
            if(!nameFormat.test($('.ulname').val())){
	            $(".ulname").focus().attr("placeholder","Enter Only Alphabets").val('');
	            return false;
            }
            if($('.ucnum').val() == ''){
                $(".ucnum").focus().attr("placeholder","Enter Phone Number").val('');
	            return false;
            }
            var phoneFormat = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
            if(!phoneFormat.test($('.ucnum').val())){
            	$(".ucnum").focus().attr("placeholder","Enter 10 Digits").val('');
                return false;
            }
            var phoneExist = 0;
            $('.phone').each(function(){ 
            	 if($(this).html() == $('.ucnum').val() && $(this).attr('data-id') != $('.uid').val() ){
            	 	phoneExist = 1;
            	 }
            });
            if(phoneExist == 1){
            	$('.ucnum').focus().attr("placeholder","Phone Number Exist").val('');
            	return false;
            }
            if($('.ucmail').val() == ''){
                $(".ucmail").focus().attr("placeholder","Enter Email").val('');
                return false;
            }
            var emailFormat = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if(!emailFormat.test($('.ucmail').val())){
                $('.ucmail').focus().attr("placeholder","Enter Valid Email Id").val('');
                return false;
            }
            var emailExist = 0;
            $('.email').each(function(){ 
            	 if($(this).html() == $('.ucmail').val() && $(this).attr('data-id') != $('.uid').val() ){
            	 	emailExist = 1;
            	 }
            });
            if(emailExist == 1){
            	$('.ucmail').focus().attr("placeholder","Email Exist").val('');
            	return false;
            }
	        data[$('.uid').val()] = { 
	        	firstName: $(".ufname").val(),
	        	lastName: $(".ulname").val(),
	        	contactNumber: $(".ucnum").val(),
	        	contactEmail:$(".ucmail").val()
	        } 
	        $('#'+$('.uid').val()).children('.firstname').html($(".ufname").val());
	        $('#'+$('.uid').val()).children('.lastname').html($(".ulname").val());
	        $('#'+$('.uid').val()).children('.phone').html($(".ucnum").val());
	        $('#'+$('.uid').val()).children('.email').html($(".ucmail").val());
	        $("#update_user")[0].reset();
		});
	</script>
</body>
</html>