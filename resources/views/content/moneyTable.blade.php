
    @extends('layouts.app')
    @section('content')
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header border-0">
          <h3 class="mb-0">Introduceti date</h3>
        </div>
        <form action="{{route('adder')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-3 p-4">
              <input type="text" class="form-control form-control-alternative" placeholder="Detalii plata" name="details">
            </div>
            <div class="col-md-3 p-4">
              <input type="text" class="form-control form-control-alternative" placeholder="Suma" name="amount">
            </div>
            <div class="col-md-3 p-4">
              <select name="status_id" class="form-control">
                <option value="1">Astept Restituire</option>
                <option value="2">Incasat</option>
                <option value="3">Platit</option>
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
                <th scope="col" class="sort" data-sort="name">ID</th>
                <th scope="col" class="sort" data-sort="name">Detalii</th>
                <th scope="col" class="sort" data-sort="budget">Suma</th>
                <th scope="col" class="sort" data-sort="status">Status</th>
                <th scope="col" class="sort" data-sort="completion">Actiuni</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
              @foreach ($data as $money)
              <tr>
                <td>
                  {{$money->id}}
                </td>
                <td class="details">
                    {{$money->details}}
                </td>
                <td class="budget">
                  {{$money->amount}}
                </td>
                <td>
                  {{$money->status->name}}
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
    