


<div>
    <div class="row">
    <div class="col-md-3 " style="float: end">
        <input type="text" class="form-control" wire:model="search" placeholder="search by name">
    </div>
        <div class="col-md-3 " style="float: end">
            <input type="number" class="form-control" wire:model="searchnum" placeholder="search by phone">
        </div>

        <div class="col-md-3 " style="float: end">
            <input type="text" class="form-control" wire:model="searchaddress" placeholder="search by address">
        </div>

    </div>
    <div class="col-md-6 pt-5 " style="float: end">
        <img src="https://techprint.co.za/wp-content/uploads/2017/09/phone-address-banner.jpg " alt="" height="100px" width="800px">
    </div>
<div class="container">

<div class="row">
    <div class="col-md-6 col-sm-6 col-lg-6 pt-5 ">
        @if($phoneUpdate)
            @include('livewire.edit')
        @else
            @include('livewire.create')
        @endif

    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 pt-5">
        <h1 style="text-justify: initial ">Phone List</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">S.N</th>
                <th scope="col">Name</th>
                <th scope="col">phone</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">gender</th>
                <th scope="col">created_at</th>
                <th scope="col">updated_at</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach($data['phone'] as $i=>$phone)
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$phone->name}}</td>
                    <td>{{$phone->phone}}</td>
                    <td>{{$phone->email}}</td>
                    <td>{{$phone->address}}</td>
                    <td>
                        @if($phone->gender == 1)
                            Male
                        @else
                            Female
                        @endif
                    </td>
                    <td>{{$phone->created_at->diffForHumans()}}</td>

                    <td>
                        @if($phone->updated_at == NULL)
                            NULL
                        @else
                            {{$phone->updated_at->diffForHumans()}}
                        @endif
                    </td>

                    <td style="width: max-content">
                        <button wire:click="Edit({{$phone->id}})" class="btn  btn-primary btn-sm"> Edit </button>


                        <button onclick="confirm('Are you sure! You want to delete this?') ||event.stopImmediatePropagation()" wire:click="Delete({{$phone->id}})" type="submit" class="btn btn-sm btn-danger">Delete</button>


                    </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
