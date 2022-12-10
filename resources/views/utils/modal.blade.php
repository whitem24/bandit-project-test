<!-- Modal -->
<div id="myModal{{$item->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detalle</h4>
        </div>
        <div class="modal-body">
            <ul class="list-group">
                <li class="list-group-item">Nombre: <span class="text-info">{{$item->title}}</span></li>
                <li class="list-group-item">Descripción: <span class="text-info">{{$item->description}}</span></li>
                <li class="list-group-item">Fecha: <span class="text-info">{{$date}}</span></li>
                <li class="list-group-item">Personas: <span class="text-info">{{$people}}</span></li>
                <li class="list-group-item">Precio Total: <span class="text-info">{{$price}}</span></li>
                <li class="list-group-item">Actividades relacionadas: 
                    @if (count($item->related_activities)>0)
                        <ul class="list-group">
                            @foreach ($item->related_activities as $activity)
                                <li class="list-group-item">Nombre: <span class="text-info">{{$activity->title}}</span></li>
                            @endforeach
                        </ul>
                    @else
                        <span class="text-info">N/A</span>
                    @endif
                </li>
                <form action="{{ route('activities.buy') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="activity_id" class="form-control" value="{{$item->id}}">
                    <input type="hidden" name="total" class="form-control" value="{{$price}}">
                    <input type="hidden" name="people" class="form-control" value="{{$people}}">
                    <input type="hidden" name="date" class="form-control" value="{{$date}}">
                    <li class="list-group-item"><div class="d-flex justify-content-center"><button class="btn btn-info" type="submit">Comprar</button></div></li>
                </form>
                
              </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
  
    </div>
  </div>