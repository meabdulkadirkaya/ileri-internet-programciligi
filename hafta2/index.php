<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
			
			</div>
			<div class="col-md-4">
				<form action="db.php" method="POST" name="form">
					<div class="mb-3 text-center">
						<img src="https://cdn.gelisim.edu.tr/logo/logo.png">
					</div>

					<div class="mb-3">
						<label class="form-label">Cilt No</label>
						<input type="text" class="form-control" placeholder="Cilt Numarası" name="cilt_no" require>
					</div>

					<div class="mb-3">
						<label class="form-label">Yazar Adı</label>
						<input type="text" class="form-control" placeholder="Yazar Adı" name="yazar_adi" require>
					</div>

					<div class="mb-3">
						<label class="form-label">Yayın Evi</label>
						<input type="text" class="form-control" placeholder="Yayın Evi" name="yayinevi" require>
					</div>

					<div class="mb-0">
						<button class="btn btn-primary" type="submit" name="ekle">Ekle</button>
						<button class="btn btn-primary" type="submit" name="sil">Sil</button>
						<button class="btn btn-primary" type="submit" name="guncelle">Güncelle</button>
						<button class="btn btn-primary" type="submit" name="listele">Listele</button>
					</div>
				</form>
			</div>
			<div class="col-md-4">
			
			</div>
		</div>
	</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>