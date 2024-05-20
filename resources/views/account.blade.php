<x-layouts>
    <h2>Data Students</h2>
    <hr>
    @if (session('success'))
      <div class="alert alert-primary">
          {{ session('success') }}
      </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif
    <div class="row d-flex justify-content-center mb-2">
      @foreach ($students as $student)
        <div class="col-md-5 mt-2">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">{{ $student['name'] }}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{ $student['email'] }}</h6>
              
              <div class="collapse mb-3" id="collapse-{{ $student['id'] }}">
                <div class="card card-body">
                    {{-- form Input --}}
                    <form action="{{ url('/account/'.$student['id']) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="exampleInputName" class="form-label">Name</label>
                              <input type="text" class="form-control" name="name" id="exampleInputName" value="{{ $student->name }}">
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="exampleInputTelp" class="form-label">No. Telp</label>
                              <input type="text" class="form-control" name="telp" id="exampleInputTelp" value="{{ $student['telp'] }}">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="exampleInputAddress" class="form-label">Address</label>
                              <input type="text" class="form-control" name="address" id="exampleInputAddress" value="{{ $student['address'] }}">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ $student['email'] }}">
                          </div>
                      </div>
                      <div class="col">
                          <div class="mb-3">
                              <label for="exampleInputPassword" class="form-label">Password</label>
                              <input type="password" class="form-control" name="password" id="exampleInputPassword">
                          </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Change</button>
                    </form>
                    {{-- Akhir Form Input --}}
                </div>
              </div>
              
              <div class="d-flex">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $student['id'] }}" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-pencil-fill"></i></button>
                <form action="{{ route('account.delete', ['id'=>$student['id']]) }}" method="POST" onsubmit="return confirm('Sure Delete Data?')">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger ms-2"><i class="bi bi-trash-fill"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    
    {{ $students->links() }}
    
</x-layouts>