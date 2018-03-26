<?php
	include ('db.php');
	$stmt = $conn->prepare("SELECT sport FROM user WHERE id = ?");
	$stmt->bind_param('i', $_GET['id']);
	$stmt->execute();
	$row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
	if($row['sport'] != 1){
		echo "<script>alert('Nem ezt a sportot valasztottad!'); window.location = '/web/index.html';</script>";		
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Go Pro In 30</title>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="main.css">
	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-sor" style='z-index:1'>
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.html">Go Pro In 30</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<div class="container container_hatter">

			<center><h1>Röplabda</h1></center>
			<br><h3>Üdvözöllek!</h3>

			A röplabda világa tárt karokkal vár bárkit aki szórakozni szeretne barátaival miközben az iskola hírnevéhez is hozzájárulnának. A röplabda egy hobbi szinten nem igényel túlságosan jó fizikai kondíciót, ugyanis a játék alapmozdulatainak nagyrészét akár a földről is el lehet végeyni, annak ellenére, hogy ugrásból a leg hatásosabbak, ezért szinte bárki részévé válhat az iskolacsapatnak.<br><br>

			Az elkövetkező 30 nap folyamán a röplabda világába ellátogatva minden tudnivalóra szert fogunk tenni amely egy mérkőzés győzelmének eléréséhez szükséges. Mivel a következő programnak önként vetjük alá magunkat, a saját felelőségünk, hogy a leírt gyakorlatokat lelkiismeretesen végezzük el, mivelhogy csak szorgos munka által érhetünk el eredményeket amelyek a röplabda pályán fognak a legjobban meglátszani.<br><br>

			<div class="row">
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but1" data-href = "r_1.html">1. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but2" data-href = "r_2.html">2. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin r_but" id = "r_but3" data-href = "r_3.html">3. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but4" data-href = "r_4.html">4. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but5" data-href = "r_5.html">5. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but6" data-href = "r_6.html">6. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but7" data-href = "r_7.html">7. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin r_but" id = "r_but8" data-href = "r_8.html">8. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but9" data-href = "r_9.html">9. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but10" data-href = "r_10.html">10. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but11" data-href = "r_11.html">11. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but12" data-href = "r_12.html">12. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin r_but" id = "r_but13" data-href = "r_13.html">13. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but14" data-href = "r_14.html">14. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but15" data-href = "r_15.html">15. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but16" data-href = "r_16.html">16. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but17" data-href = "r_17.html">17. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin r_but" id = "r_but18" data-href = "r_18.html">18. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but19" data-href = "r_19.html">19. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but20" data-href = "r_20.html">20. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but21" data-href = "r_21.html">21. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but22" data-href = "r_22.html">22. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin r_but" id = "r_but23" data-href = "r_23.html">23. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but24" data-href = "r_24.html">24. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but25" data-href = "r_25.html">25. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but26" data-href = "r_26.html">26. Nap</button></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but27" data-href = "r_27.html">27. Nap</button></div>
				<div class="col-sm-3 c"><button type="button" class="btn elem_margin r_but" id = "r_but28" data-href = "r_28.html">28. Nap</button></div>
				<div class="col-sm-3"></div>
				<div class="col-sm-3 b"><button type="button" class="btn elem_margin r_but" id = "r_but29" data-href = "r_29.html">29. Nap</button></div>
				<div class="col-sm-3 a"><button type="button" class="btn elem_margin r_but" id = "r_but30" data-href = "r_30.html">30. Nap</button></div>
			</div>
			<br>
			A fenti programok naponta fognak megnyílni számunkra, de amennyiben azt tapasztaljuk, hogy a napi erőfeszítés a munkánk minőségének romlását eredményezi, ajánlatos 1-2 nap szünetet tartanunk 3-4 edzésnap után.<br><br>

			Amint egy gyakorlatot elsajátítottunk nem szabad azt a háttérbe szorítanunk az edzéseink során, ugyanis a tanultak közül bármelyik taktika/technika nagy segítségünkre lehet a meccseink során. Ezen okból kifolyólag a legjobb megoldás, hogy célunknak tűzzük ki, hogy edzéseink során minden mozdulatot legalább 3 alkalommal alkalmazzunk hatásosan. Ez nem csak a technikákra való emlékezést segíti elő, hanem a technikák tökéletesítését is.<br><br>

			Amennyiben a programnak úgy szeretnénk alávetni megunkat, hogy nem mindig lessz gyakorló partnerünk, nem kell pánikba esnünk, ugyanis a gyakorlatok ugyanolyan hatékonysággal elvégezhetőek egy fal, vagy egy röplabda háló segítségével. Az eggyetlen nélkülözhetetlen eszköz a gyakorlásra egy (igazi) röplabda, amellyel a gyakorlatainkat végezzük.<br><br>

			<h3>Sok sikert kívánok az elkövetkező hetek folyamára, és ha netán a program abbahagyását fontolgatnánk, jusson eszünkbe a cél, amelyet magunknak kitűztünk!</h3><br><br><br><br>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script>
			var id = <?php echo $_GET['id']?>;
			var daysPassed = 0;
			$.ajax({
				url : 'getDaysPassed.php',
				type : 'GET',
				data:{
					id : id
				},
				success: function(s){
					daysPassed = parseInt(s) + 1;
					$(".r_but").each(function(a){
						$(this).prop('disabled', true)
						$(this).addClass('btn-warning');
					})
					for(var i = 1; i <= daysPassed; i++){
						console.log("#r_but" + String(i));
						$("#r_but" + String(i)).removeAttr('disabled');
						$("#r_but" + String(i)).removeClass('btn-warning');
						$("#r_but" + String(i)).addClass('btn-success');
					}
				},
				error : function(e){
					alert("Szerver hiba.");
					console.log("Error: " + String(e));
				}
			});
			$(".r_but").click(function(){
				if($(this).hasClass('btn-success')){
					window.location = "/web/" + $(this).data('href');
				}else{
					alert("Meg nem jutottal el eddig a napig!");
				}
			})
			
		</script>
	</body>
</html>