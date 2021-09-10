<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script>
$(".tab").hide();
$(".tab").first().show(800);
$(".tab-ul li").first().addClass("aktif");
$(".tab-ul li").click(function(){
	var index = $(this).index();
	$(".tab-ul li").removeClass("aktif");
	$(this).addClass("aktif");
	$(".tab").hide();
	$(".tab").eq(index).show(800);
});
</script>
</body>
</html>