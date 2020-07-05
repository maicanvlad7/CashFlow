
    @extends('layouts.app')
    @section('content')
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <h3 class="mb-0">Introduceti date</h3>
        </div>
        <form action="{{route('projects_adder')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-3 p-4">
              <input type="text" class="form-control form-control-alternative" placeholder="Nume proiect" name="name">
            </div>
            <div class="col-md-3 p-4">
              <input type="text" class="form-control form-control-alternative" placeholder="Detalii proiect" name="description">
            </div>
            <div class="col-md-3 p-4">
              <select name="status" class="form-control">
                <option value="ONGOING">In progres</option>
                <option value="TERMINAT">Terminat</option>
              </select>
            </div>
            <div class="col-md-3 p-4">
              <button class="btn btn-info" type="submit" value="submit">Adauga</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Light table</h3>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="id">ID</th>
                <th scope="col" class="sort" data-sort="name">Nume</th>
                <th scope="col" class="sort" data-sort="description">Detalii</th>
                <th scope="col" class="sort" data-sort="status">Status</th>
                <th scope="col" class="sort" data-sort="completion">Actiuni</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
              @isset($data)
                @foreach ($data as $proj)
                <tr>
                  <td>
                    {{$proj->id}}
                  </td>
                  <td class="details">
                      {{$proj->name}}
                  </td>
                  <td class="budget">
                    {{$proj->description}}
                  </td>
                <td class="{{$proj->status == 'ONGOING' ? 'text-success' : 'text-danger'}}">
                    {{$proj->status}}
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="">Sterge</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              @endisset
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item">{{$data->links()}}</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
 
    @endsection
    