<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama Pemain</th>
            <th>No Punggung</th>
            <th>Posisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pemains as $pemain)
        <tr>
            <td>{{$pemain -> id}}</td>
            <td>{{$pemain -> nama_pemain}}</td>
            <td>{{$pemain -> no_punggung}}</td>
            <td>{{$pemain -> posisi}}</td>
            <td class="d-flex flex-row gap-1">
                <form class="" action="" method="post">
                    @csrf
                    <button class="btn btn-danger"
                        onclick="return confirm('yakin mau dihapus?')">Hapus</button>
                </form>
                <form action="" method="post">
                    @csrf
                    <button class="btn btn-primary icon-pencil">Edit</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>