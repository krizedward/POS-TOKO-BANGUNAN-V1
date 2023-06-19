  <div class="table-header">
    Tabel Data Untuk Produk Barang Toko
  </div>
  <!-- div.table-responsive -->

  <!-- div.dataTables_borderWrap -->
  <div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Modal</th>
          <th>Satuan</th>
          <th>Tanggal</th>
          <th>Harga Toko</th>
          <th>Harga Jual Eceran</th>
          <th>Harga Lusin</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php
        $no = 1
        @endphp
        @foreach($data as $d)
        <tr>
          <td>
            {{$no++}}
          </td>
          <td>{{ $d->nama }}</td>
          <td>Rp. {{ number_format ($d->modal) }}</td>
          <td>Duz</td>
          <td>{{ $d->tanggal_masuk }}</td>
          <td>Rp. {{ number_format ($d->modal) }}</td>
          <td>Rp. {{ number_format ($d->modal) }}</td>
          <td>Rp. {{ number_format ($d->modal) }}</td>
          <!-- <td class="hidden-480">
                <span class="label label-sm label-info">Tersedia</span>
            </td> -->
          <td>
            <div class="hidden-sm hidden-xs action-buttons">
              <a href="{{ route('produk.show',[$d->id]) }}">
                <span class="label label-sm label-primary">Detail</span>
              </a>
              <a href="{{ route('produk.edit',[$d->id]) }}">
                <span class="label label-sm label-warning">Edit</span>
              </a>
              <a href="{{ route('produk.destroy',[$d->id]) }}" 
                onclick="event.preventDefault();
                document.getElementById('delete').submit(); deleteData(event)"
              >
                <span class="label label-sm label-danger">Delete</span>
              </a>
              <form id="delete" action="{{ route('produk.destroy',[$d->id]) }}"
                method="POST" style="display: none;">
                @method('DELETE')
                @csrf
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- membuat isi dari konten -->

  <script>
    function deleteData(event) {
      event.preventDefault();
      swal({
        title: "Apakah Anda yakin?",
        text: "Data yang dihapus tidak dapat dikembalikan!",
        icon: "warning",
        buttons: {
          cancel: {
            text: "Batal",
            value: false,
            visible: true,
            className: "",
            closeModal: true,
          },
          confirm: {
            text: "Hapus",
            value: true,
            visible: true,
            className: "btn-danger",
            closeModal: true
          }
        },
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
          document.getElementById('delete').submit();
        }
      });
    }
  </script>