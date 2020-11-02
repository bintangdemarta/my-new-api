<!DOCTYPE html>
<html lang="en">
<div class="container">
<head class="mt-3">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div class="container">
</head>

<body>
        <?php
        $data = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
        

        $provinsi = json_decode($data, true);
       
        ?>
        <h1 class="text-center"> -- INDEX COVID-19 DI INDONESIA --</h1>
        <div class="card">
          <div class="card-body">
            <p class="text-center font-weight-bold">jumlah yang terpapar saat Ini</p>
             <p class="text-center font-weight-bold">100.000 orang</p>
          </div>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <th>NO</th>
                <th>Nama Provinsi</th>
                <th>Jumlah Positif</th>
                <th>Jumlah Sembuh</th>
                <th>Jumlah Meninggal</th>
            </thead>
            <tbody>
                
                <?php
                $a = 1;
                foreach ($provinsi as $prv) :
                ?>
                    <tr>
                        <td><?= $a++ ?></td>
                        <td><?= $prv['attributes']['Provinsi']; ?></td>
                        <td><?= $prv['attributes']['Kasus_Posi']; ?></td>
                        <td><?= $prv['attributes']['Kasus_Semb']; ?></td>
                        <td><?= $prv['attributes']['Kasus_Meni']; ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>