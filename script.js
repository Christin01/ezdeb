let selectMenu = document.querySelector("#products");
let category = document.querySelector(".right h4");
let container = document.querySelector(".product-wrapper");

selectMenu.addEventListener("change", function(){
	let categoryName = this.value;
	category.innerHTML = this[this.selectedIndex].text;  

	let http = new XMLHttpRequest();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			let response = JSON.parse(this.responseText);
			// let response = this.responseText;
			let out = "";
			for(let item of response){
				out += `
					

					<div class="container">
					<div class="card my-3">
						<div class="row no-gutters">
							<div class="col-md-12">
								<div class="card-body">
									<h5 class="card-title">
									${item.name}   <span class="badge badge-primary">New</span></h5>
									<p class="card-text">
										<span class="badge badge-pill badge-success"> <i class="fa fa-television"></i> 
										${item.category}    </span>
										<span class="badge badge-pill bs-color"> <i class="fa fa-tags"></i> ${item.developer}</span>
									</p>
									<p class="card-text">
									
									</p>
									<div class="mb-3">
										<p class="card-text " style="color:black">
											${item.description}
										</p>
									</div>

	
		
								<div  style=" background-color: #ffffff;padding: 9px;border-radius: 10px; margin: 12px 0;">  
								<input style="font-size: 14px; padding: 2px; border-radius: 5px; border: 1px solid #000000;"   
									 type="text" onKeyDown="return false" autocomplete="off" id="${item.id}" value="${item.command}" />
									 <button style="font-size: 14px;padding: 4px 14px;background-color: #577eff;color: #ffffff;border: none;
									border-radius: 5px;margin-left: 3px;" onclick="copy('${item.id}')"> <i class="bi bi-clipboard"></i> </button>
							   </div>
							  
		<br>
									<form action="single-post.php" method="get">
									<button  style="width: 130px;" name="id" class="btn btn-primary btn-block "  value="${item.id}" >
										<i class="fa fa-newspaper-o pr-2"></i> Read more
									</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				`;
			}
			container.innerHTML = out;
		};
	}	
	http.open('POST', "script.php", true);
	http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
	http.send("category="+categoryName);
}
);


