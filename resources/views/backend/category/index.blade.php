@extends('backend.layouts.master')
@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">                        
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Category List
                        <a class="btn btn-sm btn-outline-secondary float-right" href="{{route('category.create')}}"><b>+create Category</b></a></h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Category</li>
                        </ul>
                        <p><h3>Total Category: {{\App\Models\Category::count()}}</h3></p>
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
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SL No.</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($categories as $key=>$data)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$data->category_name}}</td>
                                            <td><img src="/images/{{$data->image}}" style="max-width: 90px; max-height: 90px"></td>
                                            <td>{{$data->slug}}</td>
                                            <td>
                                                <input type="checkbox" name="toogle" value="{{$data->id}}" data-toggle="switchbutton" {{$data->status=='active' ?'checked' : ''}} data-onlabel="Active" data-offlabel="Inactive" data-size="small" data-onstyle="success" data-offstyle="danger">
                                            </td>
                                            <td>
                                                <a href="{{route('category.edit',$data->id)}}" data-toggle="tooltip" title="edit" class="btn btn-sm btn-outline-info"><i class="icon-note"></i></a>
                                                <button type="button" onclick="deleteCategory({{$data->id}})"  class="btn btn-sm btn-outline-danger"><i class="icon-trash"></i></button>
                                                <form id="delete-form-{{ $data->id}}" action="{{route('category.destroy',$data->id)}}" method="POST" style="display: none;">
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
<script>
    $('input[name=toogle]').change(function(){
        var mode=$(this).prop('checked');
        var id=$(this).val();
       $.ajax({
           url:"{{route('category.status')}}",
           type:'POST',
           data:{
               _token:'{{csrf_token()}}',
               mode:mode,
               id:id,
           },
           success:function(response){
              if(response.status){
                  alert(response.msg);
              }else{
                  alert('Please try again');
              }
           }

       })
    });
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function deleteCategory(id){
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