@if (count($data)>0)
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Actividad</th>
            <th scope="col">Total a pagar</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        
            @foreach ($data as $item)
            <tr>
                
                <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal{{$item->id}}">{{$item->title}}</button></td>
                <td>{{$item->price * $people}} $</td>
                <td>
                    @include('utils.modal', ['item' => $item, 'people' => $people, 'date' => $date, 'price' => $item->price * $people])
                    <form action="{{ route('activities.buy') }}" method="POST">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="activity_id" class="form-control" value="{{$item->id}}">
                        <input type="hidden" name="total" class="form-control" value="{{$item->price * $people}}">
                        <input type="hidden" name="people" class="form-control" value="{{$people}}">
                        <input type="hidden" name="date" class="form-control" value="{{$date}}">
                        <div class="d-flex justify-content-center"><button class="btn btn-info" type="submit">Comprar</button></div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <h5 class="step-content-lbl text-center">No se encontraron actividades disponibles.</h5>
@endif 