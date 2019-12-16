@extends ('base')
 @section ('konten')


              <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                  <div class="card-body">
                  <div class="add-items d-flex">
                  <a href="{{route('kendaraan.create')}}" class="float-right btn btn-primary btn-sm">Tambah Data </a>
                    
                  </div>

                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th width="1"> id Kendaraan </th>
                          <th> No Polisi </th>
                          <th> Nama Kendaraan </th>
                          <th> Nama Pemilik </th>
                          <th> Jenis Kendaraan </th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($kendaraan as $value)
                        <tr>
                        <td>{{ $value->id_kendaraan}} </td>
                        <td>{{ $value->no_polisi}}</td>
                        <td>{{ $value->nama_kendaraan}}</td>
                        <td>{{ $value->nama_pemilik}}</td>
                        <td>{{ $value->jenis_kendaraan}} </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


 @endsection
