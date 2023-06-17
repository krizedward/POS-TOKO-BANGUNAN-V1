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
            <td>Produk</td>
            <td>Rp. 0</td>
            <td>Duz</td>
            <td>23 Juni 2023</td>
            <td>Rp. {{ number_format ($d->buy_price) }}</td>
            <td>Rp. {{ number_format ($d->sell_price) }}</td>
            <td>Rp. {{ number_format ($d->sell_price) }}</td>
            <!-- <td class="hidden-480">
                <span class="label label-sm label-info">Tersedia</span>
            </td> -->
                      <td>
                          <div class="hidden-sm hidden-xs action-buttons">
                              <a href="#">
                                  <span class="label label-sm label-success">Detail</span>
                              </a>
                              <a href="#">
                                  <span class="label label-sm label-warning">Edit</span>
                              </a>
                              <a href="#"
                                  onclick="event.preventDefault();
                                      document.getElementById('delete').submit();">
                                  <span class="label label-sm label-danger">Delete</span>
                              </a>
                              <form id="delete" action="#" method="POST" style="display: none;">
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