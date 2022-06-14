@extends('main')
@section('content')
   <div class="col-md-12">
    <h2>Display Course</h2>
    <hr>
  
   <div class="col-md-12">
       <table class="table table-bordered">
           <thead>
               <tr>
                   <th>SN</th>
                   <th>Name</th>
                   <th>Price</th>
                   <th>Duration</th>
                   <th>Status</th>
                   <th>Action</th>
               </tr>
               @foreach($courseData as $key=>$item)
           
              
                <tr>
                        <td>{{++$key}}</td>
                        <td>{{$item->cname}}</td>
                        <td> {{$item->price}} </td>
                        <td>{{$item->duration}} {{$item->status}}</td>
                      <td>
                        @if($item->Status==1)
                        <form action="{{url('course/toggleStatus')}}" method="POST">
                          @csrf<input type="hidden" name="cid" value="{{$item->id}}">
                          <button name="submit" value="active" type="submit" class="btn btn-sm btn-success"><i class="fa fa-check"></i></button>
                        </form>
                        @else
                        <form action="{{url('course/toggleStatus')}}" method="POST">
                          @csrf
                          <input type="hidden"  name="cid" value="{{$item->id}}">
                          <button name="submit" value="inactive" type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                        </form>
                        @endif
                      </td>
                      <td>

                            <a  class="btn btn-sm btn-info" title="View More" data-toggle="modal" data-target="#mymodal{{$key}}"><i class="fa fa-eye"></i></a>

                            <a href="{{url('edit-course/'.$item->id)}}" class="btn btn-sm btn-warning" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{url('delete-course/'.$item->id)}}" class="btn btn-sm btn-danger " title="Delete" onclick="return confirm('Are you sure you want to delete this?')"><i class="fa fa-trash"></i></a>
                      </td>
                       
                </tr>
                      
                    <!-- Scrollable modal -->
                    <div class="modal fade" id="mymodal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Details of {{$item->cname}} {{$item->price}} {{$item->duration}}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            
                            <div class="modal-body">
                                <b>Name</b> : {{$item->cname}} <hr>
                               <b> Price </b>: {{$item->price}}<hr>
                                <b>Duration</b> : {{$item->duration}}<hr>
                            </div>


                                

 
                            {{-- <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                      <?php $item++;?>
                
          @endforeach
        </tbody>
       </table>
   </div>

  

@endsection
