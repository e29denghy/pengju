(function(){
	var  index={
		init:function(){
			this.bindEvents();
			this.queryIndex(1);
		},
		bindEvents:function(){
			var  self=this;
			//点击下拉框
	    	$(".emergency").on("click","li",function(){
	    	  var  textPrice=$(this).text();
	    	  $("#condition").text(textPrice).attr("online",$(this).attr("online"))
	    	});
	    		//全选
	    	$("[name='markieren']").on("click",function(){
	    		var option = $("#dataList").find("input");
				option.prop("checked", $(this).is(":checked"))
	    	});
	    	//单选
	    	$("#dataList").on("click","input",function(){
				$("#dataList input:checked").length == $("#dataList input").length ? $("[name='markieren']").prop("checked", true) :$("[name='markieren']").prop("checked", false);
	    	});
	    	//点击操作
	    	$("#dataList").on("click",".instruct button",function(){
	    	     var   indexId = $(this).index();
	    	     var  compile = $(this).parent().attr("operID");
	    	    if(indexId == 0) {
	    	    	 location.href ="/account/edit?operator_id="+compile+"";
	    	    }  else  if(indexId == 1){
	    	        alert("还在开发中不要急")
	    	    } else {
	    	    	 $("#myModal").modal({keyboard: true});
	       	         self.compile=compile;
	    	    }
	    	});
	    	   //确认删除
	       $("#ascertain").on("click",function(){
	       	    $.ajax({
	       	    	url:"admin/data/closeAccount.html",
	       	    	type:"post",
	       	    	data:{'operator_id':self.compile},
	       	    	success:function(res){
	       	    		if(res.status == 100){
	       	    			 alert("删除成功");
	       	    			 location.reload();
	       	    		} else {
	       	    			alert(res.msg)
	       	    		}
	       	    	},
	       	    	error:function(){
	       	    		alert("数据连接失败")
	       	    	}
	       	    })
	       })
	    		// 搜索回车功能
	    	$("[name='search']").bind({
            	keydown:function(e){
				var theEvent = e || window.event;
				var code = theEvent.keyCode || theEvent.which || theEvent.charCode;
				if (code == 13) {
					$("#seek").trigger("click");
				}
			}
	       });
	       //搜索
	    	$("#seek").on("click",function(){
	    		var  datapack=$.trim($("[name='search']").val());
	    	    !!datapack ? self.huntPort(datapack) : (alert("搜索的内容不能为空！"));
	    	})
	    	//查询
	    	$("#demand").on("click",function(){
	    		var   contion =$("#condition").attr("online");
	    		self.huntPort(contion)
	    	})
		},
		 huntPort:function(datapack){
	   	  var  self=this;
	   	  $.ajax({
	   	  	url:"/admin/data/searchAccount.html",
	   	  	type:"post",
	   	  	dataType:"JSON",
	   	  	data:{'search':datapack},
	   	  	success:function(inx){
	   	  		if(inx.status == "100"){
	   	  			$("#pagination1").hide();
	   	  			self.render(inx.list);
	   	  		} else {
	   	  			alert(inx.msg)
	   	  		}
	   	  	},
	   	  	error:function(){
	   	  		alert("数据连接失败")
	   	  	}
	   	  })
	   },
		render:function(data){
			var  self=this;
			var  htmlStr="";
			for(var i=0;i<data.length;i++){
				htmlStr+="<tr><th scope='row'><input type='checkbox' name='identify' /></th>\
					  <td>"+data[i].no+"</td><td>"+data[i].name+"</td><td>"+data[i].mobile+"</td>\
					  <td>"+data[i].leader+"</td><td>"+data[i].department+"</td><td>"+data[i].role+"</td><td>\
					  <div class='btn-group instruct' role='group' aria-label='...' operID="+data[i].operator_id+" >\
					<button type='button' class='btn btn-default compile'>编辑</button><button type='button' class='btn btn-default'>重置密码</button>\
					<button type='button' class='btn btn-default delete'  url="+data[i]. cmd_url+">\
					删除</button></div></td></tr>"
			};
			$("#dataList").html(htmlStr)
		},
		queryIndex:function(pageId){
			var  self=this;
			$.ajax({
				url:"/admin/main/accountList.html",
				type:"post",
				data:{'page': pageId, 'num': 20},
				success:function(res){
					if(res.status == 100){
						var  quantity =Math.ceil(res.count/20);
						$.jqPaginator('#pagination1', {
					    totalPages:quantity, //总数量
					    visiblePages: 10,//最大显示分页数
					    currentPage:pageId,//当前分页
					    onPageChange: function (num, type) {
					    	if(type != "init"){
					    		index.queryIndex(num)
					    	}
					    }
					})
						 self.render(res.list)
					} else {
						alert(res.msg)
					}

				},
				error:function(){
					 alert("数据连接失败")
				}
			})

		}
	};
	index.init()
})()
