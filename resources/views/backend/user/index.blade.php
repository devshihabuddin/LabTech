@extends('backend.layouts.master')
@push('css')

@endpush
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> User List
                        <a class="btn btn-sm btn-outline-secondary float-right" href="{{route('user.create')}}"><b>+create user</b></a></h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>                            
                            
                            <li class="breadcrumb-item active">User</li>
                        </ul>
                        <p><h3>Total Users: {{\App\Models\User::count()}}</h3></p>
                    </div>            
                </div>
            </div>
            
            <div class="row clearfix">
            <div class="col-lg-12">
                @include('backend.layouts.notification')
            </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>SL No.</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th>SL No.</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($users as $key=>$item)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$item->username}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>
                                                <img src="/images/user/{{$item->image}}" alt="user img" style="border-radius:50%; width: 100px; height: 100px">
                                            </td>
                                            <td>
                                                <a href="{{route('user.edit',$item->id)}}" data-toggle="tooltip" title="edit" class="btn btn-sm btn-outline-info"><i class="icon-note"></i></a>
                                                <button type="button" onclick="deleteUser({{$item->id}})"  class="btn btn-sm btn-outline-danger"><i class="icon-trash"></i></button>
                                                <form id="delete-form-{{ $item->id}}" action="{{route('user.destroy',$item->id)}}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                                
                                            </td>
                                            <!-- Modal -->
                                            <div class="modal fade" id="userId{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                @php 

                                                $user = \App\Models\User::where('id',$item->id)->first();

                                                @endphp
                                                <div class="modal-content">
                                                    
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{$user->full_name}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>

                                                    
                                                </div>
                                                <div class="modal-body">
                                                <div class="text-center">
                                                        <img src="{{$user->photo}}" style="height:180px; width:250px;" alt="">
                                                    </div>
                                                    <strong>User Name:</strong>
                                                    <p>{{$user->username}}</p>


                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong>Email</strong>
                                                            <p>{{$user->email}}</p> 
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Phone</strong>
                                                            <p>{{$user->phone}}</p> 
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong>Address</strong>
                                                            <p>{{$user->address}}</p> 
                                                        </div>
                                                        <div class="col-md-6">
                                                            <strong>Role</strong>
                                                            <p>{{$user->role}}</p> 
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <strong>Status</strong>
                                                            <p class="badge badge-warning">{{$user->status}}</p> 
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            <!--End Modal -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

         

        </div>
    </div>
@endsection

@push('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function deleteUser(id){
        const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You want delete this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    event.preventDefault();
    document.getElementById('delete-form-'+id).submit();
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your file is safe :)',
      'error'
    )
  }
})

    }
</script>
@endpush