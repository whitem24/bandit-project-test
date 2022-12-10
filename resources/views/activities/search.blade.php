<div class="card-body">
    <form action="{{ route('activities.search') }}" method="GET">
        @csrf
        @method('GET')
        {{-- <h5 class="text-center mt-3 mb-3 fw-bold">Pagando</h5> --}}
        <h5 class="text-center">Fecha y personas</h5>
        <div class="input-group"> 
            
            <div class="input-group-prepend">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
            <input type="date" name="date" class="form-control @error('date') is-invalid @enderror">
                       
            <input type="number" class="form-control @error('people') is-invalid @enderror" name="people" placeholder="0">
            
        </div>
        @error('date')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
        @error('people')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
        {{-- <div class="mt-3">
            <h5 class="text-center">Personas</h5>
            <input type="number" class="form-control @error('people') is-invalid @enderror" name="people" id="exampleFormControlInput1" placeholder="0">
            @error('people')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div> --}}
    </form>
</div>