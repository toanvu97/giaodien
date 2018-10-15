// $ajaxSetup({
// 	headers: {
// 		'XSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
// 	}
// });

$(document).ready(function(){
	var boxChat = $('.chatcontainer');
	boxChat[0].scrollTop = boxChat[0].scrollHeight;

	$('#send').click(function(){
		var msgContent = $('#textchat').val();
		$.post('chat',
		{
			msgContent: msgContent
		},
		function(data){
			$("#textchat").val("");
			$("#chatContainer").animate({"scrollTop" : $("#chatcontainer")[0].scrollHeight}, 10);
		});
	});


	$('loginBtn').click(function(){
		var user = $('#loginUser').val('');
		var content = $('#loginPassword').val('');
		if (user.length() === 0) {
			alert('Không được để chống user');
		}
		if (content.length() === 0) {
			alert('Không được để chống nội dung');
		}
		else {
			$.done(function(data){
				if(!$.trim(data)){
					$("#loginModal").modal('hide');
					lcation.reload();
				}else {
					alert(data);
				}
			})
		}
	});
});



