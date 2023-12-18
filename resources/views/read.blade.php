<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<hr/>

<center>

  @if (session('pesan'))
    <div class="alert alert-success">
      {{session('pesan')}}
    </div>
  @endif

  <h2>TABEL MAHASISWA</h2>

  <hr/>

  <section>

    <!--Table-->
    <table class="table table-stripped w-auto">

      <!--Table Head-->
      <thead class="thead-dark">
        <tr>
          <th>NO</th>
          <th>NIM</th>
          <th>NAMA</th>
          <th>ALAMAT</th>

          <th>UMUR</th>
          <th>KOTA</th>
          <th>KELAS</th>
          <th>JURUSAN</th>

          <th>CREATED AT</th>
          <th>UPDATED AT</th>
          <th>ACTION</th>
        </tr>
      </thead>

      <!--Table Body-->
      <tbody>

        <?php
          $num = 1;
          foreach ($dataAll as $datax) {
            if (($num % 2) == 1) {
              echo "<tr class='table-info'>";
            } else {
              echo "<tr>";
            }

            echo "<th scope='row'> $num </th>";
            echo "<td>" . $datax->nim . "</td>";

            echo "<td>" . $datax->nama . "</td>";

            echo "<td>" . $datax->alamat . "</td>";

            echo "<td>" . $datax->umur . "</td>";
            echo "<td>" . $datax->kota . "</td>";
            echo "<td>" . $datax->kelas . "</td>";
            echo "<td>" . $datax->jurusan . "</td>";

            echo "<td>" . $datax->created_at . "</td>";

            echo "<td>" . $datax->updated_at . "</td>";

            // tombol action
            echo '<td>';
            echo "<a href='/delete/" . $datax->nim ."' onclick=\"return confirm('Hapus data?');\" class='btn btn-danger'>Hapus</a>";
            echo "<a href='/update/" . $datax->nim ."' onclick=\"return confirm('Update data?');\" class='btn btn-success'>Update</a>";
            echo '</td>';

            echo '</tr>';
            $num++;
          }
        ?>

      </tbody>

    </table>

  </section>

  <a href="/create" class='btn btn-success'>Tambah Data</a>

</center>

<hr/>
