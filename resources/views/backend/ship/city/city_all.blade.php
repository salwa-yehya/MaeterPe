@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">City </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">City</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
		<a href="{{ route('add.city') }}" class="btn btn-primary">Add City</a> 				 
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Country Name </th> 
                                        <th>City Name </th> 
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                    <tbody>
                                   @foreach($city as $key => $item)		
                                    <tr>
                                        <td> {{ $key+1 }} </td>
                                        <td> {{ $item['country']['country_name'] }}</td> 
                                        <td> {{ $item->city_name }}</td> 
                                        <td>
                                        <a href="{{ route('edit.city',$item->id) }}" ><i class="fa fa-pencil" style="padding-right: 10px"></i></a>
                                        <a href="{{ route('delete.city',$item->id) }}"  id="delete" ><i class="fa fa-trash" style="padding-right: 10px"></i></a>

                                        </td> 
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
						</div>
					</div>
				</div>



			</div>




@endsection