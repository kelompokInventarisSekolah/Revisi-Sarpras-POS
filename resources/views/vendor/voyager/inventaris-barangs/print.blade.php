<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report Sarana Inventaris Ruangan </title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
</style>
<body onload="window.print();">
            
   
    <table width="700px">
        <tr>
            <th colspan="8">DAFTAR INVENTARISASI SARANA PRASARANA</th>
           
        </tr>
        <tr>
            <th colspan="8">SMK TARUNA BHAKTI</th>
        </tr>
        <tr>
            <th colspan="8">TAHUN PELAJARAN 2020/2021</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @foreach ($inventaris as $item)
            
        <tr>
            <td colspan="2">Ruang </td>
            <td colspan="6">: {{$item->ruangan->nama_ruangan}}</td>
            
        </tr>
        <tr>
            <td colspan="2">Luas Ruang  </td>
            <td colspan="6">: {{$item->ruangan->luas_ruang}} </td>
        </tr>
        <tr>
            <td colspan="2">Nomor Registrasi ruang  </td>
            <td colspan="6">: {{$item->ruangan->nomor_registrasi}}</td>
        </tr>
        @endforeach
        
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <table width="700px" border="1">
    <thead>
    <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Nama Barang</th>
        <th rowspan="2">Spesifikasi</th>
        <th rowspan="2">Jumlah</th>
        <th colspan="4">Kondisi</th>
       
        
    </tr>
    <tr>
        
        <th>Baik</th>
        <th>Rusak Ringan </th>
        <th>Rusak Berat</th>
        <th>Keterangan</th>
    </tr>
</thead>
<tbody>

    
    @foreach ($inventaris as $key => $items)
        
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$items->barang->nama_barang}}</td>
        <td>{{$items->spesifikasi}}</td>
        <td align="center">{{$items->jumlah}}</td>
        @if ($items->kondisi_baik >= 1)
        <th> v </th>
        <th> </th>
        <th> </th>
        @elseif($items->kondisi_rusak_ringan >= 1)
        <th> </th>
        <th> v </th>
        <th> </th>
        @elseif($items->kondisi_rusak_berat <= 1)
        
        <th> </th>
        <th> </th>
        <th> v </th>
        @endif
        
        <td>{{$items->keterangan}}</td>
    </tr>
    @endforeach
</tbody>
</table>
<br>
<table width="700px">
    <tr>
        <td colspan="2"></td>
       
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <td ><?php  
        date_default_timezone_set("Asia/Jakarta");
        echo date("l-m-Y H:i:s"); 
        ?></td>
        
    </tr>
    <tr>
        <td colspan="2">Mengetahui</td>
       
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <td ></td>
        
    </tr>
    <tr>
        <td colspan="2">Ka.ur Tenaga Admin Sekolah</td>
       
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <td >Waka.bid SarPras</td>
        
    </tr>
    <tr>
        <th><br><br></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td colspan="2">Wahyu Maulana,S.Kom</td>
       
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <td >Siti Sundari,S.Pd</td>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <td>Menyetujui</td>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <td>Kepala SMK Taruna Bhakti</td>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <th><br><br></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <td>Ramadin Tarigan,ST</td>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
</table>
</body>
</html>