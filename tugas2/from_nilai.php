<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Nilai Siswa</title>
  <!-- Link Bootstrap & Font Awesome (opsional) -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container mt-4">
  <h2>Form Nilai Siswa</h2>
  <hr>
  <!-- Tambahkan method dan action -->
  <form method="POST" action="proses_nilai.php">
    <div class="form-group row">
      <label class="col-4 col-form-label" for="nama">Nama Lengkap</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-card-o"></i>
            </div>
          </div> 
          <!-- Pastikan name="nama" -->
          <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label> 
      <div class="col-8">
        <!-- Pastikan name="matkul" -->
        <select id="matkul" name="matkul" class="custom-select" required>
          <option value="">-- Pilih Mata Kuliah --</option>
          <option value="UI/UX">UI/UX</option>
          <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
          <option value="Jaringan Komputer">Jaringan Komputer</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
      <div class="col-8">
        <!-- Pastikan name="uts" -->
        <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
      <div class="col-8">
        <!-- Pastikan name="uas" -->
        <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
      <div class="col-8">
        <!-- Pastikan name="tugas" -->
        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="number" class="form-control" required>
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <!-- Tombol submit dengan name="submit" -->
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>
