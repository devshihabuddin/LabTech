@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Client-Message
                        
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
                                            <th>Name</th>                                         
                                            <th>Email</th>
                                            <th>phone</th>
                                            <th>message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Name</th>                                         
                                            <th>Email</th>
                                            <th>phone</th>
                                            <th>message</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($clientmessages as $key=>$data)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->phone}}</td>
                                            <td>{!! Str::limit($data->message,30,'...') !!}</td>
                                            <td>
                                            <a href="{{route('clientmessage.show',$data->id)}}" data-toggle="tooltip" title="show" class="btn btn-sm btn-outline-info"><i class="icon-eye"></i></a>
                                                <button type="button" onclick="deleteMessage({{$data->id}})"  class="btn btn-sm btn-outline-danger"><i class="icon-trash"></i></button>
                                                <form id="delete-form-{{ $data->id}}" action="{{route('clientmessage.destroy',$data->id)}}" method="POST" style="display: none;">
                                                    @csrf
                                                    @method('delete')
                                                </form>                                              
                                            </td>
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
function deleteMessage(id){
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        });
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
    });

}
</script>
@endpush