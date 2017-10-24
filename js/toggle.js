	$(document).ready(function() {
		$(".warna").click(function() {
			$(".box").toggleClass("add_warna");
            $(".box1").toggleClass("add_warna1");
			$(".latar").toggleClass("add_latar");
            $(".latar1").toggleClass("add_latar1");
		});
		$(".size").click(function() {
			$(".besar").toggleClass("add_size");
		});
	});
