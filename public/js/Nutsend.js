$('.select').click(function(){
	var ID = $(this).attr('id');
	if (ID == 0 ) {
		
	}
	else if () {}
});
$(document).ready(function(){
	var timer = setInterval(function(){
			$("#chatcontainer").load('ajax.php');
			$("#scrolls").load('get.php');
			var classer = $("#chatcontainer").attr('Class');
			if (typeof classer == "undefined") {
		        $("#chatContainer").animate({"scrollTop" : $("#chatcontainer")[0].scrollHeight}, 10);
			}
			if (classer == 'top') {
				if ($("#scrolls").text() != "") {
				    $("#scrolls").slideDown();
				}
			} else {
		        $("#scrolls").slideUp();
		        $("#chatcontainer").animate({"scrollTop" : $("#chatcontainer")[0].scrollHeight}, 10);
			}
		}, 500);
$("#chatcontainer").scroll(function() {
			var height = $(this).height();
			var all = $(this)[0].scrollHeight;
			var top = $(this).scrollTop();
			var get = all - height;
			var divise = all / 16;
			if (top <= get - divise) {
				$("#chatcontainer").removeClass('bottom').addClass('top');
			} else {
				$("#chatcontainer").addClass('bottom').removeClass('top');
			}
		});

//bắt sự kiện enter là gửi
$("textchat").keydown(function(e){
	var chat = $(this).val();
	if(e.keyCode == 13 && chat != ""){
		$post("ajax.php",(chat: chat),function(){
			$("#textchat").val("");
			$("#chatcontainer").animate({"scrollTop" : $("#chatcontainer")[0].scrollHeight},10);
		});
	}
});
});

//hàm gửi cho nút button
function send(){
	var chat = $("#textchat").val();
	$post("ajax.php",{chat: chat},function(){\
		$("#textchat").val("");
		$("#chatcontainer").animate({"scrollTop" : $("#chatcontainer")[0].srollHeight},10)
	})
}