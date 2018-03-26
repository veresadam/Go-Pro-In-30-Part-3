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
	<div class="container container_hatter">		
		<form action = "kerdes.php" method="GET">
				<div class="elem_margin">
					<div class="form-group">
					    <label for="fnev">Felhasználó név: </label>
					    <input type="text" class="form-control" id="fnev" size="20" placeholder="pl. Papp János">
				  	</div>
			 	</div>
				<div class="elem_margin">
					<div class="form-group">
					    <label for="fjelszo">Jelszó: </label>
					    <input type="password" class="form-control" id="fjelszo" size="20">
				  	</div>
			 	</div>
				<p class="paragraph">1. Elmondásod szerint mennyire jó a fizikai kondíciód?</p>
				<div class="radio">
			  		<label>
			    		<input type="radio" name="optionsRadios1" value="3" checked>
			    		Nagyon jó (bírom a hosszutávú szaladást akár 60 percen keresztül)
			  		</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios1" value="2" checked>
		    			Jó (bírom a hosszutávú szaladást ~30 percen keresztül)
		  			</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios1" value="1" checked>
		    			Rossz (Nem bírom a hosszutávú szaladást/erőfeszítést)
		  			</label>
				</div>

				<p class="paragraph">2. Milyen jónak tartod a reflexeidet?</p>
				<div class="radio">
			  		<label>
			    		<input type="radio" name="optionsRadios2" value="4" checked>
			    		Nagyon jó (Ahogy érzékelek egy felém közeledő labdát képes vagyok reagáni rá, még ha nem is vagyok teljesen felkészülve rá)
			  		</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios2" value="3" checked>
		    			Jó (Amennyiben teljes készenlétben vagyok képes vagyok minden felém közeledő labdára reagálni)
		  			</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios2" value="2" checked>
		    			Elfogadható (Néha csak utolsó pillanatban veszem észre a felém közeledő labdát)
		  			</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios2" value="1" checked>
		    			Rossz (Gyakran előfordul, hogy csak akkor veszem észre a labdát, amikor már hozzám ért/elment mellettem)
		  			</label>
				</div>

				<p class="paragraph">3. Mennyire jó a kézügyességed?</p>
				<div class="radio">
			  		<label>
			    		<input type="radio" name="optionsRadios3" id="optionsRadios1" value="3" checked>
			    		Nagyon jó (Teljes irányítás alatt tudom tartani a labdát amint hozzám jutott)
			  		</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios3" value="2" checked>
		    			Jó (Néha kiejtem a kezeimből a labdát amikor először hozzám jut, de ezek után képes vagyok (nagyon) jól irányítani)
		  			</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios3" value="1" checked>
		    			Rossz (Nagyon gyakran kiejtem a kezeimből a labdát)
		  			</label>
				</div>

				<p class="paragraph">4. Mennyire bírod a fájdalmat? (Mennyire folyásolja be a játékod, ha egy komolyabb ütés/egy gyors labda ér?)</p>
				<div class="radio">
			  		<label>
			    		<input type="radio" name="optionsRadios4" value="4" checked>
			    		Nagyon jól (Néhány másodpercig zavar csupán, majd folytathatom a játékot, mintha semmi sem történt volna)
			  		</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios4" value="3" checked>
		    			Jó (Tudom folytatni a játékot, de lehetséges, hogy to
		  			</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios4" value="2" checked>
		    			Elfogadható (Tudom folytatni a játékot, de drasztikusan csökken a teljesítményem)
		  			</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios4" value="1" checked>
		    			Rossz (Az első 1-2 nagyobb ütés után játékképtelenné válok)
		  			</label>
				</div>

				<p class="paragraph">5. Mennyire tartod erősnek a dominans kezed?</p>
				<div class="radio">
			  		<label>
			    		<input type="radio" name="optionsRadios5" value="3" checked>
			    		Erős (Barataim gyakran megjegyzik, hogy erősebb vagyok nálluk/ láthatóan jobban fel tudok gyorsítani egy labdat a kezeim által, mint mások)
			  		</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios5" value="2" checked>
		    			Átlagos (Nem túl látvanyosan, de kis erőfeszítés bevitelével aranylag nagy erőt képes vagyok kifejteni)
		  			</label>
				</div>
				<div class="radio">
		  			<label>
		    			<input type="radio" name="optionsRadios5" value="1" checked>
		    			Gyenge (Többször is előfordul, hogy nem tudom eljuttatni a labdát oda ahova szeretném anélkül, hogy túl sok erőt befektetnék)
		  			</label>
				</div>

				
				<button type="button" id="register" class="btn btn-primary btn-lg elem_margin">Tovább >></button>
			</form>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$("#fnev").val("<?php echo $_GET['fnev'];?>");
		$("#register").click(function(){
			if($("#fnev").val() != "" && $("#fjelszo").val() != ""){
				$.ajax({
					url: 'kerdes.php',
					type : 'POST',
					data:{
						fjelszo : $("#fjelszo").val(),
						fnev : $("#fnev").val(),
						optionsRadios1: $("input[name=optionsRadios1]:checked").val(),
						optionsRadios2: $("input[name=optionsRadios2]:checked").val(),
						optionsRadios3: $("input[name=optionsRadios3]:checked").val(),
						optionsRadios4: $("input[name=optionsRadios4]:checked").val(),
						optionsRadios5: $("input[name=optionsRadios5]:checked").val(),
					},
					success: function(e){
						e = JSON.parse(e);
						console.log(e);

						alert(e['result']);
						var id = e['id'];
						var osszeg = parseInt($("input[name=optionsRadios1]:checked").val()) + parseInt($("input[name=optionsRadios2]:checked").val()) + parseInt($("input[name=optionsRadios3]:checked").val()) +parseInt($("input[name=optionsRadios4]:checked").val()) + parseInt($("input[name=optionsRadios5]:checked").val());
						window.location = "/web/elso.php?fit="+ String(osszeg) + "&id=" + String(id);
					},
					error: function(e){
						console.log(e);
					}
				})
			}
		})
	</script>
</body>
</html>