<x-layouts>
    <h2>Data Students</h2>
    <hr>
    
    <table class="table table-striped table-hover">
        <thead>
          <tr class="table-primary">
            <th scope="col">Name</th>
            <th scope="col">No. Telp</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)  
                <tr>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['telp'] }}</td>
                    <td>{{ $student['address'] }}</td>
                    <td>{{ $student['email'] }}</td>
                </tr>
            @endforeach

        </tbody>
      </table>

    
</x-layouts>