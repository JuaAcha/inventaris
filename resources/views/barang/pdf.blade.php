<table border="1">


    <tr>
        <td>Kode</td>
        <td>
            <img src="data:image/png;base64, . DNS1D::getBarcodeSVG('4445645656', 'C39')" alt="">
            {{$barang->kode}}
        </td>
    </tr>

    <tr>
        <td>Nama Barang</td>
        <td>
            {{$barang->nama}}
        </td>
    </tr>

    <tr>
        <td>Tempat</td>
        <td>
            {{$barang->tempat->nama}}
        </td>
    </tr>

    <tr>
        <td>Stok</td>
        <td>
            {{$barang->stok}}
        </td>
    </tr>

    <tr>
        <td>Keterangan</td>
        <td>
            {{$barang->keterangan}}
        </td>
    </tr>
</table>