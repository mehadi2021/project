@extends('admin.master')
@section('content')




<div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading wht-bg">
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Member">
                        <br>
                       <button a href="" class="btn btn-info "> serach</button></a>
                      </div>
                    </form>

    <!-- Button trigger modal -->
  <h1 class="modal-title text-warning"  style="color:black;text-align:center;"> Add New Loan</h1>
<div class=" text-start">
<a href="{{ route('admin.loan.add') }}" class="btn btn-info " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add New Loan
</a>
</div>
   </header>
            </section>
</div>
<br>

<table class="table table-striped table-bordered border-primary bg-light table-cell-padding-.2rem" style="margin-top:10px;">
    <thead class= "table-dark">
      <tr>
        <th scope="col"> Member  ID</th>
        <th scope="col"> Member Name  </th>
        <th scope="col"> Account No</th>
        <th scope="col">Loan Amount</th>
        <th scope="col">Rate</th>
        <th scope="col">Time</th>
        <th scope="col">Interest</th>
            <th scope="col">EMI</th>
             <th scope="col">Payment Date</th>
      </tr>
    </thead>
    <tbody>
@foreach($lists as $key=>$list)
{{-- @dd($data->loanMember->Memberuser); --}}
        <tr>
              <th scope="row">
          {{$list->member_id}}</th>
           <td>{{$list->member_name}}</td>
           <td>{{$list->ac_no}}</td>
           <td>{{$list->loan_amount}}</td>
           <td>{{$list->rate}}</td>
           <td>{{$list->time}}</td>
           <td>{{$list->interest}}</td>
           <td>{{$list->emi}}</td>
           <td>{{$list->payment_date}}</td>
            <td><a class="btn btn-primary" href="" role="button">edit</a>
             <a onclick="return confirm('Are You Sure?')" class="btn btn-danger" href="{{ route('admin.loan.delete',$list->id) }}" role="button">delete</a></td>


        </tr>
        @endforeach


  </table>
    @endsection
