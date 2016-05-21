$(function(){
		



	/*function compute(){
		
		var num1 = $("#txtnum").val();
		var num2 = $("#txtnum2").val();
		var total = Number(num1)+Number(num2);
		 $("#txtnum1").val(total);

		$("#txtnum1,#txtnum,#txtnum2").change(compute);

	
	}compute();
	*/

	function fetch_data(){

		$("#emp").click(function(){
		
			$.ajax({
				//async:false,
				type: 'POST',
				url: 'empList.php',
				success: function(data){
					$("#addEmp").html(data);
				}
			});

		});
	}
	fetch_data();//return function


	
	

	function deleteRecord(){
	$(document).on("click","#btn_delete",function(){
			var id = $(this).data("id");

			$.ajax({
				url: 'delete.php',
				method: 'POST',
				data: {id:id},
				dataType:'text',
				success: function(data){
					alert(data);
					alert = function(){}
					alert(data);

					$("#addEmp").load('empList.php');
		 
				}

			});
			
		});
	}deleteRecord();


	function addemp(){
	$("#addemp").click(function(){


			$.ajax({
				//async: false,
				type: "POST",
				url: "addEmployee.php",
				success: function(data){
					$("#addEmp").html(data);
					
				}
			});
		});

	}
	addemp();

	
	//load the Salary deduction page
	
	function getSal(){
		$("#sal").click(function(){

			$.ajax({
				//async: true,
				type: "POST",
				url: "salaryDeduction.php",
				success: function(data){
					$("#addEmp").html(data);
				}
			});
		});
	}
	getSal();


	
	$("#btn_edit").click(function(){
		
		$.ajax({
			url: 'editform.php',
			type: 'POST',
			dataType: 'text',
			success: function(data){
				$("#addEmp").html(data);
			}
		});


	});
	


});

