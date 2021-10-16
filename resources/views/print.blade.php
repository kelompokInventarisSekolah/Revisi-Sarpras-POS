
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
            <th colspan="8">Laporan Pembelian Barang Sarana Prasarana Sekolah</th>
           
        </tr>
        <tr>
            <th colspan="8">SMK TARUNA BHAKTI</th>
        </tr>
        
      
    </table>
    <table width="700px" border="1">
    <thead>
    <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">Nama Barang</th>
        <th rowspan="2">Jumlah Beli</th>
        <th rowspan="2">Harga</th>
        <th colspan="4">Waktu Pembelian</th>
       
        
    </tr>
</thead>
<tbody>

    
    <?php $no=1 ?>
    @foreach ($restock  as $item)
    <tr>

            
        <td>{{$no++}}</td>
        <td>{{$item->nama->nama_barang}}</td>
        <td>{{$item->jumlah_beli}}</td>
        <td>RP. {{ number_format($item->harga)}}</td>
        <td>{{$item->created_at}}</td>
        
        
    </tr>
    @endforeach

    
</table>
</body>
</html>